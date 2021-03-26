$(document).ready(function () {

    $('.play-widget').fancybox({
        openEffect: 'none',
        closeEffect: 'none',
        baseClass: "video-layer",
        helpers: {
            media: {}
        }
    });

    if ($('.single__title').text().length > 70) {
        $('.single__title').addClass('js-size-m');

    }
    if ($(window).width() < 760) {
        $('.partners-nav__items').slick({
            slidesToShow: 3,
            arrows: false,
            asNavFor: '.our-partners__slider',
            centerMode: true,
            centerPadding: 0,
            focusOnSelect: true
        })
    }
    $('.footer__title-js').click(function () {

        $(this).closest('.footer__col').find('.footer-links').stop().slideToggle();
        $(this).toggleClass('active');
    })
    $('.anchor-js').click(function (e) {
        e.preventDefault();
        $('.anchor-js').removeClass('active');
        $('html').animate({
            scrollTop: $($(this).attr('href')).offset().top - 160// прокручиваем страницу к требуемому элементу
        }, 500);
        $(this).addClass('active');
    })
    jQuery('img.svg').each(function () {
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function (data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Add replaced image's ID to the new SVG
            if (typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if (typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass + ' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');

    });

    $('.prod-slider').on('afterChange', function (event, slick, currentSlide, nextSlide) {
        if (currentSlide == 2) {
            $('.prod-slider').addClass('no-pointered')
        }
        ;
    });
    const slider = $(".prod-slider");
    slider.slick({
        dots: true,
        infinite: false
    });

    slider.on('wheel', (function (e) {
        e.preventDefault();

        if (e.originalEvent.deltaY > 0) {
            $(this).slick('slickNext');
        } else {
            $(this).slick('slickPrev');
        }
    }));


    $('.map-baloon').mouseenter(function () {
        $('.sales-item-js').removeClass('active');
        $('.sales-item-js').eq($(this).index()).addClass('active');
        $('.map-baloon').removeClass('active');
        $(this).addClass('active');
    });

    $('.our-partners__slider').slick({
        slidesToshow: 1,
        fade: true,
        arrows: false,
        swipe: false,
        swipeToSlide: false
    })

    $('.tab-widget__link').click(function (e) {
        e.preventDefault();
        var $el = $(this).closest('.tab-widget');
        $el.find('.tab-widget__link').removeClass('active');
        $el.find('.tab').removeClass('active');
        $(this).addClass('active');
        $el.find('.tab').eq($(this).index()).addClass('active');
    })

    $('.sales-item-js').hover(function () {
        $('.sales-item').removeClass('active');
        $(this).addClass('active');
        $('.map-baloon').removeClass('active');
        $('.map-baloon').eq($(this).index()).addClass('active');
    })

    $('.trigger-name').on('click', function () {
        $(this).closest('.trigger').find('.trigger-content').stop().slideToggle().css("display", "flex");
    });
    $('.toggler__trigger').on('click', function () {
        $('.toggler').removeClass('active');
        $(this).closest('.toggler').toggleClass('active');
        $('.toggler').closest('.toggler').find('.toggler__content').stop().slideUp();
        $(this).closest('.toggler').find('.toggler__content').stop().slideToggle();
    });
    $('.phone-mask').inputmask({
        mask: '+7 (999) 999 99 99',
        showMaskOnHover: false,
        showMaskOnFocus: false,
    })
    $('.uploader').each(function () {
        var title = $(this).data('title');
        $('.uploader').fileuploader({
            captions: {
                feedback: function (options) {
                    return title;
                },
                feedback2: function (options) {
                    return 'Выбрано файлов:' + options.length;
                },
            }
        });
    })


    $('.work-left').click(function (e) {
        e.preventDefault();
        $(this).closest('.work-widget').find('.slick-slider').slick('slickPrev');

    });
    $('.work-right').click(function (e) {
        e.preventDefault();

        $(this).closest('.work-widget').find('.slick-slider').slick('slickNext');

    });
    $('.compare__remove').click(function () {
        if ($('.compare__item').length < 2) {
            $('.custom-scroll-x').mCustomScrollbar("disable", true);
        }
        $(this).closest('.compare__item').remove();


        //$('.custom-scroll-x').mCustomScrollbar("update");
    })
    $('.custom-scroll').mCustomScrollbar({});
    $('.custom-scroll-x').mCustomScrollbar({
        axis: "x",
        advanced: {
            autoExpandHorizontalScroll: 3
        }
    });

   /* $.fn.sliderUpdate = function () {
        return this.each(function (i, el) {

            var counter = 0;
            counter++;
            setInterval(function () {
                $(el).slick('slickNext');
            }, 9500);

        });
    };*/
    /*$('.work-slider').sliderUpdate();
    $('.news-slider').sliderUpdate();

    $('.work-slider').slick({
       slidesToShow: 1,
       arrows: false,
       pauseOnHover: false,
       pauseOnFocus: false,
       centerMode: true,
       centerPadding: '20%',
       responsive: [
           {
               breakpoint: 760,
               settings: {
                   slidesToShow: 1,
                   slidesToScroll: 1,
                   infinite: true,
                   centerMode: false,
                   centerPadding: '0%',

               }
        }]
    })*/


    $(".prod-slider__widget").stick_in_parent({
        offset_top: 81
    });

    if ($(window).width() < 761) {
        $('.partners-nav__items').slick({
            slidesToShow: 4,
            arrows: false,
            centerMode: true,
            centerPadding: '6%',
            focusOnSelect: true,
            asNavFor: '.our-partners__slider'
        });
        $('.partners-nav__item').click(function (e) {
            e.preventDefault();
            $('.partners-nav__item').removeClass('active');

        });
    } else {
        $('.partners-nav__item').click(function (e) {
            e.preventDefault();
            var $index = $(this).closest('.partners-nav__col').index();
            $('.partners-nav__item').removeClass('active');
            $(this).addClass('active');
            $('.our-partners__slider').slick('slickGoTo', $index);
        });
    }
    if ($(window).width() > 760) {
        $(".stick-menu").sticky({topSpacing: 80});
    }
    $('.production-slider').stick_in_parent({parent: 'main', offset_top: 200});
    $('.mobile-menu-js').click(function () {
        $('.mobile__content').stop().slideToggle();
        $(this).toggleClass('active');
    })

    $('.match-height').matchHeight();
    $('.down-link-js').click(function (e) {
        e.preventDefault();
        $('body,html').animate({
            scrollTop: $('#catalog-section').offset().top
        }, 600);
    })


//            $('.footer__title-js').click(function () {
//                $(this).closest('.footer__col').find('.footer-links').stop().slideToggle();
//                $(this).toggleClass('active');
//            })
    $('body').on('click', '.trigger-close', function () {
        $.fancybox.close();

        $('.header-btn').removeClass('trigger-close');

    });
    $('.wrapper-burger').on('click', function () {
        $('.configurator-filter').toggleClass('configurator-filter-active');
    });

    $('.equipment__name').on('click', function () {
        $(this).toggleClass('equipment__name-active');
    });

    if ($(window).width() > 1200) {
        $('.equipment__item').hover(function () {
            if ($(this).hasClass('not-suitable')) {
                return false;
            } else {
                $(this).find('.equipment__more').stop().slideToggle();
            }
        });
    }
    $("[data-fancybox='gallery']").fancybox({
        beforeShow: function (instance, current) {
            $('.header').addClass('deep');
            //parent.jQuery.fancybox.getInstance().close();

        },
        beforeClose: function (instance, current) {
            $('.header').removeClass('deep');
            //parent.jQuery.fancybox.getInstance().close();

        }
    });
    $('.video-popup-trigger').fancybox({
        baseClass: "video-popup",
        beforeShow: function (instance, current) {
            $('.header').addClass('deep');
            //parent.jQuery.fancybox.getInstance().close();

        },
        beforeClose: function (instance, current) {
            $('.header').removeClass('deep');
            //parent.jQuery.fancybox.getInstance().close();

        }
    });
    $('.inline-popup-trigger').fancybox({
        baseClass: "inline-popup",
        beforeShow: function (instance, current) {
            $('.header').addClass('deep');
            //parent.jQuery.fancybox.getInstance().close();

        },
        beforeClose: function (instance, current) {
            $('.header').removeClass('deep');
            //parent.jQuery.fancybox.getInstance().close();

        }

    });
    $('[data-fancybox="callback1"]').fancybox({
        baseClass: "32e23e2e2",
        beforeShow: function (instance, current) {
            alert();
        }
    });
    $('.spec-js').mouseenter(function () {
        $.fancybox.close();
        $('.header').addClass('active');
        $('.overlayer').addClass('active');

    });
    $('.spec-js').mouseleave(function () {
        $('.overlayer').removeClass('active');
        if ((!$('.single-header_gray').length) && (!$('.act-header').length) && (!$('.header-index').length)) {

            //$('.header').removeClass('active');
        }
        if (!$('.single-header_gray')) {

            if (!$('.header').hasClass('scrolled')) {
                //$('.header').removeClass('active');
            }
        }
        if ($('.header-index').length && !$('._header-compact').length) {
            $('.header').removeClass('active');
        }

    })
    $('.phone-popup-trigger').fancybox({
        baseClass: "phone-popup",
        touch: false,
        animationEffect: false,
        beforeShow: function (instance, current) {
            $('.header').addClass('deep');
            //parent.jQuery.fancybox.getInstance().close();

        },
        beforeClose: function (instance, current) {
            $('.header').removeClass('deep');
            //parent.jQuery.fancybox.getInstance().close();

        }
    });
    $('.search-popup-trigger').fancybox({
        baseClass: "search-popup",
        beforeShow: function (instance, current) {
            $('.header').addClass('deep');
            //parent.jQuery.fancybox.getInstance().close();

        },
        beforeClose: function (instance, current) {
            $('.header').removeClass('deep');
            //parent.jQuery.fancybox.getInstance().close();

        }
    });

    $('.window-trigger-imagered').fancybox({
        beforeShow: function (instance, current) {
            $('.header').addClass('active');

        },
        afterShow: function (instance, current) {
            $('.header-btn').addClass('trigger-close');
        },
        beforeClose: function (instance, current) {
            /*if ($(window).scrollTop() < 30) {
                $('.header').removeClass('active');
            }*/
        },
        afterClose: function (instance, current) {

            $('.header-btn').removeClass('trigger-close');
        },
        baseClass: "window-popup-wr",
    });

    $('.window-trigger').fancybox({
        beforeShow: function (instance, current) {
            $('.header').addClass('active');

        },
        afterShow: function (instance, current) {
            $('.header-btn').addClass('trigger-close');
        },
        beforeClose: function (instance, current) {
            //$('.header').removeClass('active');

        },
        afterClose: function (instance, current) {

            $('.header-btn').removeClass('trigger-close');
        },
        baseClass: "window-popup-wr",
    });
    $('.phone__callback').fancybox({
        touch: false,

    });


    $('.sale-video').mouseenter(function () {
        $(this).addClass('active');
        var $video = $(this).find('video').get(0);
        $video.play();
    });
    $('.sale-video').mouseleave(function () {
        var $video = $(this).find('video').get(0);
        $video.pause();
    });

    $('.production-slider').slick({
        arrows: false
    });
    $('.production__section').viewportChecker({
        offset: 400,
        repeat: true,
        classToAdd: 'visible',
        callbackFunction: function (elem, action) {
            var id = $(elem).data('id');
            $('.production-slider').slick('slickGoTo', id);
        }
    })
    $('.full').viewportChecker({
        offset: 400,

        callbackFunction: function (elem, action) {
            $('.elem').addClass('active');
        }
    })
    $(".timeline").viewportChecker({
        repeat: true,
        offset: 300,
        callbackFunction: function (elem, action) {

            if (action == 'add') {
                $('.sticky-time').addClass('time-show');
            } else {

                $('.sticky-time').removeClass('time-show');
            }

        }
    })


    $(".timeline__item").viewportChecker({
        repeat: true,
        offset: 300,
        callbackFunction: function (elem, action) {
            if ($(elem).hasClass('timeline__item_last')) {
                $('.sticky-time').addClass('time-hide');
            } else {
                $('.sticky-time').removeClass('time-hide');
                var $index = $(elem).closest('.col').index();
                $('.timeline__year').removeClass('active');
                $('.timeline__year').eq($index).addClass('active');
            }


        }

    });
});
$(document).ready(function () {
    var $title, $desc;


    $('.full-nav__arrow_prev').click(function (e) {
        e.preventDefault();
        $('.full-slider').slick('slickPrev');
    });
    $('.full-nav__arrow_next').click(function (e) {
        e.preventDefault();
        $('.full-slider').slick('slickNext');
    });

    var $status = $('.full-counter__current');
    var $slickCount = $('.full-counter__all');
    $percent = 100 / parseInt($('.full-slider__item').length);

    $('.full-slider').on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {


        $title = $('.full-slider__item').eq(currentSlide + 1).data('title');
        $('.full__title').text($title);

        //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status.text(i);

        $slickCount.text(slick.slideCount);
    });


    var time = 5,
        isPause,
        tick,
        percentTime;

    let $longSlider = $('.long-slider');
    $longSlider.slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 9500,
        pauseOnHover: false,
        pauseOnFocus: false,
        customPaging: function (slider, i) {
            return '<button class="slider-dot"><svg viewBox="0 0 36 36" class="circular-chart" data-speed="9500"><path class="circle" stroke-dasharray="100, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path></svg></button>';
        },
    });

    var $slick = $('.full-slider');
    $slick.slick({
        draggable: false,
        adaptiveHeight: false,
        arrows: false,
        dots: false,
        mobileFirst: true,
        pauseOnDotsHover: true,
    });

    var $slick2 = $('.work-slider');
    $slick2.slick({
        slidesToShow: 1,
        arrows: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        centerMode: true,
        centerPadding: '20%',
        responsive: [
            {
                breakpoint: 760,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    centerMode: false,
                    centerPadding: '0%',

                }
            }]

    });

    var $slick3 = $('.news-slider');
    $slick3.slick({
        slidesToShow: 2,
        arrows: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        responsive: [
            {
                breakpoint: 990,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    centerMode: true,
                    centerPadding: '6%',

                }
            }]
    });

    let $bar = $('.slider-progress .progress');
    let $bar2 = $('.circle');

    $('.slider-wrapper').on({
        mouseenter: function () {
            isPause = true;
        },
        mouseleave: function () {
            isPause = false;
        }
    })

    function startProgressbar() {
        $bar.css({
            width: 0 + '%'
        });

        percentTime = 0;
        isPause = false;
        tick = requestAnimationFrame(animate);
    }

    function animate() {
        requestAnimationFrame(animate);

        if (isPause === false) {
            percentTime += 1 / (time + 0.1);

            $bar.css({
                width: percentTime + "%"
            });

            $bar2.css({
                'stroke-dashoffset': '' + parseInt(100 - percentTime) + ""
            });

            if (percentTime >= 100) {
                $slick.slick('slickNext');
                $slick2.slick('slickNext');
                $slick3.slick('slickNext');

                startProgressbar();
            }
        }

        cancelAnimationFrame(tick);
    }

    startProgressbar();
});

$(window).scroll(function () {

    $b = $(this).scrollTop();


    if ($(this).scrollTop() >= 50) {

        $('.header').addClass('active');
        $('.header').addClass('scrolled');
    } else {

        if ((!$('.single-header_gray').length) && (!$('.act-header').length) && (!$('.header-index').length)) {

            //$('.header').removeClass('active');
            $('.header').removeClass('scrolled');

        }
        if ($('.header-index').length) {
            $('.header').removeClass('active');
        }
    }


});
var onScroll = function () {
    var scrollTop = $(this).scrollTop();
    $('.baner_imagered').each(function (index, elem) {
        var $elem = $(elem);
        $elem.find('img').css({
            transform: 'translateY(' + ((scrollTop - $elem.offset().top) / 100) + '%)'
        });


        //$elem.find('img').css('top', (scrollTop - $elem.offset().top)/20);
    });
};
onScroll.apply(window);
$(window).on('scroll', onScroll);
