$(function(){
    $('.single-item').slick({
        fade: true, // スライドをフェードイン・フェードアウト
        cssEase: 'linear',// アニメーション
        speed: 600, // フェードアニメーションの速度設定
        arrows: true, // 矢印
        dots: true, // インジケーター
    });
});

// 背景色を読み込んだ時間で変更
$(document).ready(function(){
    var day = new Date();
    var hour = day.getHours();

    if( hour <= 1 )	{
        $('body').css('background-color','#212F9A');
    }
    else if( hour <= 7 )	{
        $('body').css('background-color','#aafffa');
    }
    else if( hour <= 11 ) {
        $('body').css('background-color','rgba(60,230,255,0.83)');
    }
    else if( hour <= 14 ) {
        $('body').css('background-color','rgba(255,227,134,0.83)');
    }
    else if( hour <= 16 ) {
        $('body').css('background-color','#cc783c');
    }
    else if( hour <= 20 ) {
        $('body').css('background-color','rgba(41,33,115,0.6)');
    }
});
