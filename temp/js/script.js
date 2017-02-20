(function($) {
    
    "use strict";

    // ==================== Preloader
    function preloader_load() {
        if($('.preloader').length){
            $('.preloader').delay(300).fadeOut(500);
        }
    }

    // ==================== Date and time picker
    function datePickers() {
        $( ".date-picker" ).datepicker();
        $( ".time-picker" ).timepicker();
    }

    // ==================== Date & time Picker
    function timedatePicker() {
        $('.datepicker').datetimepicker();
    }

    // ==================== Menuzord Megamenu
    function menuzord() {
        if ($('.menuzord').length) {
            $('.menuzord').menuzord({
            align: "left",
            effect: "none",
            animation: "zoom-out",
            indicatorFirstLevel: "<i class='fa fa-angle-down'></i>",
            indicatorSecondLevel: "<i class='fa fa-angle-right'></i>"
            });
        }
    }

    // ==================== Navbar Scroll To Fixed
    function navbar_scrollfixed() {
        $('.scrollingto-fixed').scrollToFixed({ marginTop: 0, limit: $('.footer').offset().top });
    }

    // ==================== Progress Bar / Levels
    if($('.progress-levels .progress-box .bar-fill').length){
        $(".progress-box .bar-fill").each(function() {
            var progressWidth = $(this).attr('data-percent');
            $(this).css('width',progressWidth+'%');
            $(this).children('.percent').html(progressWidth+'%');
        });
    }

    // ==================== PieChart     
    if($('#chart, #chart2, #chart3, #chart4').length){
        $("#chart").circliful({
            animation: 1,
            animationStep: 5,
            foregroundBorderWidth: 6,
            backgroundBorderWidth: 6,
            percent: 90,
            textSize: 28,
            textStyle: 'font-size: 18px;',
            textColor: '#ffffff',
            multiPercentage: 1,
            percentages: [10, 20, 30]
        });
        $("#chart2").circliful({
            animation: 1,
            animationStep: 5,
            foregroundBorderWidth: 6,
            backgroundBorderWidth: 6,
            percent: 75,
            textSize: 28,
            textStyle: 'font-size: 18px;',
            textColor: '#ffffff',
            multiPercentage: 1,
            percentages: [10, 20, 30]
        });
        $("#chart3").circliful({
            animation: 1,
            animationStep: 5,
            foregroundBorderWidth: 6,
            backgroundBorderWidth: 6,
            percent: 70,
            textSize: 28,
            textStyle: 'font-size: 18px;',
            textColor: '#ffffff',
            multiPercentage: 1,
            percentages: [10, 20, 30]
        });
        $("#chart4").circliful({
            animation: 1,
            animationStep: 5,
            foregroundBorderWidth: 6,
            backgroundBorderWidth: 6,
            percent: 90,
            textSize: 28,
            textStyle: 'font-size: 18px;',
            textColor: '#ffffff',
            multiPercentage: 1,
            percentages: [10, 20, 30]
        });
    }

    // ==================== Navbar Scroll To Fixed

    // ==================== Gallery Masonry Isotop And Other Gallery and Lightbox
    function masonryIsotop() {
        if ($('.masonry-gallery').length) {
            $('.masonry-gallery').isotope({
                layoutMode:'masonry'
            });
        }
        if($('.portfolio-filter').length){
            $('.portfolio-filter a').children('span').on('click', function(){
                var Self = $(this);
                var selector = Self.parent().attr('data-filter');
                $('.portfolio-filter a').children('span').parent().removeClass('active');
                Self.parent().addClass('active');
                $('.masonry-gallery').isotope({ filter: selector });
                return false;
            });
    }
        
    /*================================ magnificPopup  ================================*/
    /* http://dimsemenov.com/plugins/magnific-popup/ // view-source:http://dimsemenov.com/plugins/magnific-popup/ */

    // lightbox image
    $(document).ready(function() {
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
          disableOn: 700,
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,
          fixedContentPos: false
        });
    });

    //LighvtBox / Fancybox
    if($('.lightbox-image').length) {
      $('.lightbox-image').fancybox();
    }
    }

    // ==================== Paralex Backgrounds
    $.stellar({
       horizontalScrolling: false,
       responsive: true
    });

    // ==================== Tab
    function widgetTab() {
        if ($('.tab-widget').length) {
            var tabWrap = $('.tab-widget-content');
            var tabClicker = $('.tab-widget ul li');            
            tabWrap.children('div').hide();
            tabWrap.children('div').eq(0).show();
            tabClicker.on('click', function() {
                var tabName = $(this).data('tab-name');
                tabClicker.removeClass('active');
                $(this).addClass('active');
                var id = '#'+ tabName;
                tabWrap.children('div').not(id).hide();
                tabWrap.children('div'+id).fadeIn('500');
                return false;
            });        
        }
    }

    // ==================== Wow animation
    function wowAnimation() {
        var wow = new WOW({
            mobile: true // trigger animations on mobile devices (default is true)
        });
        wow.init();
    }

    // ==================== fitVids
    function fit_Vids() {
        $body.fitVids();
    }

    // ==================== YTplayer
    if($('.player').length) {
        $(".player").mb_YTPlayer();
    }

    // ==================== funfact animate number
    if($('.counting-nmbr').length){
        $('.counting-nmbr').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 5000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    }

    // ==================== Accordions
    if($('.accordion-box').length){
       $('.accordion-box .acc-btn').on('click', function() {
        if($(this).hasClass('active')!==true){
                $('.accordion-box .acc-btn').removeClass('active');
            }
            
        if ($(this).next('.acc-content').is(':visible')){
                $(this).removeClass('active');
                $(this).next('.acc-content').slideUp(500);
            }
        else{
                $(this).addClass('active');
                $('.accordion-box .acc-content').slideUp(500);
                $(this).next('.acc-content').slideDown(500);    
            }
        });
    }

    // ==================== OWL CAROUSEL AND OTHER SLIDER SCRIPT 
    // Owl-News-carousel
    if($('.owl-carousel-grid-one, .blog-img-carousel').length){
        $('.owl-carousel-grid-one').owlCarousel({
            loop:true,
            margin:30,
            dots: false,
            nav:true,
            autoplayHoverPause:false,
            autoplay: true,
            smartSpeed: 700,
            navText: [
              '<i class="lnr lnr-arrow-left"></i>',
              '<i class="lnr lnr-arrow-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items:1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        })
    }

    if($('.testimonial-carousel').length){
        $('.testimonial-carousel').owlCarousel({
            loop:true,
            margin:30,
            dots: false,
            nav:false,
            autoplayHoverPause:false,
            autoplay: true,
            smartSpeed: 700,
            navText: [
              '<i class="lnr lnr-arrow-left"></i>',
              '<i class="lnr lnr-arrow-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items:1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        })
    }

    // Owl-News-carousel
    if($('.owl-carousel-grid-two, .news-slider').length){
        $('.owl-carousel-grid-two, .news-slider').owlCarousel({
            loop:true,
            margin:30,
            dots: false,
            nav:true,
            autoplayHoverPause:false,
            autoplay: true,
            smartSpeed: 700,
            navText: [
              '<i class="lnr lnr-arrow-left"></i>',
              '<i class="lnr lnr-arrow-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items:1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        })
    }

    // Owl-gallery-carousel
    if($('.owl-carousel-grid-three, .gallery-slider').length){
        $('.owl-carousel-grid-three, .gallery-slider').owlCarousel({
            loop:true,
            margin:10,
            dots: false,
            nav:true,
            autoplayHoverPause:false,
            autoplay: true,
            smartSpeed: 700,
            navText: [
              '<i class="lnr lnr-arrow-left"></i>',
              '<i class="lnr lnr-arrow-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items: 1,
                    center: false
                },
                600: {
                    items: 2,
                    center: false
                },
                768: {
                    items: 2,
                    center: false
                },
                992: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        })
    }

    // ==================== Scroll To top
    function scrollToToped() {
        $(window).scroll(function(){
            if ($(this).scrollTop() > 600) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });
        
        //Click event to scroll to top
        $('.scrollToTop').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });
    }


/* ==========================================================================
   When document is ready, do
   ========================================================================== */
    $(document).on('ready', function() {
        // add your functions
        datePickers();
        timedatePicker();
        menuzord();
        navbar_scrollfixed();
        scrollToToped();
        wowAnimation();
        widgetTab();
    });

/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */
    // window on Scroll function
    $(window).on('scroll', function() {
        // add your functions
    });
    
/* ==========================================================================
   When document is loading, do
   ========================================================================== */

    $(window).on('load', function() {
        // add your functions
        preloader_load();
        masonryIsotop();
    }); 


/* ==========================================================================
   When Window is resizing, do
   ========================================================================== */
    $(window).on('resize', function() {
        // add your functions
    });


})(window.jQuery);