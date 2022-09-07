$(function () {
    $('#end').on('inview', function (e, isInView) {
        $.ajax({
            type: 'GET',
            url: '/scroll_load',
            dataType: 'json'
        }).done(function (data) {
            if (isInView) {
                console.log(data[0]);
                for (let i = 0; i < data.length; i++) {
                    let html = '<li class="PickUp_Container">' +
                        '<div style="position: relative">' +
                        '<a href="/video/' + data[i].id + '">' +
                        '<img src="' + data[i].thumbnail_path + '" class="PickUp_Container_Thumbnail" alt="Thumbnail">' +
                        '</a>' +
                        '<span class="PickUp_Container_VideoTime">' +
                        data[i].time +
                        '</span>' +
                        '</div>' +
                        '<a href="/video/' + data[i].id + '" class="PickUp_Container_Title">' +
                        data[i].title +
                        '</a>' +
                        '<div class="PickUp_Container_Overview">' +
                        data[i].comment +
                        '</div>' +
                        '<img src="storage/img/thumbnail/K_white.png" class="PickUp_Container_Icon" alt="icon">' +
                        '<a href="/home/' + data[i].name + '" class="PickUp_Container_Title">' +
                        data[i].name +
                        '</a>' +
                        '</li>';
                    $('.PickUp').append(html);
                }
            }
        }).fail(function () {
            console.log('Error loading');
        });
    });
});
