function click_cb() {
    //チェックカウント用変数
    var check_count = 0;
    // 箇所チェック数カウント
    $(".boxes ul li").each(function () {
        var parent_checkbox = $(this).children("input[type='checkbox']");
        if (parent_checkbox.prop('checked')) {
            check_count = check_count + 1;
        }
    });
    // 0個のとき（チェックがすべて外れたとき）
    if (check_count == 0) {
        $(".input_item ul li").each(function () {
            $(this).find(".locked").removeClass("locked");
        });
        // 3個以上の時（チェック可能上限数）
    } else if (check_count > 9) {
        $(".boxes ul li").each(function () {
            // チェックされていないチェックボックスをロックする
            if (!$(this).children("input[type='checkbox']").prop('checked')) {
                $(this).children("input[type='checkbox']").prop('disabled', true);
                $(this).addClass("locked");
            }
        });
    } else {
        $(".boxes ul li").each(function () {
            // チェックされていないチェックボックスを選択可能にする
            if (!$(this).children("input[type='checkbox']").prop('checked')) {
                $(this).children("input[type='checkbox']").prop('disabled', false);
                $(this).removeClass("locked");
            }
        });
    }
    return false;
}

let num = 6;
$(document).on('click', '#enter_btn', function () {
    let tag = $('#add_tag');
    let data = tag.val();
    $('#add_checkbox').append('<li>' +
        '<input type="checkbox" id="box-' + num + '" name="tag[]" value="' + data + '" onclick="click_cb();">' +
        '<label for="box-' + num + '">' + data + '</label>' +
        '</li>');
    num++;
    tag.val('');
});

