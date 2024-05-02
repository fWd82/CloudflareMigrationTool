// https://console-intl.huaweicloud.com/apiexplorer/#/openapi/VOD/debug?api=ListTemplateGroup

// "group_id": "b6bba8c5f80d4cd5a193bee2335f7551",
// "name": "HLS_H265_4K",

// Upload Meta Data By Url
// https://console-intl.huaweicloud.com/apiexplorer/#/openapi/VOD/doc?api=UploadMetaDataByUrl

// List Asset 
// https://console-intl.huaweicloud.com/apiexplorer/#/openapi/VOD/doc?api=ListAssetList

// Update Asset Meta
// https://console-intl.huaweicloud.com/apiexplorer/#/openapi/VOD/doc?api=UpdateAssetMeta

// Show a count of entered non empty lines in a badge
function showLineNumberOnBadge(textAreaId, badgeId) {
    // Get the current text from textarea
    const text = $(textAreaId).val();

    // Calculate the number of non-empty lines
    const nonEmptyLineCount = text.split("\n").filter(line => line.trim() !== "").length;

    // Update the line count display
    $(badgeId).html('Number of Records: <span class="badge badge-primary badge-pill">' + nonEmptyLineCount + '</span>');
}

// Update progress bar - Related with Third Step
function updateProgressBar(selector, processedRecords, totalRecords) {
    const progressPercentage = Math.min((processedRecords / totalRecords) * 100, 100);
    $(selector).css('width', progressPercentage + '%').attr('aria-valuenow', processedRecords).text(progressPercentage.toFixed(0) + '%');
}

