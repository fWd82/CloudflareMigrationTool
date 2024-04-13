const axios = require('axios');
const xlsx = require('xlsx');

function readVideoLinksFromExcel(filePath) {
    const workbook = xlsx.readFile(filePath);

    const sheetName = workbook.SheetNames[0];
    const sheet = workbook.Sheets[sheetName];

    // Convert sheet to JSON
    const data = xlsx.utils.sheet_to_json(sheet, { header: 1 });

    const videoIds = data.map(row => row[0]).filter((id, index) => index > 0); // Adjust index > 0 if no header

    return videoIds;
}

function addLinksToWorkbook(filePath, successfulLinks, unsuccessfulLinks) {
    let workbook;
    try {
        workbook = xlsx.readFile(filePath);
    } catch (error) {
        // If it doesn't exist, create a new workbook object
        workbook = xlsx.utils.book_new();
    }

    const successSheet = xlsx.utils.json_to_sheet(successfulLinks.map(({
        videoUid,
        status,
        success,
        mp4LinkWithFileName,
        url,
    }) => ({
        "Video UID": videoUid,
        "Link Status": status,
        "Is Link Enabled": success,
        "Default Link": url,
        "Link With File Name": mp4LinkWithFileName,
    })));

    const failSheet = xlsx.utils.json_to_sheet(unsuccessfulLinks.map(({
        success,
        videoUid,
    }) => ({
        "Is Link Enabled": success,
        "Video ID": videoUid,
    })));

    // Add the new sheets to the workbook
    xlsx.utils.book_append_sheet(workbook, successSheet, 'Successful Links', true);
    xlsx.utils.book_append_sheet(workbook, failSheet, 'Unsuccessful Links', true);

    xlsx.writeFile(workbook, filePath);
}

async function enableMP4Downloads(videoUid) {
    const accountId = '2590b14a48271988be21c06479697c88';
    const cloudflareVideoLink = `https://api.cloudflare.com/client/v4/accounts/${accountId}/stream/${videoUid}/downloads`;

    const config = {
        method: 'post',
        url: cloudflareVideoLink,
        headers: {
            'Authorization': 'Bearer',
            'X-Auth-Email': 'fwd82@live.com',
            'X-Auth-Key': '1eab14593a06d3722782f30526a779378a58e'
        }
    };

    try {
        console.log(`Videos Status: ${videoUid}....`);
        const response = await axios(config);
        const { status, url, percentComplete } = response.data.result.default, { success } = response.data;

        return {
            videoUid,
            success,
            status,
            url,
            mp4LinkWithFileName: `${url}?filename=${videoUid}.mp4`, // Including the filename in the link
        };
    } catch (error) {
        // console.error(error.message);
        console.log(error.message);
        return {
            success: false,
            videoUid, // Returning the ID for unsuccessful attempts
        };
    }
}

async function processVideoDownloads(videoUids) {
    // Helper function to delay execution
    const delay = (ms) => new Promise(resolve => setTimeout(resolve, ms));

    const promises = videoUids.map(async (videoUid, index) => {
        // Wait for 2 seconds before each call, except for the first one
        if (index > 0) await delay(2000);
        return enableMP4Downloads(videoUid);
    });

    const results = await Promise.allSettled(promises);

    const successfulLinks = [];
    const unsuccessfulLinks = [];

    // const count = 0;
    results.forEach(result => {
        if (result.status === 'fulfilled' && result.value.success)
            successfulLinks.push({
                ...result.value
            });
        else if (result.status === 'rejected' || !result.value.success)
            unsuccessfulLinks.push({ ...result.value } || result.reason);
    });

    const outputFileName = `./Output_${Date().split(" ")[4].split(":").join("-")}.xlsx`
    // const outputFileName = `./Output_${Date().split(" ")[4].split(":").join("-")}.xlsx`

    addLinksToWorkbook(outputFileName, successfulLinks, unsuccessfulLinks);
    console.log(`\nSuccessful Links: ${successfulLinks.length} / ${results.length}`);
    console.log(`Unsuccessful Links: ${unsuccessfulLinks.length} / ${videoUids.length}`);
    return outputFileName
}

