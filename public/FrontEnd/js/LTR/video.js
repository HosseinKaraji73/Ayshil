// function AddsongGen() {
//     var Addsongs = document.getElementById("passlinkID").value;
//     var Addname = document.getElementById("nameID").value;
//     var list = document.getElementById("td_youtube_playlist_video");
//     list.innerHTML += '<a ' + 'onclick="playSong(' + "'" + Addsongs + "','"
//         + Addname + "'" + ')" class="' + Addsongs +
//         ' td_click_video td_click_video_youtube" data-video-id="'
//         + Addsongs + '"><div class="td_video_thumb" ><img src="https://img.youtube.com/vi/' + Addsongs +
//         '/default.jpg" alt="Video thumbnail"></div> <div class="td_video_title_and_time"><div class="td_video_title">'
//         + Addname + '</div> <div class="td_video_time">03:47</div></div></a>';
//     document.getElementById("passlinkID").value = "";
//     document.getElementById("nameID").value = "";
// }
//
// function EsongsGen() {
//     var EsongsArray = {
//         "AJtDXIazrMo": "Ellie Goulding - Love Me Like You Do",
//         "3JWTaaS7LdU": "Whitney Houston - I Will Always Love You",
//         "lp-EO5I60KA": "Ed Sheeran - Thinking Out Loud",
//         "rtOvBOTyX00": "Christina Perri - A Thousand Years"
//     };
//     var Esongs = new Array("AJtDXIazrMo", "3JWTaaS7LdU", "lp-EO5I60KA", "rtOvBOTyX00");
//     var list = document.getElementById("td_youtube_playlist_video");
//     Esongs.forEach(function (songID) {
//
//         list.innerHTML += '<a ' + 'onclick="playSong(' + "'" +
//             songID + "','" + EsongsArray[songID] + "'" + ')" class="' +
//             songID + ' td_click_video td_click_video_youtube" data-video-id="' +
//             songID + '"><div class="td_video_thumb" ><img src="https://img.youtube.com/vi/' + songID +
//             '/default.jpg" alt="Video thumbnail"></div> <div class="td_video_title_and_time"><div id="' + songID + '" class="td_video_title">' + EsongsArray[songID] + '</div> <div id="dur' +
//             songID + '" class="td_video_time">03:30</div></div></a>';
//     });
// }
//
// function AsongsGen() {
//     var AsongsArray = {
//         "WUE0Dub7dZ4": "Hussein El Deek - Jamalek Ma Byekhlas / حسين الديك - جمالك ما بيخلص",
//         "osCw73O_WMo": "Marwan Khoury - Kol El Qassayed / مروان خوري - كل القصايد",
//         "6KdLo_X-fIQ": "Ziad Bourji - Shou Helou / زياد برجي - شو حلو",
//         "WOPMpEjSGSs": "سلمى رشيد - سمعني نبضك | حصريا",
//         "9M36GcFNDOo": "علي جاسم ومحمود التركي ومصطفى العبدالله - تعال | 2018",
//         "aJnUvVOMmYc": "Ayman Amin - Enti w Bass | أيمن أمين - انتي و بس"
//     };
//
//     var Asongs = new Array("WUE0Dub7dZ4", "osCw73O_WMo", "6KdLo_X-fIQ", "WOPMpEjSGSs", "9M36GcFNDOo", "aJnUvVOMmYc");
//     var list = document.getElementById("td_youtube_playlist_video");
//     Asongs.forEach(function (songID) {
//         list.innerHTML += '<a ' + 'onclick="playSong(' + "'" + songID + "','" + AsongsArray[songID] + "'" + ')" class="' + songID + ' td_click_video td_click_video_youtube" data-video-id="' + songID + '"><div class="td_video_thumb" ><img src="https://img.youtube.com/vi/' + songID + '/default.jpg" alt="Video thumbnail"></div> <div class="td_video_title_and_time"><div class="td_video_title">' + AsongsArray[songID] + '</div> <div class="td_video_time">03:47</div></div></a>';
//     });
// }
//
// function playSong(song, sTilte) {
//     var player = document.getElementById("player_youtube");
//     var SongTile = document.getElementById("playID");
//     SongTile.innerHTML = sTilte;
//     player.innerHTML = "";
//     player.innerHTML = '<iframe id="iframe' + song + '" src="https://www.youtube.com/embed/' + song + '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
//
// }
//
//
//
//
// /*-----------------------Botton 3 Videos---------------------*/
//
//
//
// // $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
// //     event.preventDefault();
// //     $(this).ekkoLightbox();
// // });
