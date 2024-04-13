<?php
function enableMP4Downloads($videoUid) {
    $accountId = '2590b14a48271988be21c06479697c88';
    $cloudflareVideoLink = "https://api.cloudflare.com/client/v4/accounts/$accountId/stream/$videoUid/downloads";
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => $cloudflareVideoLink,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_HTTPHEADER => [
            'Authorization: Bearer ',
            'X-Auth-Email: fwd82@live.com',
            'X-Auth-Key: 1eab14593a06d3722782f30526a779378a58e'
        ],
    ]);

    $response = curl_exec($curl);
    curl_close($curl);

    if (!$response) {
        return ['success' => false, 'videoUid' => $videoUid];
    }

    $data = json_decode($response, true);
    return [
        'videoUid' => $videoUid,
        'success' => $data['success'],
        'status' => $data['result']['default']['status'],
        'url' => $data['result']['default']['url'],
        'mp4LinkWithFileName' => $data['result']['default']['url'] . "?filename=${videoUid}.mp4"
    ];
}
