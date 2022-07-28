const fs = require('fs');

// カレントディレクトリ
const path = "storage/img";
// ファイル名の一覧
const filenames = fs.readdirSync(path);
console.log(filenames);

var randomList = ["storage/img/PickUp_Thumbnail/ch_img_miku.png",
    "storage/img/PickUp_Thumbnail/カヤック.png",
    "storage/img/PickUp_Thumbnail/クリプトン.png",
    "storage/img/PickUp_Thumbnail/S__6012947.jpg"];
var num = Math.floor(Math.random() * randomList.length);
var printHtml = '<img src=' + randomList[num] + ' width="50%" height="auth" alt="ランダム画像">';
document.write(printHtml);
