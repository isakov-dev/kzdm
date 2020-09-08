
/**
 * Страница «Штада 100 лет»
 */
(function() {

    var smController;


    /**
     * Важные переменные и функции
     */
    (function() {
        window.App = {
            W: $(window),
            D: $(document),
            H: $('html'),
            B: $('body'),
            ie: false,
            edge: false,
            firefox: false,
            mainpage: false
        };

        if (App.H.hasClass('mobile')) {
            App.mobile = true;
        } else {
            App.H.addClass('desktop');
        }

        if (App.H.hasClass('ie')) {
            App.ie = true;
        }

        if (App.H.hasClass('edge')) {
            App.edge = true;
        }

        if (App.H.hasClass('firefox')) {
            App.firefox = true;
        }

        if (App.H.hasClass('android')) {
            App.android = true;
        }

        // Конец ресайза
        var debounceResize = debounce(function() {
            App.W.trigger('resized');
            
        }, 200);

        App.W.on('resize', function() {
            debounceResize();
        });
    })();

    function throttle(callable, wait) {
        var id;

        function call(context, list) {
            requestAnimationFrame(function () {
                callable.apply(context, list);
                id = 0;
            });
        }

        return function () {
            if (id) return;
            id = setTimeout(call, wait, this, arguments);
        };
    }

    function debounce(func, wait, immediate) {
        var timeout;

        return function () {
            var context = this, args = arguments;
            var later = function () {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    };



    /**
     * Компактный хедер при скролле
     */
     
    (function() {
        var $header = $('.js-header');

        function updateHeader() {
            if (App.menuIsOpen || App.callbackIsOpen || App.mainpage) { return; }

            if (App.W.scrollTop() < 100) {
                $header.removeClass('_compact');
                App.H.removeClass('_header-compact');
            } else {
                $header.addClass('_compact');
                App.H.addClass('_header-compact');
            }
        }

        App.W.on('scroll.logo', throttle(updateHeader, 100));
    })();


    /**
     * Меню на мобильном
     */
    (function() {
        $('.js-burger').on('click', function() {
            App.H.addClass('_menu-open');
        });

        $('.js-menu-close').on('click', function() {
            App.H.removeClass('_menu-open');
        });
    })();



    /**
     * Открыть все статьи
     */
    (function() {
        var $btn = $('.js-show-articles');
        var count = $('.js-mp-articles').find('.article').length;
        
        // Скрываем кнопку, если статей мало
        if (count < 3) {
            $btn.hide();
        } else if (count == 3) {
            $btn.addClass('_articles-3');
        }


        $btn.on('click', function() {
            $('.js-mp-articles').addClass('_open');
        });
    })();



    /**
     * Попап с видео
     */
    (function() {
        // Получаем url для Youtube
        function YouTubeGetID(url) {
            var ID = '';
            url = url.replace(/(>|<)/gi, '').split(/(vi\/|v=|\/v\/|youtu\.be\/|\/embed\/)/);
            if (url[2] !== undefined) {
                ID = url[2].split(/[^0-9a-z_\-]/i);
                ID = ID[0];
            } else {
                ID = url;
            }
            return ID;
        }


        // Открыть видео
        $('.js-video-link').on('click', function(e) {
            e.preventDefault();

            var src = $(this).attr('href');

            if (src.indexOf('youtube.com/') !== -1 || src.indexOf('youtu.be/') !== -1) {
                var id = YouTubeGetID(src);
                src = 'https://www.youtube.com/embed/' + id;
            }

            $('.js-video-popup').addClass('_active');
            $('.js-video-popup-inner').html('<iframe src="' + src + '?title=0&byline=0&portrait=0&autoplay=1" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>');
            
            App.H.addClass('_popup-open');
        });


        // Закрыть видео
        $('.js-video-popup-close').on('click', function() {
            $('.js-video-popup').removeClass('_active');
            $('.js-video-popup-inner').html('');
            App.H.removeClass('_popup-open');
        });
    })();



    /**
     * Якорные ссылки из меню
     */
    (function() {
        $('.js-memu-list a').on('click', function(e) {
            e.preventDefault();
            var id = $(this).attr('href').substr(1);
            var $target = $('[data-anchor="'+ id +'"]')
            if ($target.length) {
                var top = $target.offset().top;

                $('html, body').animate({
                    'scrollTop': top
                }, 500, function() {
                    App.H.removeClass('_menu-open');
                });

            }

        });
    })();



    /**
     * История
     */
    
    (function() {
        var $historyItems = $('.js-mp-histoty-item');
        if (!$('.js-mp-history').length) {
            return;
            
        }
       
        var $yearItems = $('.js-mp-history-year-item');
        var $yearsInner = $('.js-mp-history-year-inner');
        var $ageItems = $('.js-mp-history-age-item');
        var $ageInner = $('.js-mp-history-age-inner');
        var $timelineItems = $('.js-timeline-item');
        var $yearContainer = $('.mp-history__fixed-year');

        var historyBlock = $('.js-mp-history')[0];
        var historyDuration = $('.js-mp-history').height() + 150;

        smController = new ScrollMagic.Controller();


        // Открытие истории
        var historyScene = new ScrollMagic.Scene({
            triggerElement: historyBlock,
            duration: historyDuration
        })
        .on('enter leave update', function(e) {
            console.log('---222')
            if (e.type == 'enter') {
                App.H.addClass('_history-open');
            } else if (e.type == 'leave') {
                App.H.removeClass('_history-open');
            } else if (e.type == 'update' && !App.mobile) {

                // Смещение фиксированного года (параллакс)
                var middle = (e.endPos - e.startPos) / 2;
                var delta = middle - e.scrollPos;
                var offset = delta * 0.04;

                $yearContainer.css({
                    //transform: 'translateY(' + offset + 'px)'
                });
            }
        })
        .addTo(smController);
        
        App.W.on('resized', function() {
            historyDuration = $('.js-mp-history').height() + 150;
            historyScene.refresh();
        });



        // Переключение годов
        $historyItems.each(function() {
            var $item = $(this);
            var year = $item.data('year');
            var age = year.toString().substring(0, 2);
            var sceneDuration = $item.height() + 45;

            var scene = new ScrollMagic.Scene({
                triggerElement: $item[0],
                duration: sceneDuration
            })
            .on('enter leave', function(e) {
                if (e.type == 'enter') {
                    var topAge = $ageItems.filter('[data-age="'+ age +'"]').position().top * -1;
                    var topYear = $yearItems.filter('[data-year="'+ year +'"]').position().top * -1;

                    $yearsInner.css({
                        top: topYear + 'px'
                    });

                    $ageInner.css({
                        top: topAge + 'px'
                    });

                    $timelineItems
                        .removeClass('_active')
                        .filter('[data-year="'+ year +'"]')
                        .addClass('_active');
                }
            })
            .addTo(smController);

            App.W.on('resized', function () {
                sceneDuration = $item.height() + 45;
                scene.refresh();
            });
        });


        // Клик по таймлайну
        $timelineItems.on('click', function() {
            var year = $(this).data('year');
            var top = $historyItems.filter('[data-year="' + year + '"]').offset().top - App.W.height() / 2 + 170;

            $('html, body').animate({
                scrollTop: top
            }, 500);
        });


        // Пропустить историю
        $('.js-history-skip').on('click', function() {
            var top = $('.js-mp-test').offset().top - 100;
            $('html, body').animate({
                scrollTop: top
            }, 500);
        });
    })();



    /**
     * Параллакс
     */
    (function(){
        if (App.mobile || !App.H.is('.page-100-years--main')) {
            return;
        }


        // Координаты для горизонтального параллакса
        var ww = App.H.width();
        var hOffset = 0;

        App.W.on('resize', function() {
            ww = App.H.width();
        });

        function setHorOffset(e) {
            hOffset = (e.pageX - ww/2) / ww * 100;
        }

        
        // Тест
        (function(){
            var TOLERANCE = 0;
            var $container = $('.js-mp-test');
            var $layers = $('.js-mp-test-layer');
            var vpace = [1.3, 0, 2.6];
            var hpace = [0.02, 0.01, 0.05];

            // Определяем, виден ли элемент
            function scrollDetectTest() {
                var scroll = App.W.scrollTop();
                var wh = App.W.height();
                var h = $container.height();
                var top = $container.offset().top - scroll;

                if (top < (wh + TOLERANCE) && top + h > (TOLERANCE * -1)) {
                    // Блок виден на экране

                    $layers.each(function(i) {
                        setOffset(i, $(this), top, wh);
                    });
                }
            }


            // Задаём смещение элемента за скроллом по вертикали
            function setOffset(index, $layer, top, wh) {
                var delta = top - wh / 2;
                var val = (delta * vpace[index] / 10) + 'px';

                $layer.css({
                    'transform': 'translateY('+ val +')'
                });
            }

            App.W.on('scroll', function() {
                requestAnimationFrame(scrollDetectTest);
            });
            scrollDetectTest();

            // За мышью по горизонтали
            App.W.on('mousemove', function() {
                $layers.each(function (i) {
                    var lhoffset = (50 + hOffset * hpace[i]) + '%';
                    $(this).css({
                        'left': lhoffset
                    });
                })
            });
        })();


        // Помошь
        (function(){
            var TOLERANCE = 0;
            var $container = $('.js-mp-help');
            var $layers = $('.js-mp-help-layer');
            var vpace = [1.3, 0, 2.6, 0.5, 2];
            var hpace = [0.02, 0.01, 0.05, 0.03, 0.04];

            // Определяем, виден ли элемент
            function scrollDetectTest() {
                var scroll = App.W.scrollTop();
                var wh = App.W.height();
                var h = $container.height();
                var top = $container.offset().top - scroll;

                if (top < (wh + TOLERANCE) && top + h > (TOLERANCE * -1)) {
                    // Блок виден на экране

                    $layers.each(function(i) {
                        setOffset(i, $(this), top, wh);
                    });
                }
            }


            // Задаём смещение элемента за скроллом по вертикали
            function setOffset(index, $layer, top, wh) {
                var delta = top - wh / 2;
                var val = (delta * vpace[index] / 10) + 'px';

                $layer.css({
                    'transform': 'translateY('+ val +')'
                });
            }

            App.W.on('scroll', function() {
                requestAnimationFrame(scrollDetectTest);
            });
            scrollDetectTest();

            // За мышью по горизонтали
            App.W.on('mousemove', function() {
                $layers.each(function (i) {
                    var lhoffset = (50 + hOffset * hpace[i]) + '%';
                    $(this).css({
                        'left': lhoffset
                    });
                })
            });
        })();


        // Картинки
        (function(){
            var $containers = $('.js-mp-history-parallax');
            var TOLERANCE = 0;
            var vpace = [
                [ 0, 3, 6 ],
                [ 0, 2, 5 ],
                [ 5, 0, 2 ],
                [ 0, 2 ]
            ];
            var hpace = [
                [0.15, 0.3, 0.6],
                [0.15, 0.3, 0.6],
                [0.6, 0.15, 0.3],
                [0.15, 0.3]
            ];


            // Определяем, виден ли элемент
            function scrollDetect() {
                var scroll = App.W.scrollTop();
                var wh = App.W.height();

                $containers.each(function(index) {
                    var $container = $(this);
                    var h = $container.height();
                    var top = $container.offset().top - scroll;

                    if (top < (wh + TOLERANCE) && top + h > (TOLERANCE * -1)) {
                        // Блок виден на экране
                        setOffset($container, top, wh, index);
                    }
                });
            }


            // Задаём смещение элемента за скроллом по вертикали
            function setOffset($container, top, wh, index) {
                var delta = top - wh / 2;

                $container.find('.js-mp-history-parallax-layer').each(function(i){
                    var val = (delta * vpace[index][i] / 10) + 'px';
                    // var pace = $(this).data('pace') || 3;   // Скорость сдвига
                    // var val = (delta * pace / 10) + 'px';
                    $(this).css({
                        'transform': 'translateY('+ val +')'
                    });
                });
            }

            App.W.on('scroll', function () {
                requestAnimationFrame(scrollDetect);
            });
            scrollDetect();


            // За мышью по горизонтали
            App.W.on('mousemove', function () {
                $containers.each(function(index) {
                    $(this).find('.js-mp-history-parallax-layer').each(function(i) {
                        var lhoffset = (hOffset * hpace[index][i]) + 'px';
                        $(this).css({
                            'left': lhoffset
                        });
                    });
                });
            });
        })();


        App.W.on('mousemove', function(e) {
            setHorOffset(e);
        });
    })();



    /**
     * Появление объектов при скролле
     */
    (function(){
        if (App.mobile || !App.H.is('.page-100-years--main')) {
            return;
        }

        if (!smController) {
            smController = new ScrollMagic.Controller(); 
        }

        $('.js-appear-object').each(function() {
            var el = this;
            new ScrollMagic.Scene({
                triggerElement: el,
                duration: 10000
            })
            .setClassToggle(el, '_visible')
            .addTo(smController);
        });
    })();



    /**
     * Подсвечиваем активные пункты меню
     */
    (function(){
        if (!App.H.is('.page-100-years--main')) {
            return;
        }

        if (!smController) {
            smController = new ScrollMagic.Controller();
        }

        var $objects = $('.js-spy-object');
        var $list = $('.js-memu-list li');

        $objects.each(function () {
            var $item = $(this);
            var spy = $item.data('spy');
            var sceneDuration = $item.outerHeight();

            var scene = new ScrollMagic.Scene({
                triggerElement: $item[0],
                duration: sceneDuration
            })
            .on('enter leave', function (e) {
                if (e.type == 'enter') {
                    $list.removeClass('_active')
                         .filter('[data-spy="'+ spy +'"]')
                         .addClass('_active');
                }
            })
            .addTo(smController);

            App.W.on('resized', function() {
                sceneDuration = $item.outerHeight();
                scene.refresh();
            });
        });
    })();

})();
