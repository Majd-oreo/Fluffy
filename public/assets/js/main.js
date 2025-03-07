(function ($) {
	"use strict";

    jQuery(document).ready(function($){
        
        //  Home Team Slider JS
         $(".slider-team").owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            items:3,
            center: true,
            loop:true,
            nav:true,
            margin:0,
            dots:false,
            autoplay:true,
            navText: ['<i class="flaticon-left-chevron"></i>', '<i class="flaticon-left-chevron"></i>'],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    center: false,
                },
                440: {
                    items: 1,
                    center: false,
                },
                768: {
                    items: 3,
                },
                1000: {
                    items: 3,
                },
            }
        });

        //  Home Trusted Company Slider JS
        $(".petnest-showcase-company").owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            items:5,
            center: false,
            loop:true,
            nav:false,
            margin:0,
            dots:false,
            autoplay:true,
            navText: ['<i class="flaticon-left-chevron"></i>', '<i class="flaticon-left-chevron"></i>'],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                },
                440: {
                    items: 2
                },
                768: {
                    items: 4,
                },
                1000: {
                    items: 5,
                },
            }
        });

        //  Home Client Feedback Slider JS
        $(".petnest-client-feedback-slide").owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            items:1,
            loop:true,
            nav:false,
            margin:0,
            dots:true,
            autoplay:true,
            navText: ['<i class="flaticon-left-chevron"></i>', '<i class="flaticon-left-chevron"></i>'],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    autoHeight:true,
                    autoplay:false,
                },
                768: {
                    autoHeight:false,
                },
                1000: {
                    autoHeight:false,
                },
            }
        });

        // Home Petnest Counter JS
        $(".petnest-counter span").counterUp({
            delay: 10,
            time: 1000
        });


        //  Home Blog Slider JS
        $(".petnest-blog-listing-slider").owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            items:3,
            center: false,
            loop:true,
            nav:true,
            margin:30,
            dots:false,
            autoplay:true,
            navText: ['<i class="flaticon-left-chevron"></i>', '<i class="flaticon-left-chevron"></i>'],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    autoHeight:true,
                    autoplay:false,
                },
                440: {
                    items: 1,
                    autoHeight:true,
                    autoplay:false,
                },
                768: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            }
        });

         // Mobile Menu JS
         $('#mobile-menu').meanmenu({
            meanMenuContainer: '.mobile-menu',
            meanScreenWidth: "991"
        });

        

        // Petnest Search JS
        $(".search-trigger").on('click', function () {
            $(".petnest-serach-ui").addClass("active");
        });

        $(".petnest-search-close").on('click', function () {
            $(".petnest-serach-ui").removeClass("active");
        });

        // Petnest Sticky JS
        $(window).on('scroll', function () {
            var scroll = $(window).scrollTop();
            if (scroll < 245) {
                $("#header-sticky").removeClass("petnest-header-sticky");
            } else {
                $("#header-sticky").addClass("petnest-header-sticky");
            }
        });

        //  Our Team Page Slider JS
        $(".slider-team-page").owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            items:3,
            center: false,
            loop:true,
            nav:true,
            margin:0,
            dots:false,
            autoplay:true,
            navText: ['<i class="flaticon-left-chevron"></i>', '<i class="flaticon-left-chevron"></i>'],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                440: {
                    items: 1,
                },
                768: {
                    items: 3,
                },
                1000: {
                    items: 3,
                },
            }
        });

        // Our Gallery Filter JS
        $(".gallery-filter li").on('click', function(){
            var filterData = $(this).attr("data-filter");
    
            $(".gallery-list").isotope({
                filter: filterData,
            });
    
            $(".gallery-filter li").removeClass('active');
                $(this).addClass('active');
        });

        // Our Gallery Image grid JS
         $(".gallery-list").isotope({
            itemSelector: '.single-gallery-photo',
            percentPosition: true,
            masonry: {
                columnWidth: '.single-gallery-photo',
                horizontalOrder: true
            }
         });

        //  Click to large image JS
         $(".click-to-large").magnificPopup({
            type: 'image',
            gallery: {
                enabled: true,
            }
        });


        //  Login Page Slider JS
        $(".login-page-slider").owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            items:1,
            center: false,
            loop:true,
            nav:false,
            margin:0,
            dots:true,
            autoplay:true,
            navText: ['<i class="flaticon-left-chevron"></i>', '<i class="flaticon-left-chevron"></i>'],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                440: {
                    items: 1,
                },
                768: {
                    items: 1,
                },
                1000: {
                    items: 1,
                },
            }
        });
        
        // Product Gallery JS
         $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 400,
            title: true,
            tint: '#333',
            Xoffset: 15
        });
        //Integration with hammer.js
        var isTouchSupported = 'ontouchstart' in window;
        if (isTouchSupported) {
            //If touch device
            $('.xzoom').each(function() {
                var xzoom = $(this).data('xzoom');
                xzoom.eventunbind();
            });
            $('.xzoom').each(function() {
                var xzoom = $(this).data('xzoom');
                $(this).hammer().on("tap", function(event) {
                    event.pageX = event.gesture.center.pageX;
                    event.pageY = event.gesture.center.pageY;
                    var s = 1,
                        ls;
                    xzoom.eventmove = function(element) {
                        element.hammer().on('drag', function(event) {
                            event.pageX = event.gesture.center.pageX;
                            event.pageY = event.gesture.center.pageY;
                            xzoom.movezoom(event);
                            event.gesture.preventDefault();
                        });
                    }
                    xzoom.eventleave = function(element) {
                        element.hammer().on('tap', function(event) {
                            xzoom.closezoom();
                        });
                    }
                    xzoom.openzoom(event);
                });
            });
        } else {
            //If not touch device
            //Integration with fancybox plugin
            $('#xzoom-fancy').bind('click', function(event) {
                var xzoom = $(this).data('xzoom');
                xzoom.closezoom();
                $.fancybox.open(xzoom.gallery().cgallery, {
                    padding: 0,
                    helpers: {
                        overlay: {
                            locked: false
                        }
                    }
                });
                event.preventDefault();
            });
            //Integration with magnific popup plugin
            $('#xzoom-magnific').bind('click', function(event) {
                var xzoom = $(this).data('xzoom');
                xzoom.closezoom();
                var gallery = xzoom.gallery().cgallery;
                var i, images = new Array();
                for (i in gallery) {
                    images[i] = {
                        src: gallery[i]
                    };
                }
                $.magnificPopup.open({
                    items: images,
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });
                event.preventDefault();
            });
        }


        // Increment Decrement JS
        $('.quantity-right-plus').click(function(e){
            e.preventDefault();
            var ammount = parseInt($('#quantity').val());
            $('#quantity').val(ammount + 1);
        });
        
        $('.quantity-left-minus').click(function(e){
            e.preventDefault();
            var ammount = parseInt($('#quantity').val());
            if(ammount > 0){
                $('#quantity').val(ammount - 1);
            }
        });


        //  Home v2 Client Feedback Slider JS
        $(".slider-client-v2").owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            items:1,
            loop:true,
            nav:false,
            margin:0,
            dots:true,
            autoplay:true,
            navText: ['<i class="flaticon-left-chevron"></i>', '<i class="flaticon-left-chevron"></i>'],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    autoHeight:true,
                    autoplay:false,
                },
                768: {
                    autoHeight:false,
                },
                1000: {
                    autoHeight:false,
                },
            }
        });


    });

   jQuery(window).load(function(){

   });

}(jQuery));	