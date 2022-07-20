var randomList = ["storage/img/S__6012947.jpg",
    "storage/img/S__6021158.jpg",
    "storage/img/S__6021165.jpg",
    "storage/img/IMG_1846.JPG",
    "storage/img/IMG_3065.PNG",
    "storage/img/IMG_E3107.JPG"];
var num = Math.floor(Math.random() * randomList.length);
var printHtml = '<img src=' + randomList[num] + ' width="50%" height="auth" alt="ランダム画像">';
document.write(printHtml);
