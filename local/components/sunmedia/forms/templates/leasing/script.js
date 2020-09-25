$(document).on('beforeShow.fb', function( e, instance, slide ) {
    if (slide.src === "#leasing") {
        gtag('event', 'lizing', {'event_category': 'openform'});
        if (YANDEX_METRIKA_ID) {
            ym(YANDEX_METRIKA_ID, 'reachGoal', 'ot_lizing');
        }
    }
});

$(document).ready(function () {
    let lang = document.documentElement.lang;
    const leasingForm = $('#leasing-form');

    leasingForm.submit(function (e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            success: function (data) {
                if (data.success) {

                    gtag('event', 'vse_formy', {'event_category': 'sendform'});
                    gtag('event', 'lizing', {'event_category': 'sendform'});
                    if (YANDEX_METRIKA_ID) {
                        ym(YANDEX_METRIKA_ID, 'reachGoal', 'vse_formy');
                        ym(YANDEX_METRIKA_ID, 'reachGoal', 'lizing');
                    }

                    $.fancybox.close({
                        src: '#leasing',
                    });

                    Swal.fire({
                        title: lang === 'ru' ? 'Ваша заявка принята' : 'Your application is accepted',
                        text: lang === 'ru' ? 'Спасибо за обращение. Наши специалисты свяжутся с вами в ближайшее время' : 'Thank you for contacting. Our experts will contact you shortly',
                        icon: 'success',
                        confirmButtonText: lang === 'ru' ? 'Закрыть' : 'Close',
                        onClose: () => {
                            leasingForm[0].reset();
                        }
                    });

                } else {
                    if (data.errors.form) {
                        Swal.fire({
                            title: 'Error',
                            text: data.errors.form,
                            icon: 'error',
                            confirmButtonText: 'Закрыть',
                        });

                        let fields = leasingForm[0].getElementsByClassName('form-field');

                        $.each(fields, (key, value) => {
                            let msgElement = value.parentNode.getElementsByClassName('error-msg');

                            if (msgElement[0].classList.contains('active')) {
                                msgElement[0].innerHTML = '';
                                msgElement[0].classList.remove('active');
                            }

                            value.classList.remove('error');
                        });

                        $.each(data.errors, (key, value) => {
                            let name = key.toUpperCase();
                            let field = leasingForm[0].querySelectorAll('[name="' + name + '"]');
                            let msgElement = field[0].parentNode.getElementsByClassName('error-msg');

                            msgElement[0].classList.remove('active');
                            msgElement[0].innerHTML = value;
                            field[0].classList.remove('error');
                        });
                    } else {
                        let fields = leasingForm[0].getElementsByClassName('form-field');

                        $.each(fields, (key, value) => {
                            let msgElement = value.parentNode.getElementsByClassName('error-msg');

                            if (msgElement[0].classList.contains('active')) {
                                msgElement[0].innerHTML = '';
                                msgElement[0].classList.remove('active');
                            }

                            value.classList.remove('error');
                        });

                        $.each(data.errors, (key, value) => {
                            let name = key.toUpperCase();
                            let field = leasingForm[0].querySelectorAll('[name="' + name + '"]');
                            let msgElement = field[0].parentNode.getElementsByClassName('error-msg');

                            msgElement[0].classList.add('active');
                            msgElement[0].innerHTML = value;
                            field[0].classList.add('error');
                        });
                    }
                }
            }
        });
    });
});
