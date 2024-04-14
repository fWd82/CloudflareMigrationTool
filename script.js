// https://console-intl.huaweicloud.com/apiexplorer/#/openapi/VOD/debug?api=ListTemplateGroup

// "group_id": "b6bba8c5f80d4cd5a193bee2335f7551",
// "name": "HLS_H265_4K",

// Upload Meta Data By Url
// https://console-intl.huaweicloud.com/apiexplorer/#/openapi/VOD/doc?api=UploadMetaDataByUrl



// List Asset 
// https://console-intl.huaweicloud.com/apiexplorer/#/openapi/VOD/doc?api=ListAssetList

// Update Asset Meta
// https://console-intl.huaweicloud.com/apiexplorer/#/openapi/VOD/doc?api=UpdateAssetMeta





$(document).ready(function () {
    $('#spinner1').addClass('d-none'); // first hide the loader of links.
    $('#spinner2').addClass('d-none'); // first hide the loader of links.

    // a function to fetch video links from cloudflare.
    $("#fetchCloudflareVideoLinks").click(function () {
        $('#spinner1').removeClass('d-none'); // display the spinner.
        let authEmail = $("#X-Auth-Email").val();
        let authKey = $("#X-Auth-Key").val();
        let accountId = $("#account_id").val();

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
                    let linksHtml = "<h3 class='text-secondary'>Cloudflare Videos Links</h3><p>Links fetched from Cloudflare</p><ol class='text-sm'>";
                    $.each(response.result, function (index, video) {
                        if (video.playback && video.playback.hls) {
                            linksHtml += "<li>" + video.playback.hls + ",</li>";
                        }
                    });
                    linksHtml += "</ol><h3 class='text-secondary'>Total Links: " + response.result.length + "</h3>";
                    $("#videoLinks").html(linksHtml);
                } else {
                    $("#videoLinks").html("Failed to fetch HLS links. Check your credentials and account permissions.<br />");
                }
                $('#spinner1').addClass('d-none'); // addClass('d-none')
            },
            error: function () {
                $("#videoLinks").html("An error occurred while fetching data.");
                $('#spinner1').addClass('d-none'); // addClass('d-none')
            }
        });
    });

    // a function to enable download mp4 links.    
    $("#enableMp4DownloadLinks").click(function () {
        $('#spinner2').removeClass('d-none'); // display the spinner.
        let inputTextUrls = $("#cloudflareLinks").val();
        let m3u8Urls = inputTextUrls.split(',').map(link => link.trim()).filter(link => link !== "");
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
            $('#spinner2').addClass('d-none'); // display the spinner.
            if (successfulLinks.length) {
                let successHtml = "<h2>Successful Links </h2><ol>";
                $.each(successfulLinks, function (index, link) {
                    successHtml += "<li>" + link + "</li>";
                });
                successHtml += "</ol>";
                $("#successfulLinks").html(successHtml);
            }

            if (failedLinks.length) {
                console.log(failedLinks.length);
                let failedHtml = "<h2>Failed Links 222</h2><ol>";
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
                let videoUid = matches[1];
                enableDownload(videoUid);
            } else {
                failedLinks.push(m3u8Url);
                displayLinks();
            }

        });
    });

    // a function to add a video to huawei cloud from a link
    $("#importFromCloudflareToHuawei").click(function () {

        // console.log("importFromCloudflareToHuawei Method is called");

        let ak = $("#ak").val();
        let sk = $("#sk").val();
        let endpoint = $("endpoint").val();
        let projectId = $("projectId").val();

        let videoType = $("videoType").val();
        let videoTemplateGroupName = $("videoTemplateGroupName").val();

        let inputTextUrls = $("#cloudflareVideosMp4Links").val();
        let mp4Urls = inputTextUrls.split(',').map(link => link.trim()).filter(link => link !== "");

        let videoTitle = "NewAPIVideo1";
        let videoUrl = "https://example.com/vid.mp4";

        $.ajax({
            url: `UploadMetaDataByUrl.php`,
            method: "GET",
            timeout: 0,
            headers: {
                "Content-Type": "application/json"
            },
            data: {
                ak,
                sk,
                endpoint,
                projectId,
                videoType,
                videoTemplateGroupName,
                videoTitle: "NewAPIVideo1",
                videoUrl: "https://example.com/vid.mp4",
            },
            success: function (response) {
                console.log('Success: ', response); // handle success
            },
            error: function (xhr, status, error) {
                console.log('Error: ', error); // handle error
            }
        });

    });



    // a function to update videos links in MySQL Database
    $("#updateMySqlDbLinks").click(function () {

        
        // console.log("importFromCloudflareToHuawei Method is called");

        // let ak = $("#ak").val();
        // let sk = $("#sk").val();
        // let endpoint = $("endpoint").val();
        // let projectId = $("projectId").val();

        let db_host = $("#db_host").val();
        let db_name = $("#db_name").val();
        let db_username = $("#db_username").val();
        let db_password = $("#db_password").val();

        alert(db_host + " : " + db_name + " : " + db_username + " : " + db_password);  
        alert(db_host);  

        let videoTemplateGroupName = $("videoTemplateGroupName").val();

        let inputTextUrls = $("#cloudflareVideosMp4Links").val();
        let mp4Urls = inputTextUrls.split(',').map(link => link.trim()).filter(link => link !== "");
 

        $.ajax({
            url: `5-script_db.php`,
            method: "GET",
            timeout: 0,
            headers: {
                "Content-Type": "application/json"
            },
            data: {
                db_host,
                db_name,
                db_username,
                db_password,
            },
            success: function (response) {
                console.log('Success: ', response); // handle success
            },
            error: function (xhr, status, error) {
                console.log('Error: ', error); // handle error
            }
        });

    });






});