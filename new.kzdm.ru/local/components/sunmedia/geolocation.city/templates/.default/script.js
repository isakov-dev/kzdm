$(document).ready(function () {
    let confirmButton = $('#confirm-city');
    confirmButton.click(function (e) {
        e.preventDefault();

        Cookies.remove('BITRIX_SM_CITY_ID');
        Cookies.set('BITRIX_SM_CITY_ID', $(this).data('id'), {expires: 30, path: '/', domain: cookieDomain});

        /*window.location.replace($(this).attr('href'));*/

        $('.header-active-city__selector').remove();

    });
});