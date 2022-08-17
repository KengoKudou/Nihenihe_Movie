var randomList = ["storage/logo/nihenihe.gif",
    "storage/logo/nihenihedouga_01.png",
    "storage/logo/nihenihedouga_02.png",
    "storage/logo/logo_nihenihe.png"];
var num = Math.floor(Math.random() * randomList.length);
var printHtml = '<img src=' + randomList[num] + ' width="100" height="100" alt="ランダム画像">';
document.write(printHtml);
