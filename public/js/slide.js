$(function () {
    $('.slide').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true, // 矢印
        dots: true, // インジケーター
    });
});