// When finally page loads up
$(document).ready(function () {
    $('#spinner-step-1').addClass('d-none'); // hide the loader 
    $('#spinner-step-2').addClass('d-none'); // hide the loader
    $('#spinner-step-31').addClass('d-none'); // hide the loader of template group
    $('#spinner-step-32').addClass('d-none'); // hide the loader of button
    $('#spinner-step-4').addClass('d-none'); // hide the loader 
    $('#spinner-step-5').addClass('d-none'); // hide the loader 

    /////////////////////////////////////////////////////////////////
    // Show Count of lines for TextArea 
    $('#cloudflareVideosMp4Links').on('input', function () {
        showLineNumberOnBadge(this, '#lineCountDisplay');
    });
    $('#cloudflareLinks').on('input', function () {
        showLineNumberOnBadge(this, '#enableMp4DownloadLinksCount');
    });
    $('#textareaHuaweiVideosLinks').on('input', function () {
        showLineNumberOnBadge(this, '#textareaHuaweiVideosLinksCount');
    });

    // Template group is fetched and shown either on taping reload/refresh button or when clicked on select. 
    $("#listTemplateGroup").click(listTemplateGroup);
    $("#videoTemplateGroupName").click(listTemplateGroup);
    // listTemplateGroup(); Later I will uncomment

    ////////////////////////////////////////////////////////////////////////////////////

    // First Step (Optional): Fetching Cloudflare Videos Links
    // a function to fetch video links from cloudflare.
    $("#fetchCloudflareVideoLinks").click(function () {
        // Resetting div view
        $("#videoLinks").html("");
        // $("#failedLinks").html("");

        let authEmail = $("#X-Auth-Email").val().trim();
        let authKey = $("#X-Auth-Key").val().trim();
        let accountId = $("#account_id").val().trim();
        let customer_subdomain = $("#customer_subdomain").val().trim();

        if (!authEmail) {
            console.log("X-Auth-Email is empty");
            $("#videoLinks").html("<span class='text-danger'>X-Auth-Email is empty</span>");
            return;
        }

        if (!authKey) {
            $("#videoLinks").html("<span class='text-danger'>X-Auth-Key is empty</span>");
            return;
        }

        if (!accountId) {
            $("#videoLinks").html("<span class='text-danger'>Account ID is empty</span>");
            return;
        }

        if (!customer_subdomain) {
            $("#videoLinks").html("<span class='text-danger'>Customer Subdomain is empty</span>");
            return;
        }

        $('#spinner-step-1').removeClass('d-none'); // display the spinner.
        let cloudflareLinksCount = 0;

        let apiUrl = "https://api.cloudflare.com/client/v4/accounts/" + accountId + "/stream";

        $.ajax({
            url: apiUrl,
            type: "GET",
            dataType: "json",
            headers: {
                "Content-Type": "application/json",
                "X-Auth-Email": authEmail,
                "X-Auth-Key": authKey
            },
            success: function (response) {
                if (response.success) {
                    let linksHtml = "<h3 class='text-secondary'>Cloudflare Videos Links</h3><p>Links fetched from Cloudflare</p><ol class='scrollableContainer text-sm'>";
                    $.each(response.result, function (index, video) {
                        if (video.playback && video.playback.hls) {
                            linksHtml += "<li>" + video.playback.hls + "</li>";
                        }
                    });
                    linksHtml += "</ol><h3 class='text-secondary'>Total Links: " + response.result.length + "</h3>";

                    $("#videoLinks").html(linksHtml);
                    console.log("Cloudflare Length is: " + response.result.length);
                    $("#cloudflareLinksCount").html('Total Records Fetched: <span class="badge badge-primary badge-pill">' + response.result.length + '</span>');
                } else {
                    $("#videoLinks").html("Failed to fetch HLS links. Check your credentials and account permissions.<br />");
                }
                $('#spinner-step-1').addClass('d-none'); // addClass('d-none')
            },
            error: function () {
                $("#videoLinks").html("An error occurred while fetching data.");
                $('#spinner1').addClass('d-none'); // addClass('d-none')
            }
        });
    });

    ////////////////////////////////////////////////////////////////////////////////////

    // Second Step - Preparing Cloudflare files to Migrate
    // a function to enable download mp4 links in cloudflare
    $("#enableMp4DownloadLinks").click(function () {
        $('#spinner-step-2').removeClass('d-none'); // display the spinner.

        // Resetting div view
        $("#successfulLinks").html("");
        $("#failedLinks").html("");

        // Getting the value from the textarea
        const inputTextUrls0 = $("#cloudflareLinks").val().trim();
        // Check if the textarea is empty or not
        if (inputTextUrls0 === "") {
            $("#failedLinks").html("<span class='text-danger'>Please enter at least one URL</span>");
            $('#spinner-step-2').addClass('d-none');
            return;  // Stop further execution if the textarea is empty
        }

        let inputTextUrls = $("#cloudflareLinks").val();
        let m3u8Urls = inputTextUrls.split('\n').map(link => link.trim()).filter(link => link !== "");
        let successfulLinks = [];
        let failedLinks = [];

        let authEmail = $("#X-Auth-Email").val();
        let authKey = $("#X-Auth-Key").val();
        let accountId = $("#account_id").val();
        let customerSubdomain = $("#customer_subdomain").val();

        // Function to enable download option for a video
        function enableDownload(videoUid) {
            let apiUrl = "https://api.cloudflare.com/client/v4/accounts/" + accountId + "/stream/" + videoUid + "/downloads";

            $.ajax({
                url: apiUrl,
                type: "POST",
                dataType: "json",
                headers: {
                    "X-Auth-Email": authEmail,
                    "X-Auth-Key": authKey,
                    "Content-Type": "application/json"
                },
                success: function (response) {
                    if (response.success) {
                        let downloadLink = response.result.default.url + "?filename=" + videoUid + ".mp4";
                        successfulLinks.push(downloadLink);
                    } else {
                        let m3u8Link = "https://" + customerSubdomain + "/" + videoUid + "/manifest/video.m3u8";
                        failedLinks.push(m3u8Link);
                    }

                    // Display successful enabled links
                    displayLinks();
                },
                error: function () {
                    // Display unsuccessful video ids.
                    let m3u8Link = "https://" + customerSubdomain + "/" + videoUid + "/manifest/video.m3u8";
                    failedLinks.push(m3u8Link);
                    displayLinks();
                }
            });
        }

        // Display function to show the successful and unsuccessful links on page
        function displayLinks() {
            $('#spinner-step-2').addClass('d-none'); // display the spinner.
            if (successfulLinks.length) {
                let successHtml = "<h3>Successful Links <span class='badge badge-primary badge-pill'>" + successfulLinks.length + "</span></h3><ol class='scrollableContainer'>";
                $.each(successfulLinks, function (index, link) {
                    successHtml += "<li>" + link + "</li>";
                });
                successHtml += "</ol>";
                $("#successfulLinks").html(successHtml);
            }

            if (failedLinks.length) {
                let failedHtml = "<h2>Failed Links <span class='badge badge-danger badge-pill'>" + failedLinks.length + "</span></h2><ol class='scrollableContainer'>";
                $.each(failedLinks, function (index, link) {
                    failedHtml += '<li style="color: red">' + link + "</li>";
                });
                failedHtml += "</ol>";
                $("#failedLinks").html(failedHtml);
            }
        }

        // Process each URL to extract ids and then enable the mp4 downloads for it
        $.each(m3u8Urls, function (index, m3u8Url) {
            // extract video id from the pasted cloudflare links.
            let matches = /\/([^\/]+)\/manifest\/video.m3u8$/.exec(m3u8Url);
            if (matches && matches[1]) {
                enableDownload(matches[1]);//matches[1] contains video uid
            } else {
                failedLinks.push(m3u8Url);
                displayLinks();
            }

        });
    });

    // Third Step - Uploading (Importing) videos from Cloudflare | Cloudstream to Huawei Cloud VOD
    // A function to add a video to Huawei cloud from a link
    $("#importFromCloudflareToHuawei").click(function () {
        $("#importedFromCloudflareToHuaweiLinks").html(""); // Resetting div view

        // Collecting inputs
        let ak = $("#ak").val().trim();
        let sk = $("#sk").val().trim();
        let endpoint = $("#endpoint").val().trim();
        let projectId = $("#projectId").val().trim();
        let videoType = $("#videoType").val().trim();
        let videoTemplateGroupName = $("#videoTemplateGroupName").val().trim();
        let inputTextUrls = $("#cloudflareVideosMp4Links").val();

        if (!ak) {
            $("#importedFromCloudflareToHuaweiLinks").html("<span class='text-danger'>AK is empty</span>");
            return;
        }

        if (!sk) {
            $("#importedFromCloudflareToHuaweiLinks").html("<span class='text-danger'>SK is empty</span>");
            return;
        }

        if (!endpoint) {
            $("#importedFromCloudflareToHuaweiLinks").html("<span class='text-danger'>Endpoint is empty</span>");
            return;
        }

        if (!projectId) {
            $("#importedFromCloudflareToHuaweiLinks").html("<span class='text-danger'>Project ID is empty</span>");
            return;
        }

        // Getting the value from the textarea
        const inputTextUrls0 = $("#cloudflareVideosMp4Links").val();
        // Check if the textarea is empty or not
        if (inputTextUrls0 === "") {
            $("#importedFromCloudflareToHuaweiLinks").html("<span class='text-danger'>Please enter at least one URL</span>");
            return;  // Stop further execution if the textarea is empty
        }

        $('#spinner-step-32').removeClass('d-none');
        $('.progress-3').removeClass('d-none');
        $('#progressBar-3').width('0%'); // Reset progress bar

        let mp4Urls = inputTextUrls.split('\n')
            .map(link => link.trim())      // Trim whitespace
            .filter(link => link !== "");  // Remove empty lines

        const BATCH_SIZE = 100;
        let processedUrls = 0;
        const totalUrls = mp4Urls.length;

        for (let i = 0; i < totalUrls; i += BATCH_SIZE) {
            const batchUrls = mp4Urls.slice(i, i + BATCH_SIZE);
            sendBatch(batchUrls);

            const batchNumber = Math.floor(i / BATCH_SIZE) + 1;

            $("#importedFromCloudflareToHuaweiLinks1").html('Batch Size of (100): <span class="badge badge-primary badge-pill">' + batchNumber + '</span>');
        }

        function sendBatch(batchUrls) {
            batchUrls.forEach(mp4Url => {
                $.ajax({
                    url: `3-UploadMetaDataByUrl.php`,
                    method: "GET",
                    timeout: 0,
                    headers: {
                        "Content-Type": "application/json",
                        "X-Language": "en-us" // let us test it if it works.
                    },
                    data: {
                        ak,
                        sk,
                        endpoint,
                        projectId,
                        videoType,
                        videoTemplateGroupName,
                        videoTitle: mp4Url.split('/')[3],
                        videoUrl: mp4Url,
                    },
                    success: function (response) {
                        processResponse(response, mp4Url);  // Now passing mp4Url to processResponse
                    },
                    error: function (xhr, status, error) {
                        console.error('Error with URL:', mp4Url, error);
                        $("#importedFromCloudflareToHuaweiLinks").append('<div class="alert alert-danger">Failed to import URL: ' + mp4Url + ' Error: ' + error + '</div>');
                    },
                    complete: function () {
                        processedUrls++;  // Increment after each URL processed
                        updateProgressBar('#progressBar-3', processedUrls, totalUrls);  // Update the progress bar
                        if (processedUrls === totalUrls) {
                            $('#spinner-step-32').addClass('d-none'); // Hide spinner after all processes
                        }
                    }
                });
            });
        }

        let urlCounter = 0;

        function processResponse(response, mp4Url) {
            urlCounter++;  // Increment counter for each processed URL
            try {
                const data = JSON.parse(response);
                if (Object.keys(data.upload_assets[0]).length !== 0) {  // Checking if the response is an empty object
                    $("#importedFromCloudflareToHuaweiLinks")
                        .addClass('scrollableContainer')
                        .append('<div class="alert alert-success"><strong>' + urlCounter + '</strong>. Successfully imported video: ' + mp4Url + '<br><strong>New ID: </strong>' + data.upload_assets[0].asset_id + '</div>');
                } else {
                    const dataAsString = JSON.stringify(data, null, 2);
                    $("#importedFromCloudflareToHuaweiLinks")
                        .append('<div class="alert alert-warning"><strong>' + urlCounter + '</strong>. Unexpected data format for URL: ' + mp4Url + '<pre>' + dataAsString + '</pre></div>');
                }
            } catch (e) {
                console.error('Error parsing JSON for URL:', mp4Url, e);
                $("#importedFromCloudflareToHuaweiLinks")
                    .addClass('scrollableContainer')
                    .append('<div class="alert alert-danger"><strong>' + urlCounter + '</strong>. Error parsing JSON for URL: ' + mp4Url + ' Error: ' + e.message + '</div>');
            }
        }
    });
    // eof #importFromCloudflareToHuawei()

    // Related to Third Step
    // Function to get template groups from Huawei Cloud
    function listTemplateGroup() {
        $('#spinner-step-31').removeClass('d-none'); // show spinner
        $("#div_listTemplateGroup").html("");
        console.log("list_template_group Method is called");
        console.log("Aw kana 1");

        let ak = $("#ak").val();
        let sk = $("#sk").val();
        let endpoint = $("#endpoint").val();
        let projectId = $("#projectId").val();

        $.ajax({
            url: `3-list_template_group.php`,
            method: "POST",
            timeout: 0,
            contentType: "application/x-www-form-urlencoded",
            dataType: 'json', // Expect JSON response
            data: {
                ak,
                sk,
                endpoint,
                projectId,
            },
            success: function (response) {
                let optionsValues = '<select class="form-control form-control-sm" id="videoTemplateGroupName" name="videoTemplateGroupName">';
                // Add an empty option at the start
                optionsValues += '<option value="">Don\'t apply any Template</option>';
                jQuery.each(response.template_group_list, function (index, item) {

                    optionsValues += '<option value="' + item.name + '">' + item.name + '</option>';

                    /* non_transcoding_template_group
                    system_template_group
                    original_template_group
                    adaptive_template_group
                    HLS_H265_4K
                    MP4_H265
                    MP4_H264
                    HLS_H265
                    HLS_H264 */
                });
                optionsValues += '</select>';
                let options = $('#videoTemplateGroupName');
                options.replaceWith(optionsValues);
                $('#spinner-step-31').addClass('d-none');
            },
            // error: function (xhr, status, error) {
            //     console.log('Error: ', error);
            //     $("#div_listTemplateGroup").html('<div class="alert alert-danger">An error occurred: ' + error + '</div>');
            //     $('#spinner-step-31').addClass('d-none');
            // }
            error: function(xhr, status, error) {
                console.log('XHR error:', xhr);
                if (xhr.responseJSON && xhr.responseJSON.error) {
                    $("#div_listTemplateGroup").html('<div class="alert alert-danger">Server Error: ' + xhr.responseJSON.error + '</div>');
                }
                else if (xhr.responseText.startsWith('<')) {
                    $("#div_listTemplateGroup").html('<div class="alert alert-danger">Unexpected response format.</div>');
                } else {
                    $("#div_listTemplateGroup").html('<div class="alert alert-danger">An error occurred2: ' + error + '</div>');
                }
                $('#spinner-step-31').addClass('d-none');
            }
            
        });
    };
    // eof listTemplateGroup();

    ////////////////////////////////////////////////////////////////////////////////////

    // Fourth Step - Getting new links from Huawei Cloud VOD
    // function to get ids, and links of videos from huawei VOD
    let assetsAllInfo = []; // array to hold ids and urls of both cloudflare and huawei.
    $("#getHuaweiVODLinks").click(function () {

        $("#progressBar-4").attr("aria-valuemax", 0); // bringing ProgressBar to normal.
        $("#div_huawei_cloud_links").html("");
        $("#div_huawei_cloud_links_total_records").html("");
        $("#div_huawei_cloud_links_count").html("");

        console.log("#getHuaweiVODLinks Step 4 called");
        $('#spinner-step-4').removeClass('d-none'); // Display the spinner
        $('.progress-4').removeClass('d-none');

        // Collecting inputs
        let ak = $("#ak").val().trim();
        let sk = $("#sk").val().trim();
        let endpoint = $("#endpoint").val().trim();
        let projectId = $("#projectId").val().trim();
        let domainName = $("#domainName").val().trim();
        let customer_subdomain = $("#customer_subdomain").val().trim();

        if (!ak) {
            $("#div_huawei_cloud_links").html("<span class='text-danger'>AK is empty</span>");
            return;
        }

        if (!sk) {
            $("#div_huawei_cloud_links").html("<span class='text-danger'>SK is empty</span>");
            return;
        }

        if (!endpoint) {
            $("#div_huawei_cloud_links").html("<span class='text-danger'>Endpoint is empty</span>");
            return;
        }

        if (!projectId) {
            $("#div_huawei_cloud_links").html("<span class='text-danger'>Project ID is empty</span>");
            return;
        }

        if (!customer_subdomain) {
            $("#videoLinks").html("<span class='text-danger'>Customer Subdomain is empty</span>");
            return;
        }

        if (!domainName) {
            $("#videoLinks").html("<span class='text-danger'>Domain Name is empty</span>");
            return;
        }

        let listAssetPageNo = 0;
        const listAssetSize = 100;

        let totalRecordsExpected = 0;

        function fetchAssets(pageNo) {
            $.ajax({
                url: `4-get_huawei_vod_links.php`,
                method: "POST",
                timeout: 0,
                contentType: "application/x-www-form-urlencoded",
                dataType: 'json', // Expect JSON response for success and even for failures
                headers: {
                    "X-Language": "en-us" // let us test it if it works. Huawei Cloud will respond in Chinese. But PHP SDK is not sipporting sending and receiving in header, this is just my testing.
                },
                data: {
                    ak,
                    sk,
                    endpoint,
                    projectId,
                    listAssetPageNo: pageNo
                },
                success: function (response) {
                    // The problem here is, even if internet is not connected etc, it will still come to success phase. So we have to look for array which is 'error' and then we will print it accordingly.
                    console.log("Success 4 is called")
                    console.log(response);

                    // Check for "error" in response.error and handle it
                    // if (response.error && response.error.toLowerCase().includes("error")) {
                    // if (response.error && typeof response.error === 'string' && response.error.toLowerCase().includes("error")) {
                    if ('error' in response) {
                        // Display the error in the div and log it
                        $("#div_huawei_cloud_links").html('<div class="alert alert-danger text-sm" style="font-size: smaller; margin: 1rem;">An error occurred: ' + response.error + '</div>');
                        console.log(response.error);
                        $('#spinner-step-4').addClass('d-none'); // Hide spinner
                    } else {
                        // Existing logic if there is no "error" in response.error
                        if (totalRecordsExpected === 0) { // set total records expected on the first success
                            totalRecordsExpected = response.total;
                            $("#progressBar-4").attr("aria-valuemax", totalRecordsExpected);
                        }

                        assetsAllInfo = assetsAllInfo.concat(response.assets.map(({ asset_id, title }) => ({
                            huaweiCloudVideoTitle: title, 
                            huaweiCloudVideoId: asset_id,
                            huaweiCloudVideoUrl: `${domainName}/asset/${asset_id}/play_video/index.m3u8`,
                            // TODO: Put domian name here

                            // cloudflareVideoMP4Url: `https://${customer_subdomain}/${title}/downloads/default.mp4?filename=${title}.mp4`,
                            // cloudflareVideoM3U8Url: `https://${customer_subdomain}/${title}/manifest/video.m3u8`
                        })));

                        const processedRecords = listAssetSize * (pageNo + 1);
                        updateProgressBar('#progressBar-4', processedRecords, totalRecordsExpected);

                        if (processedRecords < response.total) {
                            fetchAssets(pageNo + 1); // Fetch the next page
                        } else {
                            $("#div_huawei_cloud_links_total_records").html('Total Records Found: <span class="badge badge-primary badge-pill">' + response.total + '</span>');
                            updateUI(assetsAllInfo); // Update UI once all data is fetched
                        }
                    }
                },

                error: function (xhr, status, error) {
                    $('#spinner-step-4').addClass('d-none'); // Hide spinner
                    $("#div_huawei_cloud_links").html('<div class="alert alert-danger text-sm" style="font-size: smaller; margin: 1rem;">An error occurred: ' + error + '</div>');

                    console.log(error.error);
                    // $("#div_huawei_cloud_links").html(error);
                }
            });
        }

        fetchAssets(listAssetPageNo); // Start fetching from the first page
    });

 
    // Related to Fourth Step
    // Function to update UI after Huawei Cloud Links are fethced
    function updateUI(assets) {
        let contentHtml = '<div class="scrollableContainer alert alert-success text-sm" style="font-size: smaller; margin: 1rem;">';
        let contentHtmlCSV = '<div class="scrollableContainer2  text-sm" style="font-size: smaller; margin: 1rem;"><table class="table table-bordered"><tr><th>Sr.No </th><th>CloudflareVideoID</th><th>HuaweiCloudVideoUrl</th></tr>';
        let csvContent = "Sr.no,huaweiCloudVideoTitle,huaweiCloudVideoUrl\n";
        let textAreaContent = '';
        let count = 0;
    
        assets.forEach(({ huaweiCloudVideoTitle, huaweiCloudVideoUrl }) => {
            count++;
            contentHtml += '<p><strong>' + count + '</strong>: Title | Name: ' + huaweiCloudVideoTitle + '</p>';
            contentHtml += '<p>URL: <a href="' + huaweiCloudVideoUrl + '">' + huaweiCloudVideoUrl + '</a></p> <hr />';
            
            contentHtmlCSV += '<tr><td>' + count + '</td><td>' + huaweiCloudVideoTitle + '</td><td>' + huaweiCloudVideoUrl + '</td></tr>';
            csvContent += count + ',"' + huaweiCloudVideoTitle.replace(/"/g, '""') + '","' + huaweiCloudVideoUrl.replace(/"/g, '""') + '"\n';
            textAreaContent += huaweiCloudVideoUrl + "\n";
        });
    
        contentHtml += '</div>';
        contentHtmlCSV += '</table></div>';
    
        $("#div_huawei_cloud_links").html(contentHtml);
        $("#div_huawei_cloud_links_csv").html(contentHtmlCSV); // Set the HTML content of the CSV links div
        $('#textareaHuaweiVideosLinks').val(textAreaContent); // Set textarea content
        $('#spinner-step-4').addClass('d-none'); // Hide spinner
        $("#div_huawei_cloud_links_count").html('Total Records Fetched: <span class="badge badge-primary badge-pill">' + count + '</span>');
    
        // Create a Blob from the CSV string
        let blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
        let url = URL.createObjectURL(blob);
        
        // Create a link to download it
        let downloadLink = $('<a href="' + url + '" download="huaweiCloudVideos.csv">Download CSV</a>');
        $("#div_huawei_cloud_links_csv").append(downloadLink); // Add the download link to the div div_huawei_cloud_links_csv2
        $("#div_huawei_cloud_links_csv2").html("<p class='card-text'>You can download <code>CSV Document</code>, search for  <code>CloudflareVideoID</code> in your MySQL database and replace it with <code>HuaweiCloudVideoUrl</code></p><p class='card-text'>Your SQL Query might look like this: <br/> <code>$sql = 'UPDATE {$db_table_name} SET {$db_table_column} = :HuaweiCloudVideoUrl WHERE {$db_table_column} LIKE CONCAT('%', :CloudflareVideoID, '%')'; </code></p>");
    }
 
    ////////////////////////////////////////////////////////////////////////////////////

    // Fifth Step - Updating database from Cloudstream links to Huawei Cloud VOD links
    // Function to extract video links and ids of huawei from textarea
    $("#updateMySqlDbLinks").click(function () {

        // Restting div view
        $("#mysql_response_5_updates").html("");
        // $("#failedLinks").html("");

        // Collecting inputs
        let db_host = $("#db_host").val().trim();
        let db_username = $("#db_username").val().trim();
        let db_name = $("#db_name").val().trim();
        let db_table_name = $("#db_table_name").val().trim();
        let db_table_column = $("#db_table_column").val().trim();
        


        if (!db_host) {
            $("#mysql_response_5_updates").html("<span class='text-danger'>DB Host is empty</span>");
            return;
        }

        if (!db_username) {
            $("#mysql_response_5_updates").html("<span class='text-danger'>DB Username is empty</span>");
            return;
        }

        if (!db_table_name) {
            $("#mysql_response_5_updates").html("<span class='text-danger'>Database - Name is empty</span>");
            return;
        }

        if (!db_host) {
            $("#mysql_response_5_updates").html("<span class='text-danger'>Database - Host is empty</span>");
            return;
        }

        if (!db_table_column) {
            $("#mysql_response_5_updates").html("<span class='text-danger'>Database - Column Name is empty</span>");
            return;
        }

        $('#spinner-step-5').removeClass('d-none');

        // Getting the value from the textarea to see if they are empty
        const inputTextUrls0 = $("#textareaHuaweiVideosLinks").val().trim();
        // Check if the textarea is empty or not
        if (inputTextUrls0 === "") {
            $("#mysql_response_5_updates").html("<span class='text-danger'>Please enter at least one URL - You can only press this button if you have successfully fetched Huawei Cloud VOD in Step 4</span>");
            $('#spinner-step-5').addClass('d-none');
            return;  // Stop further execution if the textarea is empty
        }


        //! I have added this approach in which i am accessing the data from step 4 in step 5 but here we cannot use the text area any more. the data if from third party pasted here cannot be used for now.

        // Calling a function here to add 'huaweiCloudVideoId' & 'videoUrl' to addd to one excel sheet.
        console.log('#updateMySqlDbLinks is clicked');
        console.log('updateLinksInMySQL() - function called');
        console.log('Printing: - assetsAllInfo');
        console.log(assetsAllInfo);
        updateLinksInMySQL(assetsAllInfo);
        $('#spinner-step-5').addClass('d-none');
    });

    // Related to Step - 5
    // Function to update video links in MySQL Database
    function updateLinksInMySQL(assetid_and_url) {
        console.log('update sha - I need it here2');
        console.log(assetid_and_url);
        // console.log(assetid_and_url[0].huaweiCloudVideoId);

        // return; // remove this to make changes to db and execute rest of function.

        let db_host = $("#db_host").val();
        let db_username = $("#db_username").val();
        let db_password = $("#db_password").val();
        let db_name = $("#db_name").val();
        let db_table_name = $("#db_table_name").val();
        let db_table_column = $("#db_table_column").val();

        let customer_subdomain = $("#customer_subdomain").val().trim();

        $.ajax({
            url: `5-script_db.php`,
            method: "POST",
            timeout: 0,
            contentType: "application/x-www-form-urlencoded",
            dataType: 'json', // Expect JSON response
            data: {
                db_host,
                db_username,
                db_password,
                db_name,
                db_table_column,
                db_table_name,
                assetid_and_url // Sending this array to PHP file
            },
            success: function (response) {
                console.log(response);
            
                // Clear previous messages
                $("#mysql_response_5_count").empty();
                $("#mysql_response_5_updates").empty();
            
                // Process each individual record
                if (response.records && Array.isArray(response.records)) {
                    response.records.forEach(function (item) {
                        let alertClass;
                        let message;
                        if (item.status === 'success') {
                            alertClass = 'alert-success';
                            message = `<div class="alert ${alertClass}"><strong>${item.recordNumber}</strong>: Video Title/Cloudflare ID: <strong> ${item.videoTitle}</strong> - ${item.message} <br /><a href="https://${customer_subdomain}/${item.videoTitle}/manifest/video.m3u8">https://${customer_subdomain}/${item.videoTitle}/manifest/video.m3u8</a> <br />Replaced with: <br /><a href="${item.videoLink}">${item.videoLink}</a></div>`;
                        } else {
                            alertClass = 'alert-warning';
                            message = `<div class="alert ${alertClass}"><strong>${item.recordNumber}</strong>: Video Title/Cloudflare ID: <strong> ${item.videoTitle}</strong> - ${item.message} <br /><a href="https://${customer_subdomain}/${item.videoTitle}/manifest/video.m3u8">https://${customer_subdomain}/${item.videoTitle}/manifest/video.m3u8</a> <br /></div>`;
                        }
                        $("#mysql_response_5_updates").append(message);
                    });
                    // response.records.forEach(function (item) {
                    //     let alertClass = item.status === 'success' ? 'alert-success' : 'alert-warning';
                    //     let message = `<div class="alert ${alertClass}"><strong>${item.recordNumber}</strong>: Video Title/Cloudflare ID: <strong> ${item.videoTitle}</strong> - ${item.message} <br /> https://${customer_subdomain}/${item.videoTitle}/manifest/video.m3u8 <br />Replace with: <br />  ${item.videoLink}</div>`;
                    //     $("#mysql_response_5_updates").append(message);
                    // });
                }
            
                // Display total records information
                if (response.totalRecords !== undefined) {
                    // $("#mysql_response_5_count").append(`<div class="alert alert-info">Total records processed <span class="badge badge-dark badge-pill">: ${response.totalRecords}</span></div>`);
                    // $("#mysql_response_5_count").append(`<div class="alert alert-success">Total updates made:<span class="badge badge-success badge-pill"> ${response.totalUpdates}</span></div>`);
                    // $("#mysql_response_5_count").append(`<div class="alert alert-warning">Total no change needed:<span class="badge badge-warning badge-pill"> ${response.totalNoChange}</span></div>`);
                    // $("#mysql_response_5_count").append(`<hr />`);

                    $("#mysql_response_5_count").append(`<h3>Stats</h3>`);
                    $("#mysql_response_5_count").append(`<div class="alert alert-secondary">Total records processed: <span class="badge badge-dark badge-pill"> ${response.totalRecords}</span> | Total updates made: <span class="badge badge-success badge-pill"> ${response.totalUpdates}</span> | Total no change needed: <span class="badge badge-warning badge-pill"> ${response.totalNoChange}</span> | Total records in MySQL Database: <span class="badge badge-dark badge-pill"> ${response.totalMysqlRecords} </span></div>`);
                    $("#mysql_response_5_count").append(`<hr />`);
                    $("#mysql_response_5_count").append(`<h3>Logs</h3>`);
                }
            
                console.log('Success: ', response);
            },
            error: function (xhr, status, error) {
                console.log('Error: ', error);
                $("#mysql_response_5_updates").html('<div class="alert alert-danger">An error occurred: ' + error + '</div>');
            }
        });
    }
    // eo updateLinksInMySQL

}); 
// eof $(document).ready(function();