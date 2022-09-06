$(function () {
    $('#end').on('inview', function (e, isInView) {
        $.ajax({
            type: 'GET',
            url: '/scroll_load',
            dataType: 'json'
        }).done(function (data) {
            if (isInView) {
                $('#end').append(data.test);
            }
        }).fail(function () {
            console.log('Error loading');
        });
    });
});
