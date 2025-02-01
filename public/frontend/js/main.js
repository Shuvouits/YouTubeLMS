/*---------------------------------------------
Template name:  Aduca
Description: Aduca - Education HTML Template
Author:         TechyDevs
Author Email:   contact@techydevs.com
----------------------------------------------*/

(function ($) {
    "use strict";

    var $window = $(window);

    $window.on('load', function (key, value){

        var $document = $(document);
        var $dom = $('html, body');
        var preLoader = $('.preloader');
        var isMenuOpen = false;
        var togglePassword = $('.toggle-password');
        var heroSlider = $('.hero-slider');
        var courseCarousel = $('.course-carousel');
        var viewMoreCarousel = $('.view-more-carousel');
        var viewMoreCarouselTwo = $('.view-more-carousel-2');
        var testimonialCarousel = $('.testimonial-carousel');
        var testimonialCarouselTwo = $('.testimonial-carousel-2');
        var testimonialCarouselThree = $('.testimonial-carousel-3');
        var clientLogoCarousel = $('.client-logo-carousel');
        var blogPostCarousel = $('.blog-post-carousel');
        var selectContainerSelect = $('.select-container-select');
        var cardPreview = $('.card-preview');
        var userTextEditor = $('.user-text-editor');
        var categoryCarousel = $('.category-carousel');
        var featuredCourseCarousel = $('.featured-course-carousel');
        var fullscreenSlider = $('.fullscreen-slider');
        var isotopListItem = $('.generic-portfolio-list');
        var myFancybox = $('[data-fancybox="gallery"]');
        var dateDropperPicker = $('.datepicker');
        var emojiPicker = $('.emoji-picker');
        var numberCounter = $('.counter');
        var tagsInput = $('.tags-input');
        var quantityBtn = $('.qtyBtn');
        var internationalTelephoneInput = $('#phone');
        var fileUploaderInput = $('.cv-input');
        var lazyLoading = $('.lazy');
        var skillBar = $('.skillbar');

        /* ======= Preloader ======= */
        preLoader.delay('500').fadeOut(2000);

        /*=========== Header top bar menu ============*/
        $document.on('click', '.down-button', function () {
            $(this).toggleClass('active');
            $('.header-top').slideToggle(200);
        });
        /*=========== When window will resize then this action will work ============*/
        $window.on('resize', function () {
            if ($window.width() > 991) {
                $('.header-top').show();
            }else {
                if (isMenuOpen) {
                    $('.header-top').show();
                }else {
                    $('.header-top').hide();
                }
            }
        });
        /*=========== Mobile search form open ============*/
        var searchFormToggle = $('.search-menu-toggle');

        searchFormToggle.on('click', function () {
            $('.mobile-search-form, .body-overlay').addClass('active');
            $('body').css({'overflow': 'hidden'});
        });

        /*=========== Mobile search form close ============*/
        var searchFormClose = $('.search-bar-close, .body-overlay');

        searchFormClose.on('click', function () {
            $('.mobile-search-form, .body-overlay').removeClass('active');
            $('body').css({'overflow': 'inherit'});
        });

        /*=========== Category menu open ============*/
        var catMenuToggle = $('.cat-menu-toggle');

        catMenuToggle.on('click', function () {
            $('.category-off-canvas-menu, .body-overlay').addClass('active');
            $('body').css({'overflow': 'hidden'});
        });

        /*=========== Category menu close ============*/
        var catMenuClose = $('.cat-menu-close, .body-overlay');

        catMenuClose.on('click', function () {
            $('.category-off-canvas-menu, .body-overlay').removeClass('active');
            $('body').css({'overflow': 'inherit'});
        });

        /*=========== Main menu open ============*/
        var mainMenuToggle = $('.main-menu-toggle');

        mainMenuToggle.on('click', function () {
            $('.main-off-canvas-menu, .body-overlay').addClass('active');
            $('body').css({'overflow': 'hidden'});
        });

        /*=========== Main menu close ============*/
        var mainMenuClose = $('.main-menu-close, .body-overlay');

        mainMenuClose.on('click', function () {
            $('.main-off-canvas-menu, .body-overlay').removeClass('active');
            $('body').css({'overflow': 'inherit'});
        });

        /*=========== User menu open ============*/
        var userMenuToggle = $('.user-menu-toggle');

        userMenuToggle.on('click', function () {
            $('.user-off-canvas-menu, .body-overlay').addClass('active');
            $('body').css({'overflow': 'hidden'});
        });

        /*=========== User menu close ============*/
        var userMenuClose = $('.user-menu-close, .body-overlay');

        userMenuClose.on('click', function () {
            $('.user-off-canvas-menu, .body-overlay').removeClass('active');
            $('body').css({'overflow': 'inherit'});
        });

        /*=========== Dashboard menu open ============*/
        var dashboardMenuToggle = $('.dashboard-menu-toggler');

        dashboardMenuToggle.on('click', function () {
            $('.off--canvas-menu, .body-overlay').addClass('active');
            $('body').css({'overflow': 'hidden'});
        });

        /*=========== Dashboard menu close ============*/
        var dashboardMenuClose = $('.dashboard-menu-close, .body-overlay');

        dashboardMenuClose.on('click', function () {
            $('.off--canvas-menu, .body-overlay').removeClass('active');
            $('body').css({'overflow': 'inherit'});
        });

        /*=========== Sub menu ============*/
        var dropdowmMenu = $('.off-canvas-menu-list .sub-menu');

        dropdowmMenu.parent('li').children('a').append(function() {
            return '<button class="sub-nav-toggler" type="button"><i class="la la-angle-down"></i></button>';
        });

        /*=========== sub menu ============*/
        var dropMenuToggler = $('.sub-nav-toggler');

        dropMenuToggler.on('click', function() {
            var Self = $(this);
            Self.toggleClass('active');
            Self.parent().parent().siblings().children("a").find(".sub-nav-toggler").removeClass("active");
            Self.parent().parent().children('.sub-menu').slideToggle();
            Self.parent().parent().siblings().children('.sub-menu').slideUp();
            return false;
        });

        /* ======= Back to Top Button and Navbar Scrolling control ======= */
        var scrollTopBtn = $('#scroll-top');

        $window.on('scroll', function () {
            //header fixed animation and control
            if ($(this).scrollTop() > 200) {
                $('.header-menu-content').addClass("fixed-top");
                // add padding top to show content behind header-menu-content
                $('body').css('margin-top', $('.header-menu-content').outerHeight() + 'px');
            }else{
                $('.header-menu-content').removeClass("fixed-top");
                // remove padding top from body
                $('body').css('margin-top', '0');
            }

            //back to top button control
            if($(this).scrollTop()>= 300){
                scrollTopBtn.show();
            }else{
                scrollTopBtn.hide();
            }

            // Animated skillbar
            var my_skill = '.skills .skill';

            if ($(my_skill).length !== 0){
                spy_scroll(my_skill);
            }
        });

        $document.on('click','#scroll-top', function () {
            $($dom).animate({scrollTop:0},1000);
        });
        /*========= Anchor link scroll animation by click ========*/
        var pageScroll = $('.page-scroll');
        pageScroll.on('click', function(e){
            e.preventDefault();
            var target = $(this.hash);
            $($dom).animate({
                scrollTop: (target.offset().top -20)
            },600);
        });

        /*==== Hero slider =====*/
        if ($(heroSlider).length) {
            $(heroSlider).owlCarousel({
                items: 1,
                nav: true,
                dots: true,
                autoplay: false,
                loop: true,
                smartSpeed: 1000,
                active: true,
                navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
            });
        }
        /*==== Course carousel =====*/
        if ($(courseCarousel).length) {
            $(courseCarousel).owlCarousel({
                loop: true,
                items: 3,
                nav: true,
                dots: false,
                smartSpeed: 500,
                autoplay: false,
                margin: 30,
                navText: ["<i class='la la-arrow-left'></i>", "<i class='la la-arrow-right'></i>"],
                responsive:{
                    320:{
                        items: 1,
                    },
                    992:{
                        items: 3,
                    }
                }
            });
        }
        /*==== View more carousel =====*/
        if ($(viewMoreCarousel).length) {
            $(viewMoreCarousel).owlCarousel({
                loop: true,
                items: 1,
                nav: false,
                dots: true,
                smartSpeed: 500,
                autoplay: true,
                margin: 15
            });
        }
        /*==== View more carousel 2 =====*/
        if ($(viewMoreCarouselTwo).length) {
            $(viewMoreCarouselTwo).owlCarousel({
                loop: true,
                items: 3,
                nav: false,
                dots: true,
                smartSpeed: 500,
                autoplay: true,
                margin: 15,
                responsive:{
                    320:{
                        items:1,
                    },
                    768:{
                        items:2,
                    },
                    992:{
                        items:3,
                    }
                }
            });
        }
        /*==== Testimonial carousel =====*/
        if ($(testimonialCarousel).length) {
            $(testimonialCarousel).owlCarousel({
                loop: true,
                items: 5,
                nav: false,
                dots: true,
                smartSpeed: 500,
                autoplay: false,
                margin: 30,
                autoHeight: true,
                responsive:{
                    320:{
                        items: 1,
                    },
                    767:{
                        items: 2,
                    },
                    992:{
                        items: 3,
                    },
                    1025:{
                        items: 4,
                    },
                    1441:{
                        items: 5,
                    }
                }
            });
        }
        /*==== testimonial-carousel 2 =====*/
        if ($(testimonialCarouselTwo).length) {
            $(testimonialCarouselTwo).owlCarousel({
                loop: true,
                items: 2,
                nav: true,
                dots: false,
                smartSpeed: 500,
                autoplay: false,
                margin: 30,
                autoHeight: true,
                navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
                responsive:{
                    320:{
                        items:1,
                    },
                    768:{
                        items:2
                    }
                }
            });
        }
         /*==== testimonial-carousel 3 =====*/
        if ($(testimonialCarouselThree).length) {
            $(testimonialCarouselThree).owlCarousel({
                loop: true,
                items: 3,
                nav: true,
                dots: false,
                smartSpeed: 500,
                autoplay: false,
                margin: 30,
                autoHeight: true,
                navText: ["<i class='la la-arrow-left'></i>", "<i class='la la-arrow-right'></i>"],
                responsive:{
                    320:{
                        items: 1,
                    },
                    768:{
                        items: 2
                    },
                    1025:{
                        items: 3
                    }
                }
            });
        }

        /*==== Client logo carousel =====*/
        if ($(clientLogoCarousel).length) {
            $(clientLogoCarousel).owlCarousel({
                loop: true,
                items: 5,
                nav: false,
                dots: false,
                smartSpeed: 500,
                autoplay: true,
                responsive : {
                    // breakpoint from 0 up
                    0 : {
                        items: 2
                    },
                    // breakpoint from 481 up
                    481 : {
                        items: 3
                    },
                    // breakpoint from 768 up
                    768: {
                        items: 4
                    },
                    // breakpoint from 992 up
                    992 : {
                        items: 5
                    }
                }
            });
        }
        /*==== blog-post-carousel =====*/
        if($(blogPostCarousel).length) {
            $(blogPostCarousel).owlCarousel({
                loop: true,
                items: 3,
                nav: false,
                dots: true,
                smartSpeed: 500,
                autoplay: false,
                margin: 30,
                responsive:{
                    320:{
                        items:1,
                    },
                    992:{
                        items:3,
                    }
                }
            });
        }
        /*==== Category carousel =====*/
        if ($(categoryCarousel).length) {
            $(categoryCarousel).owlCarousel({
                loop: true,
                items: 5,
                nav: true,
                dots: false,
                smartSpeed: 500,
                autoplay: false,
                margin: 20,
                autoHeight: true,
                navText: ["<i class='la la-arrow-left'></i>", "<i class='la la-arrow-right'></i>"],
                responsive:{
                    320:{
                        items: 1,
                    },
                    480:{
                        items: 2
                    },
                    768:{
                        items: 3
                    },
                    992:{
                        items: 5
                    }
                }
            });
        }
        /*==== featured-course-carousel =====*/
        if ($(featuredCourseCarousel).length) {
            $(featuredCourseCarousel).owlCarousel({
                loop: true,
                items: 1,
                nav: true,
                dots: false,
                smartSpeed: 500,
                autoplay: false,
                margin: 20,
                autoHeight: true,
                navText: ["<i class='la la-arrow-left'></i>", "<i class='la la-arrow-right'></i>"]
            });
        }
        /*==== fullscreen carousel =====*/
        if ($(fullscreenSlider).length) {
            $(fullscreenSlider).owlCarousel({
                loop: true,
                items: 3,
                nav: true,
                dots: false,
                smartSpeed: 500,
                autoplay: false,
                margin: 20,
                autoHeight: true,
                navText: ["<i class='la la-arrow-left'></i>", "<i class='la la-arrow-right'></i>"],
                responsive:{
                    320:{
                        items: 1,
                    },
                    768:{
                        items: 2
                    },
                    992:{
                        items: 3
                    }
                }
            });
        }

        /*=========== Bootstrap Tooltip ============*/
        $('[data-toggle="tooltip"]').tooltip();

        /*=========== Isotope ============*/
        // bind filter button click
        $document.on( 'click', '.portfolio-filter li', function() {
            var filterData = $( this ).attr('data-filter');

            // use filterFn if matches value
            $(isotopListItem).isotope({
                filter: filterData,
            });

            $('.portfolio-filter li').removeClass('active');
            $(this).addClass('active');
        });

        // portfolio list
        if ($(isotopListItem).length) {
            $(isotopListItem).isotope({
                itemSelector: '.generic-portfolio-item',
                percentPosition: true,
                masonry: {
                    // use outer width of grid-sizer for columnWidth
                    columnWidth: '.generic-portfolio-item',
                    horizontalOrder: true
                }
            });
        }
        /*==== fancybox  =====*/
        if ($(myFancybox).length) {
            $(myFancybox).fancybox();
        }
        /*==== Card preview =====*/
        if ($(cardPreview).length) {
            $(cardPreview).tooltipster({
                contentCloning: true,
                interactive: true,
                side: 'right',
                delay: 100,
                animation: 'swing',
                //trigger: 'click'
            });
        }
        /*==== jqte text editor =====*/
        if ($(userTextEditor).length) {
            $(userTextEditor).jqte({
                formats: [
                    ["p","Paragraph"],
                    ["h1","Heading 1"],
                    ["h2","Heading 2"],
                    ["h3","Heading 3"],
                    ["h4","Heading 4"],
                    ["h5","Heading 5"],
                    ["h6","Heading 6"],
                    ["pre","Preformatted"]
                ]
            });
        }
        /*==== Date range picker =====*/
        if ($(dateDropperPicker).length) {
            $(dateDropperPicker).dateDropper({
                format: 'd-m-Y',
                theme: 'vanilla',
                large: true,
                largeDefault: true,
            });
        }
        /*==== emoji-picker =====*/
        if ($(emojiPicker).length) {
            $(emojiPicker).emojioneArea({
                pickerPosition: "top"
            });
        }
        /*==== counter =====*/
        if ($(numberCounter).length) {
            $(numberCounter).counterUp({
                delay: 10,
                time: 1000
            });
        }
        /*==== tags input =====*/
        if ($(tagsInput).length) {
            $(tagsInput).tagsinput({
                tagClass: 'badge badge-info',
                maxTags: 3
            });
        }
        /*==== Lesson sidebar course content menu =====*/
        $('.curriculum-sidebar-list > .course-item-link').on('click', function () {
            var self = $(this);
            self.addClass('active');
            self.siblings().removeClass('active');
            // if li has active-resource class then this action will work
            if(self.is('.active-resource')) {
                $('.lecture-viewer-text-wrap').addClass('active');
            }else if (self.not('.active-resource')) {
                $('.lecture-viewer-text-wrap').removeClass('active');
            }
        });
        /*==== sidebar-close =====*/
        $document.on('click', '.sidebar-close', function () {
            $('.course-dashboard-sidebar-column, .course-dashboard-column, .sidebar-open').addClass('active');
        });
        /*==== sidebar-open =====*/
        $document.on('click', '.sidebar-open', function () {
            $('.course-dashboard-sidebar-column, .course-dashboard-column, .sidebar-open').removeClass('active');
        });
        /*==== When ask-new-question-btn will click then this action will work =====*/
        $document.on('click', '.ask-new-question-btn', function () {
            $('.new-question-wrap, .question-overview-result-wrap').addClass('active');
        });
        /*==== When question-meta-content or question-replay-btn will click then this action will work =====*/
        $document.on('click', '.question-meta-content, .question-replay-btn', function () {
            $('.replay-question-wrap, .question-overview-result-wrap').addClass('active');
        });
        /*==== When question-meta-content or question-replay-btn will click then this action will work =====*/
        $document.on('click', '.back-to-question-btn', function () {
            $('.new-question-wrap, .question-overview-result-wrap, .replay-question-wrap').removeClass('active');
        });
        /*==== Text Swapping =====*/
        $document.on('click', '.swapping-btn', function() {
            var el = $(this);
            el.text() === el.data('text-swap')
                ? el.text(el.data('text-original'))
                : el.text(el.data('text-swap'));
        });
        /*==== collection-link =====*/
        $document.on('click', '.collection-link', function () {
            $(this).children('.collection-icon').toggleClass('active');
        });
        /*==== Bootstrap select picker =====*/
        if ($(selectContainerSelect).length) {
            $(selectContainerSelect).selectpicker({
                liveSearch: true,
                liveSearchPlaceholder: 'Search',
                liveSearchStyle: 'contains',
                size: 5
            });
        }
        /*==== Share toggle =====*/
        $document.on('click', '.share-toggle', function(){
            var THIS = $(this);
            THIS.parent().find( '.social-icons' ).toggleClass( 'social-active' );
            THIS.toggleClass('share-toggle-active');
        });
        /*====== Dropdown btn ======*/
        $('.dropdown-btn').on('click', function (e) {
            e.preventDefault();
            $(this).next('.dropdown-menu-wrap').fadeToggle(100);
            e.stopPropagation();
        });
        /*====== When you click on the out side of dropdown menu item then its will be hide ======*/
        $document.on('click', function(event){
            var $trigger = $('.dropdown');
            if($trigger !== event.target && !$trigger.has(event.target).length){
                $('.dropdown-menu-wrap').fadeOut(100);
            }
        });
        /*==== Quantity number =====*/
        if ($(quantityBtn).length) {
            $(quantityBtn).on('click', function () {
                var $this = $(this);
                var oldValue = $this.parent().find('.qtyInput').val();

                if ($this.hasClass('qtyInc')) {
                    var newVal = parseFloat(oldValue) + 1;
                } else {
                    // don't allow decrementing below zero
                    if (oldValue > 0) {
                         newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 0;
                    }
                }
                $this.parent().find('.qtyInput').val(newVal);
            });
        }
        /*=========== Payment Method Accordion ============*/
        var radioBtn = document.querySelectorAll('.payment-tab-toggle > input');

        for (var i = 0; i < radioBtn.length; i++) {
            radioBtn[i].addEventListener('change', expandAccordion);
        }

        function expandAccordion (event) {
            var allTabs = document.querySelectorAll('.payment-tab');
            for (var i = 0; i < allTabs.length; i++) {
                allTabs[i].classList.remove('is-active');
            }
            event.target.parentNode.parentNode.classList.add('is-active');
        }

        /*==== Copy to clipboard =====*/
        const copyInput = document.querySelector('.copy-input');
        const copyBtn = document.querySelector('.copy-btn');
        const successMessage = document.querySelector('.success-message');

        $(copyBtn).on('click', function () {
            // Select the text
            copyInput.select();
            // Copy it
            document.execCommand('copy');
            // Remove focus from the input
            copyInput.blur();
            // Show message
            successMessage.classList.add('active');
            // Hide message after 2 seconds
            setTimeout(function () {
                successMessage.classList.remove('active');
            }, 2000);
        });

        /*========= International Telephone Dial Codes ========*/
        if ($(internationalTelephoneInput).length) {
            $(internationalTelephoneInput).intlTelInput({
                separateDialCode: true,
                utilsScript: "js/utils.js"
            })
        }
        /*========= Resume upload ========*/
        if ($(fileUploaderInput).length) {
            $(fileUploaderInput).MultiFile({
                accept: 'pdf, doc, docx, rtf, html, odf, zip'
            });
        }
        /*========== Lazy loading ==========*/
        if ($(lazyLoading).length) {
            $(lazyLoading).Lazy();
        }
        /*========= Ajax contact form ========*/
        var submitBtn = document.querySelector('#send-message-btn');
        var form = $('.contact-form'),
            message = $('.contact-success-message'),
            formData;

        // Success function
        function doneFunction(response) {
            submitBtn.innerHTML = 'Send Message';
            message.fadeIn().removeClass('alert-danger').addClass('alert-success');
            message.text(response);
            setTimeout(function () {
                message.fadeOut();
            }, 3000);
            form.find('input:not([type="submit"]), textarea').val('');
        }

        // fail function
        function failFunction(data) {
            submitBtn.innerHTML = 'Send Message';
            message.fadeIn().removeClass('alert-success').addClass('alert-danger');
            message.text(data.responseText);
            setTimeout(function () {
                message.fadeOut();
            }, 3000);
        }

        form.submit(function (e) {
            e.preventDefault();
            formData = $(this).serialize();
            submitBtn.innerHTML = 'Sending...';
            setTimeout(function () {
                $.ajax({
                    type: 'POST',
                    url: form.attr('action'),
                    data: formData
                })
                    .done(doneFunction)
                    .fail(failFunction);
            }, 2000)
        });

        /*====== Dark mode js ========*/
        const themePicker = document.querySelectorAll(".theme-picker-btn");
        const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
        const currentTheme = localStorage.getItem("theme");

        if (currentTheme === "dark") {
            document.body.classList.toggle("dark-theme");
        } else if (currentTheme === "light") {
            document.body.classList.toggle("light-theme");
        }

        themePicker.forEach(function (btn) {
            if (btn) {
                btn.addEventListener("click", function () {
                    if (prefersDarkScheme.matches) {
                        document.body.classList.toggle("light-theme");
                        var theme = document.body.classList.contains("light-theme") ? "light" : "dark";
                    } else {
                        document.body.classList.toggle("dark-theme");
                        var theme = document.body.classList.contains("dark-theme") ? "dark" : "light";
                    }
                    localStorage.setItem("theme", theme);
                });
            }
        });

        /*==== Show/Hide password of input field =====*/
        togglePassword.on('click', function () {
            var passInput = $('.password-field');
            $(this).toggleClass('active');
            if (passInput.attr('type') === 'password') {
                passInput.attr('type', 'text');
            } else {
                passInput.attr('type', 'password');
            }
        });

        /*==== Progress bar =====*/
        if ($(skillBar).length) {
            $(skillBar).each(function(){
                $(this).find('.skillbar-bar').animate({
                    width:$(this).attr('data-percent')
                },6000);
            });
        }

    });
})(jQuery);