$(document).ready(function () {
    let lang = document.documentElement.lang;
    $('body').on('click', '#add-to-comparison', function (e) {
        e.preventDefault();
        let iblockId = $(this).data('iblock-id');
        let id = $(this).data('id');

        $.ajax({
            type: 'POST',
            url: $(this).attr('href'),
            data: {iblock_id: iblockId, element_id: id, compareObj: compareObj},
            success: function (data) {
                data = JSON.parse(data);
                let buttons = $('<div class="swal2-actions">').append(createButton(lang === 'ru' ? 'Перейти к сравнению' : 'Go to comparison', function () {}));

                if (data.success) {
                    Swal.fire({
                        title: lang === 'ru' ? 'Товар добавлен в список сравнения' : 'Product added to comparison list.',
                        icon: 'success',
                        confirmButtonText: lang === 'ru' ? 'Закрыть' : 'Close',
                        showCancelButton: false,
                        html: buttons,
                    });
                }
            }
        });
    });

    $('body').on('click', '.leasing-trigger', function (e) {
        let item = $(this).data('item');
        $('#leasing-form').find('input[name="ITEM"]').val(item);
    });
});

function createButton(text, cb) {
    return $('<a href="/sravneniye/" class="go-to-compare" target="_blank">' + text + '</a>').on('click', cb);
}