$(document).ready(function () {

    //animations
    $('section').addClass('wow').addClass('fadeInUp');
    new WOW().init();

    //burger-menu
    $('.header-burger').click(function () {
        $('body').css('overflow', 'hidden');
        $('.menu-close').hide();
        $('.menu-overlay__close').show();
        $('.menu-overlay').addClass('menu-overlay__active');
        setTimeout(function () {
            $('.menu-overlay').fadeOut();
            $('.menu').show().addClass('menu-full');
            $('.menu-list').show();
            $('.menu-close').fadeIn(200);
        }, 300);
    });

    $('.menu-close').click(function () {
        $('body').css('overflow-y', 'visible');
        $('.menu-overlay__close').addClass('menu-overlay__active');
        $('.menu-overlay').removeClass('menu-overlay__active').fadeIn();
        $('.menu-list').hide();
        setTimeout(function () {
            $(this).hide();
            $('.menu').fadeOut();
        },500);
        setTimeout(function () {
            $('.menu-overlay__close').removeClass('menu-overlay__active');
        },1200);

    });


    $('input, textarea').on('input', function () {
        if($(this).val().length > 0) {
            $(this).prev('.input-title').fadeIn().css('display', 'block');
        } else {
            $(this).prev('.input-title').fadeOut();
        }
    });

    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var sc = $(this).attr("href"),
            dn = $(sc).offset().top;
        $('html, body').animate({scrollTop: dn}, 1000);
    });

    //about faq
    $('.about-faq__open').click(function () {
        $(this).toggleClass('about-faq__open-active')
            .children('i').toggleClass('fa-minus').toggleClass('fa-plus');
        $(this).next('.about-faq__text').children('.about-faq__answer').slideToggle();
    });
    $('.about-faq__q').click(function () {
        $(this).parent('.about-faq__text').prev('.about-faq__open').toggleClass('about-faq__open-active')
            .children('i').toggleClass('fa-minus').toggleClass('fa-plus');
        $(this).next('.about-faq__answer').slideToggle();
    });

    $(window).resize(function () {
        aboutSlider();
    });

    function aboutSlider() {
        if ($(window).width() < 1199) {
            $('.about-types').owlCarousel({
                items: 2,
                loop: true,
                nav: true,
                dots: true,
                navText : ["<i class='fa fa-chevron-left about-arrow about-arrow__left'></i>","<i class='fa fa-chevron-right about-arrow about-arrow__right'></i>"],
                responsive : {
                    1 : {
                        items: 1,
                    },
                    768 : {
                        items: 2,
                    }
                }
            });
        } else {
            $('.about-types').owlCarousel('destroy');
        }
    }
    aboutSlider();

    //knowledge
    $('.knowledge-option').click(function () {
       $('.knowledge-option__active').removeClass('knowledge-option__active');
       $(this).addClass('knowledge-option__active');
       if ($(this).attr('data-option') === 'all') {
           $('.knowledge-block').fadeIn();
       } else {
           $('.knowledge-block').hide();
           $(`.knowledge-block[data-option=${$(this).attr('data-option')}]`).fadeIn();
       }
    });

    $('.knowledge-block').click(function () {
        window.location.href = "article";
    });

    //cats slider
    $('.cats-slider, .cats-home__blocks').owlCarousel({
        loop: true,
        items: 2,
        nav: true,
        dots: true,
        navText : [null,"<i class='fa fa-chevron-right about-arrow about-arrow__right'></i>"],
        responsive : {
            1 : {
                items: 2,
            },
            992 : {
                items: 3,
            },
            1200 : {
                items: 4,
            }
        }
    });

    //lottery form
    $('.lottery-form__body').on('submit', function (e) {
        e.preventDefault();
        $('.lottery-form__content').hide();
        $('.lottery-form__success').fadeIn();
    });

    //choose month reports
    $('.reports-list__current').click(function () {
        $(this).children('.reports-list__months').slideToggle();
    });

    $('.reports-list__months-helpers li').click(function () {
        let month = $(this).html();
        $('.reports-list__current-span__helpers').html(month);
        $('.reports-list').hide().fadeIn();
    });

    $('.reports-list__months-reports li').click(function () {
        let month = $(this).html();
        $('.reports-list__current-span__reports').html(month);
        $('.reports-slider').hide().fadeIn();
    });

    //reports slider
    $('.reports-slider').owlCarousel({
        items: 4,
        loop: true,
        nav: true,
        dots: true,
        navText : ["<i class='fa fa-chevron-left about-arrow reports-arrow reports-arrow__left'></i>","<i class='fa fa-chevron-right about-arrow reports-arrow reports-arrow__right'></i>"],
        responsive : {
            1 : {
                items: 1,
            },
            1200 : {
                items: 2,
            }
        }
    });

    //reports modal slider
    $('.reports-modal__slider').owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        dots: false,
        navText : ["<i class='fa fa-chevron-left reports-modal__arrow reports-modal__arrow-left'></i>","<i class='fa fa-chevron-right reports-modal__arrow reports-modal__arrow-right'></i>"],
    });

    $('.reports-slide__photo').click(function () {
        $('body').css('overflow', 'hidden');
        $('.reports-arrow').hide();
        $('.reports-modal, .reports-overlay').fadeIn();
    });

    $('.reports-overlay__close').click(function () {
        $('body').css('overflowY', 'visible');
        $('.reports-modal, .reports-overlay').fadeOut();
        $('.reports-arrow').show();
    });

    //заглушка на игру про уличного кота
    $('.main-street__btn, .growcat-btn').click(function (e) {
        e.preventDefault();
        alert('Игра в процессе разработки :)');
    })

});













