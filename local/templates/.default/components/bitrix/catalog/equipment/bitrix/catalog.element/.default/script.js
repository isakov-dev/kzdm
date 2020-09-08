$(document).ready(function () {
    let lang = document.documentElement.lang;
    $('body').on('click', '.parts-trigger', function (e) {
        let item = $(this).data('item');
        $('#parts-form').find('input[name="ITEM"]').val(item);
    });
});