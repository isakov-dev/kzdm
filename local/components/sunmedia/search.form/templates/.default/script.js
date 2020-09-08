$(document).ready(function () {
    const body = $('body');

    body.on('submit', '#form-search', function (e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            success: function (data) {
                if (data.success) {
                    $('#search-menu').hide();
                    $('#search-result').addClass('active');
                    $('#search-result_count').html(data.result_count);

                    if (data.result.length) {
                        let result = '';

                        $.each(data.result, function (index, value) {
                            result += '<div class="search-result_list-item"><a class="search-result_list-url" href="' + value.url + '" target="_blank">' + value.title + '</a></div>';
                        });

                        $('#search-result_list').html(result);
                    }
                }
            }
        });
    });

    body.on('keyup', '#search-input', function (e) {
        e.preventDefault();
        $.ajax({
            url: $(this).closest('form').attr('action'),
            type: $(this).closest('form').attr('method'),
            data: $(this).closest('form').serialize(),
            success: function (data) {
                if (data.success) {
                    $('#search-menu').hide();
                    $('#search-result').addClass('active');
                    $('#search-result_count').html(data.result_count);

                    if (data.result.length) {
                        let result = '';

                        $.each(data.result, function (index, value) {
                            result += '<div class="search-result_list-item"><a class="search-result_list-url" href="' + value.url + '" target="_blank">' + value.title + '</a></div>';
                        });

                        $('#search-result_list').html(result);
                    }
                }
            }
        });
    });
});