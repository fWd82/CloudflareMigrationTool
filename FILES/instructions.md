
I have an excel sheet with the follow headers. 
File Name	File Name	Status	Label	Category Name	File Description	Created	Last Updated	Thumbnail URL	Subtitle URL	Quality	Format	Video Codec	Resolution	Bitrate	Size	Streaming URL	Duration
Starting from Column A to Column S. 
I need to do the following: 
1. I need to remove every other column except "Colum C" and "Column R"
2. In Column C I have values like "default.mp4?filename=dfb9b9d8c93cb3b9d6ba91a01dc05feb" I need to remove "default.mp4?filename=" while leaving "dfb9b9d8c93cb3b9d6ba91a01dc05feb"
3. In "column R", I need to remove everything except the values which has: "index.m3u8" at the end. 
Please look at the attached file. 


=================

Unmerged and copied down data in "Column C".
Removed "default.mp4?filename=" from the values in "Column C", leaving just the unique part of the string.
Kept only entries in "Column R" (Streaming URL) that end with "index.m3u8".
Removed all other columns except "Column C" and "Column R".

The file format and extension of  don'tmatch. The file could be corruptedor unsafe. Unless you trust its source, dont open it. Do you want to open it anyway?


https://console-intl.huaweicloud.com/apiexplorer/#/openapi/VOD/debug?api=UpdateAssetMeta



We already have asset ID in the excel sheet. 
Just loop through it and rename all names by removing the extra "default.mp4?filename=99e2a588443399b4a184c815709065c6"

https://console-intl.huaweicloud.com/apiexplorer/#/openapi/VOD/debug?api=ListAssetList





cb3a23b3ffc5cb3e711ef89b35b7dd8c
59a314bba749c9e385623ea27655431a

http://vod.fawadiqbal.me/asset/cb3a23b3ffc5cb3e711ef89b35b7dd8c/play_video/index.m3u8
http://vod.fawadiqbal.me/asset/59a314bba749c9e385623ea27655431a/play_video/index.m3u8







Cloudflare Videos:
https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/99e2a588443399b4a184c815709065c6/manifest/video.m3u8
https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/eb70ea4b0f67e121e15aa4ac7b4aa346/manifest/video.m3u8
https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/d0e3a88e82e827894374e49e6597a571/manifest/video.m3u8
https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/ff36a79c8fa41436c4437692b48460e8/manifest/video.m3u8
https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/6de8c0b145ecfb77582c3b26e1230405/manifest/video.m3u8
https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/13d224ef7ee414e3911ce2d231af02a6/manifest/video.m3u8
https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/61a92e7615c63dcbf890e782c4d1efab/manifest/video.m3u8
https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/00acb49bf82dd44e532d3c44c1b0e9a1/manifest/video.m3u8
https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/dfb9b9d8c93cb3b9d6ba91a01dc05feb/manifest/video.m3u8
https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/bc5ec7b5864810f03217560ca9691316/manifest/video.m3u8
https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/0b6cc063a843defbc4cbe77c904c8659/manifest/video.m3u8

 
INSERT INTO `videos` (`id`, `user`, `video_links`, `timestamp`) VALUES 
(NULL, NULL, 'https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/99e2a588443399b4a184c815709065c6/manifest/video.m3u8', 'current_timestamp(6).000000'),
(NULL, NULL, 'https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/eb70ea4b0f67e121e15aa4ac7b4aa346/manifest/video.m3u8', 'current_timestamp(6).000000'),
(NULL, NULL, 'https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/d0e3a88e82e827894374e49e6597a571/manifest/video.m3u8', 'current_timestamp(6).000000'),
(NULL, NULL, 'https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/ff36a79c8fa41436c4437692b48460e8/manifest/video.m3u8', 'current_timestamp(6).000000'),
(NULL, NULL, 'https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/6de8c0b145ecfb77582c3b26e1230405/manifest/video.m3u8', 'current_timestamp(6).000000'),
(NULL, NULL, 'https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/13d224ef7ee414e3911ce2d231af02a6/manifest/video.m3u8', 'current_timestamp(6).000000'),
(NULL, NULL, 'https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/61a92e7615c63dcbf890e782c4d1efab/manifest/video.m3u8', 'current_timestamp(6).000000'),
(NULL, NULL, 'https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/00acb49bf82dd44e532d3c44c1b0e9a1/manifest/video.m3u8', 'current_timestamp(6).000000'),
(NULL, NULL, 'https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/dfb9b9d8c93cb3b9d6ba91a01dc05feb/manifest/video.m3u8', 'current_timestamp(6).000000'),
(NULL, NULL, 'https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/bc5ec7b5864810f03217560ca9691316/manifest/video.m3u8', 'current_timestamp(6).000000'),
(NULL, NULL, 'https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/0b6cc063a843defbc4cbe77c904c8659/manifest/video.m3u8', 'current_timestamp(6).000000');




RECORD 5:
6de8c0b145ecfb77582c3b26e1230405
https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/6de8c0b145ecfb77582c3b26e1230405/manifest/video.m3u8

http://vod.fawadiqbal.me/asset/1893a9c7727cc7fd428c7cef6213c111/play_video/index.m3u8

http://vod.fawadiqbal.me/asset/1893a9c7727cc7fd428c7cef6213c111/play_video/index.m3u8

http://vod.fawadiqbal.me/asset/1893a9c7727cc7fd428c7cef6213c111/play_video/index.m3u8




Excel Sheet formula: <code>=RIGHT(A1, LEN(A1) - LEN("default.mp4?filename="))</code>
                    url .. /play_video/index.m3u8








// $ak = getenv('CLOUD_SDK_AK');
// $sk = getenv('CLOUD_SDK_SK');
 
// $ak = '9NW1ATJF9UAHZY5XXESS';
// $sk = 'JNN9sdlnzGosaHjuccAUNAR9nzWspMGj2v30czW0';



