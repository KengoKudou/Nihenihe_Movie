$(function () {
    $('#end').on('inview', function (e, isInView) {
        $.ajax({
            type: 'GET',
            url: '/scroll_load',
            dataType: 'json'
        })
    })
})
