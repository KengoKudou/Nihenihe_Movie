//const fs = require('fs');

// カレントディレクトリ
//const path = "storage/img";
// ファイル名の一覧
//const filenames = fs.readdirSync(path);
//console.log(filenames);

var randomList = ["storage/img/advertisement/ch_img_miku.png",
    "storage/img/advertisement/カヤック.png",
    "storage/img/advertisement/クリプトン.png",
    "storage/img/advertisement/S__6012947.jpg"];
var num = Math.floor(Math.random() * randomList.length);
var printHtml = '<img src=' + randomList[num] + ' width="75%" height="auth" alt="ランダム画像">';
document.write(printHtml);
