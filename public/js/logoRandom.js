var randomList = ["storage/logo/nihenihe.gif",
    "storage/logo/nihenihedouga_01.png",
    "storage/logo/nihenihedouga_02.png",
    "storage/logo/nihenihedouga_logo_01.png"];
var logo_num = Math.floor(Math.random() * randomList.length);
var printHtml = '<img src=' + randomList[logo_num] + ' width="100" height="100" alt="ランダム画像">';
document.write(printHtml);
