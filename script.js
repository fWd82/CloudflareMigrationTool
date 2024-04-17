// https://console-intl.huaweicloud.com/apiexplorer/#/openapi/VOD/debug?api=ListTemplateGroup

// "group_id": "b6bba8c5f80d4cd5a193bee2335f7551",
// "name": "HLS_H265_4K",

// Upload Meta Data By Url
// https://console-intl.huaweicloud.com/apiexplorer/#/openapi/VOD/doc?api=UploadMetaDataByUrl



// List Asset 
// https://console-intl.huaweicloud.com/apiexplorer/#/openapi/VOD/doc?api=ListAssetList

// Update Asset Meta
// https://console-intl.huaweicloud.com/apiexplorer/#/openapi/VOD/doc?api=UpdateAssetMeta


// Function to get template groups from Huawei Cloud
function listTemplateGroup() {
    $('#spinner-step-31').removeClass('d-none'); // show spinner
    console.log("list_template_group Method is called");
    console.log("Aw kana 1");

    let ak = $("#ak").val();
    let sk = $("#sk").val();
    let endpoint = $("#endpoint").val();
    let projectId = $("#projectId").val();

    $.ajax({
        url: `list_template_group.php`,
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
            optionsValues += '<option value="">No Template</option>';
            jQuery.each(response.template_group_list, function (index, item) {
                if (item.name === "HLS_H264")
                    // Add the 'selected' attribute to make it the default option
                    optionsValues += '<option value="' + item.name + '" selected>' + item.name + '</option>';
                else
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
        error: function (xhr, status, error) {
            console.log('Error: ', error);
            $("#mysql_response2").html('<div class="alert alert-danger">An error occurred: ' + error + '</div>');
            $('#spinner-step-31').addClass('d-none');
        }
    });
};
// eof listTemplateGroup();

// Function to update video links in MySQL Database
function updateLinksInMySQL(assetid_and_url) {

    console.log(assetid_and_url);

    return; // remove this to make changes to db and execute rest of function.

    let db_host = $("#db_host").val();
    let db_username = $("#db_username").val();
    let db_password = $("#db_password").val();
    let db_name = $("#db_name").val();
    let db_table_name = $("#db_table_name").val();
    let db_table_column = $("#db_table_column").val();

    $.ajax({
        url: `5-script_db_2.php`,
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
            // assetid_and_url // Sending this array to PHP file
        },
        success: function (response) {
            response.forEach(function (item) {
                let message = `<div class="alert ${item.status === 'success' ? 'alert-success' : 'alert-danger'}">` +
                    `Video ID: ${item.videoId} - ${item.message}</div>`;
                console.log(item);
                $("#mysql_response2").append(message);
            });

            console.log('Success: ', response);
        },
        error: function (xhr, status, error) {
            console.log('Error: ', error);
            $("#mysql_response2").html('<div class="alert alert-danger">An error occurred: ' + error + '</div>');
        }
    });
}
// eo updateLinksInMySQL

$(document).ready(function () {
    $('#spinner-step-1').addClass('d-none'); // hide the loader 
    $('#spinner-step-2').addClass('d-none'); // hide the loader
    $('#spinner-step-31').addClass('d-none'); // hide the loader of template group
    $('#spinner-step-32').addClass('d-none'); // hide the loader of button
    $('#spinner-step-4').addClass('d-none'); // hide the loader 
    $('#spinner-step-5').addClass('d-none'); // hide the loader 

    // $('#textareaHuaweiVideosLinks').append('Something that i don\'t understand');

    // function to get ids, and links of videos from huawei VOD.This function will be called when the page loads or can be called manually if failed.
    listTemplateGroup();
    $("#listTemplateGroup").click(listTemplateGroup);

    // a function to fetch video links from cloudflare.
    $("#fetchCloudflareVideoLinks").click(function () {
        $('#spinner-step-1').removeClass('d-none'); // display the spinner.
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
                $('#spinner-step-1').addClass('d-none'); // addClass('d-none')
            },
            error: function () {
                $("#videoLinks").html("An error occurred while fetching data.");
                $('#spinner1').addClass('d-none'); // addClass('d-none')
            }
        });
    });

    // a function to enable download mp4 links in cloudflare   
    $("#enableMp4DownloadLinks").click(function () {
        $('#spinner-step-2').removeClass('d-none'); // display the spinner.
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
            $('#spinner-step-2').addClass('d-none'); // display the spinner.
            if (successfulLinks.length) {
                let successHtml = "<h2>Successful Links </h2><ol>";
                $.each(successfulLinks, function (index, link) {
                    successHtml += "<li>" + link + "</li>";
                });
                successHtml += "</ol>";
                $("#successfulLinks").html(successHtml);
            }

            if (failedLinks.length) {
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
        $('#spinner-step-32').removeClass('d-none');
        let ak = $("#ak").val();
        let sk = $("#sk").val();
        let endpoint = $("#endpoint").val();
        let projectId = $("#projectId").val();

        let videoType = $("#videoType").val();
        let videoTemplateGroupName = $("#videoTemplateGroupName").val();

        let inputTextUrls = $("#cloudflareVideosMp4Links").val();
        let mp4Urls = inputTextUrls.split('\n').map(link => link.trim()).filter(link => link !== "");

        // for each link call the api to store the content from link to huawei
        mp4Urls.forEach(mp4Url => {
            $.ajax({
                url: `UploadMetaDataByUrl.php`,
                method: "GET", // I think we should use POST
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
                    videoTitle: mp4Url.split('/')[3],
                    videoUrl: mp4Url,
                },
                success: function (response) {
                    $('#spinner-step-32').addClass('d-none');
                    const { url, asset_id } = JSON.parse(response).upload_assets[0];

                    // Create HTML content with all ids and URLs
                    let contentHtml = '<div class="alert alert-success text-sm" style="font-size: smaller; margin: 1rem;">';
                    contentHtml += '<p>Asset Id: ' + asset_id + '</p>';
                    contentHtml += '<p>URL: <a href="' + url + '">' + url + '</a></p>';
                    contentHtml += '</div>';
                    $("#importedFromCloudflareToHuaweiLinks").append(contentHtml);
                },

                error: function (xhr, status, error) {
                    $('#spinner-step-32').addClass('d-none');

                    let contentHtml = '<div class="alert alert-danger text-sm" style="font-size: smaller; margin: 1rem;">';
                    contentHtml += '<p>Error: ' + error + '</p>';
                    contentHtml += '</div>';
                    $("#importedFromCloudflareToHuaweiLinks").append(contentHtml);
                }
            });
        });
    });
    // eof #importFromCloudflareToHuawei()

    // function to get ids, and links of videos from huawei VOD.
    $("#getHuaweiVODLinks").click(function () {
        console.log("#getHuaweiVODLinks called");
        $('#spinner-step-4').removeClass('d-none'); // display the spinner

        const ak = $("#ak").val();
        const sk = $("#sk").val();
        const endpoint = $("#endpoint").val();
        const projectId = $("#projectId").val();

        $.ajax({
            url: `get_huawei_vod_links.php`,
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
                const assetid_and_url = response.assets.map(({ asset_id, title, original_url }) => ({
                    // asset_id: asset_id,
                    // huaweiCloudVideoUrl: original_url
                    title: title,
                    huaweiCloudVideoUrl: `https://vod.fawadiqbal.me/asset/${asset_id}/play_video/index.m3u8`

                    // "cover_url": "https://vod.fawadiqbal.me/asset/00484fad9c58191f3cc77f31020bb698/cover/Cover0.jpg
                    // https://vod.fawadiqbal.me/asset/cb3a23b3ffc5cb3e711ef89b35b7dd8c/play_video/index.m3u8
                    // https://vod.fawadiqbal.me/asset/cb3a23b3ffc5cb3e711ef89b35b7dd8c/af65ad22a95561d9674019fff16d193c.mp4
                    // https://vod.fawadiqbal.me/asset/cb3a23b3ffc5cb3e711ef89b35b7dd8c/play_video/bc2d7c5b36cd59f0aa393125510840e9_0.m3u8
                    // https://vod.fawadiqbal.me/asset/cb3a23b3ffc5cb3e711ef89b35b7dd8c/play_video/bc2d7c5b36cd59f0aa393125510840e9_1.m3u8

                }));

                console.log(assetid_and_url);
                // $("#div_huawei_cloud_links").html('<div class="alert alert-success">Success: ' + assetid_and_url[0].title + " : " + assetid_and_url[0].huaweiCloudVideoUrl + '</div>');
                // updateLinksInMySQL(assetid_and_url); // Call this function later  
              
                // Create HTML content with all titles and URLs
                let contentHtml = '<div class="alert alert-success text-sm" style="font-size: smaller; margin: 1rem;">';
                assetid_and_url.forEach(({ title, huaweiCloudVideoUrl }) => {
                    contentHtml += '<p>Title | Name: ' + title + '</p>';
                    contentHtml += '<p>URL: <a href="' + huaweiCloudVideoUrl + '">' + huaweiCloudVideoUrl + '</a></p> <hr />';
                    $('#textareaHuaweiVideosLinks').append(huaweiCloudVideoUrl + "\n");

                });
                contentHtml += '</div>';
                $("#div_huawei_cloud_links").html(contentHtml);

                // Hide the spinner
                $('#spinner-step-4').addClass('d-none'); // show it

            },
            error: function (xhr, status, error) {
                console.log('Error: ', error);
                $('#spinner-step-4').addClass('d-none'); // hide it
                $("#div_huawei_cloud_links").html('<div class="alert alert-danger text-sm" style="font-size: smaller; margin: 1rem;">An error occurred: ' + error + '</div>');
            }
        });
    });
    // eof getHuaweiVODLinks();

    // Function to extract video links and ids of huawei from textarea
    $("#updateMySqlDbLinks").click(function () {
        $('#spinner-step-5').removeClass('d-none');
        const inputTextUrls = $("#textareaHuaweiVideosLinks").val();
        const huaweiCloudVideoUrls = inputTextUrls.split('\n').map(link => link.trim()).filter(link => link !== "");

        const urlAndIds = huaweiCloudVideoUrls.map(videoUrl => {
            const huaweiCloudVideoId = videoUrl.split('/')[4];
            return {
                huaweiCloudVideoId: huaweiCloudVideoId,
                cloudflareVideoId: null, // placeholder until we have a method to determine this
                huaweiCloudVideoUrl: videoUrl
            };
        });
        // $db_table_name = "videos";
        // $db_table_column = "video_links";

        updateLinksInMySQL(urlAndIds);
        $('#spinner-step-5').addClass('d-none');
    });
});