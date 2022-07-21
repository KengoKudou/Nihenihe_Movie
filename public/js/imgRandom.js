const fs = require('fs');

// カレントディレクトリ
const path = "storage/img";
// ファイル名の一覧
const filenames = fs.readdirSync(path);
console.log(filenames);

var randomList = ["storage/img/ch_img_miku.png",
    "storage/img/S__6012947.jpg",
    "storage/img/S__169746443.jpg",
    "storage/img/S__169746446.jpg",
    "storage/img/S__169746450.jpg",
    "storage/img/tmp-0fd68437d6da5967ac63cb41d8e51ca1-1a494132d7bc26d4259aa6ab5cd4229e.jpg"];
var num = Math.floor(Math.random() * randomList.length);
var printHtml = '<img src=' + randomList[num] + ' width="50%" height="auth" alt="ランダム画像">';
document.write(printHtml);