// const hlsManifestUrls = readVideoLinksFromExcel('./2-videolinks.xlsx');
const hlsManifestUrls = [
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/e154384f2b44fb4b48b58b1a43046f88/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/2052941b4aee7620aa070f93852d0be9/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/6a885eb13cd4e3b0cdc766294038e57b/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/e9e1d9b89ccd6e4cff0ef338249b11b3/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/d759ca8f782f617ca54de06684d5482f/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/73222991b93579ffffb07b4cdee1c531/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/bbc286053e86c522ff9d853037c6f841/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/cbc0ff5462d5beadfe1ae33839dcb5b6/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/12fd325a89d478f1081017cd03977c60/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/a935d89dae62e7427af9a4b39024a348/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/cc464cfb53f57ec3ba28498540a35b07/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/a3ade37b3108d8c66e69c1799f75ba1b/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/53e1ca981426cffb5780eb39916a4de1/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/9902dd3158be5224b8a5609296167ad0/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/4ad5c5f073e03235c52833d283f20745/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/fc6f30d15a79688e4dc96ff48af44df0/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/a30cb3ee026c2784d43356d32d6e70e1/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/c253451375f6e898627e478b110990a1/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/e80650031442cfc8c7851cad13521369/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/b1c22696c58679053ed6921e85a15c3d/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/e38c3d03fe4d0ddd6852dd7459aa4d63/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/f10cab94d4b314d14135f689c22be8b2/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/c35b2fdf30071601b5dc602a54630a09/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/152f7842f42a3b8fae365503cd61ba2e/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/29a92c3b0d9d922f2f1e4f2c58de38b0/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/ddab987e4b559450764d746b7a4cfb06/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/eba9453884c573d7c0c5b12750abc6ff/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/1c6e21b9df96d3c77522b4127ffbadf9/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/cab130695b6d4c2b131a69fdec02af6e/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/55d096cea2f45336936940c025e7b453/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/f6d27fe29c827f8fa80ca23c3af02fc2/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/d506daf1432dbb80691692014c1ef792/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/4e61a3cb0ba717fa4c916f09f825d45a/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/2333a0b994391cb296dd3583f465dcd7/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/7fde71bd4e2a82e70d4aa97bb826ad94/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/79f19ab5ec4961b2c47c6f818ef90e12/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/664d130459ee1d98042042a0a79ab926/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/7eeaa0d6d9727a1fa82d8693763d4c75/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/5c00b6d5c37049ad66c0e6b188cf55a6/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/c7263ee9a0031f0cacdef442fbc78216/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/e3f5b9037e003588959ae0896b470cd7/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/abb69ca45d6fcbb7f378cb17dd792b08/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/f66116f215b7b17e7c6f26731ba26eac/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/e511f905667566f6898e4eca65a4be65/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/80fa2a9da63b28e4cfc7640092b808b2/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/ff2fc244e0b26061a79f865b903d6e4b/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/1c7fa2d45ddf5d4ce97fc9449680bd5f/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/99c2aee3d95dfef792cddb33e08f9904/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/8288801486425aefa0a9d2701aec7a75/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/a829da7ce873eacdd1d0dda071b549bf/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/1283df0827276fb04ee0b988a14c9627/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/32e23544136b8041f2ad8a07b1392e65/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/c67ea584021744a2f99428764220bb32/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/fb47c8441787fec333124c70b6b8a41f/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/bfdb1942421aa4e3dd531dcb73fcc02a/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/a72a545dc1325f28c92865bbaa42949e/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/93f10525a5f9ad732d67ffc8e6eb8f86/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/c04660575017b259d4add3871bd14873/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/fbe62ac015191e2ef47731cffeb6f463/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/0dae5cc3726589bb25aec34f7715448f/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/2a4836a3b1179f98fabeefcdf78740c1/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/dae293a9ccf39f661916b515b872e96e/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/0d149c81030ff229efc41902f79717d5/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/88cbdea3ef7acd75f944f55a077b29e3/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/0bfa7dccfca81565b0bfc652556582d6/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/37b04242e3450e9e4b3362b6a8dec327/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/720ee2238251eab2520e8081d49cd451/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/0a551a3454dfcd47467018e4425dca4d/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/4a1c78fe594105bf8d1c37d814e7a3f1/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/f03fa7b22f1cef8be916c90116514599/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/0f4c7d42f3c4213f1aa44db3b52c6a16/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/273fc4cac5af892f54cc81a16fa28da3/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/e39017650050d8c70ebc0196598dd396/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/dada0c5d6c632c877a7c40fa360c5414/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/3913f3713421f8925869f0f7451bef14/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/ddbb7f66511684f54a8174e5132888f4/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/08a48f823848782e702626cf4b427146/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/2c241cd0294ca1eaa9756aa7238e77e8/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/53f9a0f9780c340415b4e2985cf153ac/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/94ff3b009bbbc892ae81d352308535e2/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/6b7bd42abcbd044507bbc7c7fa92a4b3/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/9b4fa58e2dcba2440ad2154c7a7800d6/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/d7b5af37d265c859259094ee92a020e7/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/437b706251d22a8c199f4786526ac4a8/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/04d1ceb1c2ef9c086be90766675300f6/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/b2360e480bcfab1dacf06af4f0ab2f33/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/ed28ab242636b4fc7c11405620bb839f/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/f38816be680d6ae75b4c594584798d3b/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/bfa0efc64c70c9efe0a9549c360d3025/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/b84ea158ea6a9cb9a469b801fee3d6a6/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/e1de0f29210484ab9ca889a46fd49676/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/c6a95c46915757409775900e1e2f0159/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/fbabbe8071698f847fc64aae3ff72a3c/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/9fd9caf9ca528375cde94a967c3fe9dc/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/5374aa1930afa7fb498a2519c78497d4/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/43ff8d20911755976359d9247f574ce7/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/92bafee0255e579a637e1ab9dcf961b3/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/3b86f41786048fc031bff48c32677607/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/fef5cbb20eb794188e9996fb221fba21/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/22c2682e24d72dd8d25a290a5d822423/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/a22b8e38b294533f0dd15b8b959608e2/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/2fb0fdc4a4653e89edf487ca6dc0d6a1/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/c31b2ff85f60a27c14849d7d5ea134e0/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/bc12afe9965740805c38a1335b51edf9/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/a4bb46094df299db833c83d712f1d151/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/25580651f24a3923a900d7b584ab1875/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/82edc86081b83c5199e2c60283aff988/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/7e78a8ac7a305ff3c3db791c918a6b4d/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/3a048c2319a49e13140d56f130337f98/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/c3978e9718cb2379a93ddca0ee6f2893/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/7bfcca8524d9cd1a9362c169c5241c12/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/0eb19e705a4653ee8fbad221850c6044/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/0bf670a0e1e35899083f6b32e7531564/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/2a6fe40f14f0d391b58be43ad8f70a71/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/41a5d065ed07994dbce8dee5ed3230f8/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/d87b563ae1690bb152a99d7635fdbc63/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/db542941e718c149dd07f6b4c2f6fd5e/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/7e535ec16b8b26223dff125df6d40d35/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/352efaaf3f1b2add74821cd0287bfedd/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/47cee7d8d8d16fe80700067eda736c2b/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/ee5c90f36bb63aa8fcc638d6ec98be5b/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/f32704b8852594bccba657ca23b87b4f/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/06dd98bc3fd7e3ab6de15604cfd02ecc/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/7ab0b5cc91797e89a114c38e0ec62604/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/c9983de92c8d22ec04b026ff6eba2599/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/5753bf981f1b86e11d2d6ff32c422254/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/6af832698c5208f4b0e27324d29577a5/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/5b6501bafa35f29747343125839b5bf2/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/8d335d5c5227f451ceecd1bc0ac689af/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/8a895ddf779d31cb58b2492de156ffbe/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/4fbea6e0e6a1191f2d2c8c225b7649f2/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/3edf6e55debb9ff1022a23f6752cc31f/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/d379a65c557d3adecf5b2e1a8fdbe6da/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/e2e79a0deea4d9e2734d44ab45252ea4/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/75b345b636f09f86e4e19caae7bf9fe1/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/235089f406955f81767a2ff20432f783/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/df531cb0f4054c89e119448748f9391c/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/141d24e3f9dc184cd0aa9102c514223d/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/5c01cb2edde5363440b691a550947ed2/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/9adf0569f0a380434e0968cf54de4715/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/e3a6860567129b965ff1cd38c292f338/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/1a8ffaf03f609404de0d3d77f1266bb2/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/07947cb14bbe60df82ae8673ed1c81b0/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/f6e1143f99bec4f21a2dcff9f3d2b6bc/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/766ed10162e6262c4d730872d526b574/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/3c53ea6e384f854be7d347c67afd605b/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/d70957af4508b7c6a0753915afe1637f/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/6e3433f1ce1505da8524364cac613f10/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/59fbfbca2329fa9fc46677536246f6b6/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/80377ec652e33707f3eb2bb9cf4834ea/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/d3d929034a6666b4718ae897db60be2d/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/9b2224918edae18c36dab56ea1663e82/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/94e15ec3f4d8a2ea2f9b6a01d5d275b7/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/709d1e22e3c7aa89406cf9835d252033/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/67427528c12519a81b801b94ec7aaa7b/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/9525a2376e69eb867a206f26f4c9c7c1/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/6874d81866d17ff15d9f289ec0f55326/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/055e2916c7308c2a77228a809c548e91/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/f4d10ee2bc0858831e6160f85eab6a38/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/d1a4e2fc78d2f8bc161f44b17c9bf090/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/9219186f59bc949628374141f32463ae/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/a245dc2e519df1cb809b84915c85c765/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/88b38426009b05b4e8629b5efa31b16d/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/105784062427a81f4fb0f059f137230e/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/9ecc49ed79c76f03eb57be4c84ba9d25/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/b42e71845d88676c9fe9c703031f5a50/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/e18f71a228ed4744ef9be501b03c2e58/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/d24d7de1d4f7825988e18def8412767e/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/3c879234a92dd60e7f07126488b22a7a/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/adf828bfc2a69b3fe53cd801fed96298/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/3e1ca52ae5f9691034d30220b2d21b01/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/d921b0de509f8ab1994afc5966c0ae40/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/17d78ec16a3b10f52b4453a48785d459/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/9aed214a856c7e6a3b5f733e4e514f74/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/943e3ccc5c66159c596306002cd72038/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/7ff992cf3433b2b90917b40a52aa7536/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/4c65ed75554f4fa2806afed2e8981a3d/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/1488d7534a8f145175a8d730e9fbeecc/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/3eb2baa346eb1a47f0828c728a1061c3/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/68ebad257f3e8ff89546dafac87c36cd/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/48d151ea1713bd93c6715d2c2d39aa72/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/742b5b95ef0ee2765014c835145156a6/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/fe9fee0d888ab614fedf4a482962da0a/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/16a4d5122da91e60b7381da6aaaaa863/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/fd9d8e0803fa982c364e08030eafacc3/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/32bfce68a4be6a4f4d6162d58a46e86c/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/1cfb1a77278aeb101a2b059891d30e5d/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/5c475f3f3b86d3022ec70a32dcd0a16d/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/7bd01ff5a2a9674afeb32e1a83947ae8/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/99e2a588443399b4a184c815709065c6/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/eb70ea4b0f67e121e15aa4ac7b4aa346/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/d0e3a88e82e827894374e49e6597a571/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/ff36a79c8fa41436c4437692b48460e8/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/6de8c0b145ecfb77582c3b26e1230405/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/13d224ef7ee414e3911ce2d231af02a6/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/61a92e7615c63dcbf890e782c4d1efab/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/00acb49bf82dd44e532d3c44c1b0e9a1/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/dfb9b9d8c93cb3b9d6ba91a01dc05feb/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/bc5ec7b5864810f03217560ca9691316/manifest/video.m3u8",
    "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/0b6cc063a843defbc4cbe77c904c8659/manifest/video.m3u8",
];

const videoUids = hlsManifestUrls.filter(Boolean).map(link => link.split('/')[3]);
// console.log(videoUids);

processVideoDownloads(videoUids)
    .then(fileName => console.log(`Operation Successful :). Records saved in: ${fileName}`));