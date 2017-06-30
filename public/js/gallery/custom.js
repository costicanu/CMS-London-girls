(function ($) {     //START

    'use strict';

    var SANAT = window.SANAT || {};

    /* =========== Animation Header on Scroll =========== */

    SANAT.animationHeader = function(){
        $(window).scroll(function(){
            var $this = $(this), pos = $this.scrollTop();
            if (pos > 50){
                $('header.sticky-header').addClass('nav-small');
            } else {
                $('header.sticky-header').removeClass('nav-small');
            }

            //For to top navigation
            if($('#scrolltoTop').length > 0){
                if (pos > 100) {
                    $('#scrolltoTop').fadeIn();
                } else {
                    $('#scrolltoTop').fadeOut();
                }
            }
        });
    };

    /* ============= Toggle ================ */

    SANAT.toggle = function(){
        if($('.toggle-builder').length > 0 ){
            var accordion_trigger_toggle = $('.accordion-heading.togglize');

            accordion_trigger_toggle.delegate('.accordion-toggle','click', function(e){
                if($(this).hasClass('active')){
                    $(this).removeClass('active');
                    $(this).addClass('inactive');
                }
                else{
                    $(this).removeClass('inactive');
                    $(this).addClass('active');
                }
                e.preventDefault();
            });
        }
    };

    /* ========= Animations Module ==================== */

    SANAT.animationsModule = function(){
        function elementViewed(element) {

            if ($(document.documentElement).hasClass('ie9')) {
                return false;
            }

            var elem = element, window_top = $(window).scrollTop(), offset = $(elem).offset(), top = offset.top;
            if ($(elem).length > 0) {
                if (top + $(elem).height() >= window_top && top <= window_top + $(window).height()) {
                    $(elem).queue(function(){
                        $(elem).addClass('animate');   //add animate class to animated-content

                        if($('.counter-number').length > 0 ){
                            $('.timer').countTo();
                        }

                    });
                    return true;
                } else {
                    return false;
                }
            }
        };

        function onScrollInterval(){
            var didScroll = false;
            $(window).scroll(function(){
                didScroll = true;
            });

            setInterval(function(){
                if($('.animated-content').length > 0 ){
                    $('.animated-content').each(function() {
                        var currentObj = $(this);
                        elementViewed(currentObj);
                    });
                }
            }, 250);
        };
        onScrollInterval();
    };




    $(document).ready(function () {

        SANAT.animationsModule();
        SANAT.animationHeader();
        var window_height = $(window).innerHeight();
        var window_width = $(window).innerWidth();

        //For ipad parralax section
        if(navigator.platform == 'iPad' || navigator.platform == 'iPhone' || navigator.platform == 'iPod')
        {
            //set background fixed with javascript
            //var element = document.getElementByClass('parallax-section');
            $(".parallax-section").css("background-attachment","scroll");
            //element.style.webkitTransform = "translate3d(0, " + window.pageYOffset + "px, 0)";
        };

        //mm-item-content add to menu for navigation menu
        $('.navbar').find('.sub-menu').addClass('mm-item-content');

        //for title first latter highlight in slider
        $('.cb-slideshow li div h3, .sl-slide-inner-container .sl-title, .kenburn-inner-container .slidecaption').each(function() {
            var h = $(this).html();
            var arrofwords = h.split(" ");
            var middle = Math.ceil(arrofwords.length / 2);
            var arrofwords1 = h.split(" ",middle);
            var arrofwords2 = arrofwords1.join(" ");
            var index = arrofwords2.length;

            if(index == 0) {
                index = h.length;
            }
            $(this).html('<p class="h3firstword">' + h.substring(0, index) + '</p>' + h.substring(index, h.length));
        });



        //Post detail hide and show
        $("#post-hide-btn").on('click',function(event) {
            $(".post-out-container").fadeToggle(800);
            $(this).toggleClass('active');
            if($(this).hasClass('active')){
                $(".expand-post-detail").fadeOut(800);
            }
            else{
                $(".expand-post-detail").fadeIn(800);
            }
        });


        // For tooltip
        $("[data-toggle='tooltip']").tooltip({extraClass:"tooltip-custom"});
        // For tooltip



        $('#portfolio-filters a').click(function(){             // filter items when filter link is clicked
            if($("#portfolio-container.standard").length > 0){
                var selector = $(this).attr('data-filter');
                selector = selector.replace('.', '');
                var column = 3;
                if($('.portfolio-3col').length > 0){
                    column = 3;
                }else{
                    column = 4;
                }

                var $filter_selector = $("#portfolio-container");

                $filter_selector.find(".element").fadeOut(200);
                $filter_selector.find(".element").removeClass('visible');
                $filter_selector.find(".element").removeClass('first');
                $filter_selector.find(".element").removeClass('last');
                if(selector == '*'){
                    $filter_selector.find(".element").fadeIn('slow');
                    $filter_selector.find(".element").addClass('visible').removeClass('hidden');
                    updateStriping($filter_selector.find(".element"),column);
                }else{
                    $filter_selector.find(".element[data-category~='"+selector+"']").fadeIn('slow');
                    $filter_selector.find(".element[data-category~='"+selector+"']").addClass('visible').removeClass('hidden');
                    updateStriping($filter_selector.find(".element.visible"),column);
                }
                return false;
            }else{
                var selector = $(this).attr('data-filter');
                $("#portfolio-container").isotope({ filter: selector });
                return false;
            }
        });
        var $optionSets = $('#filter-bar .category-option-set'),
            $optionLinks = $optionSets.find('a');
        $optionLinks.click(function(){
            var $this = $(this);
            if ( $this.hasClass('selected') ) {        // don't proceed if already selected
                return false;
            }
            var $optionSet = $this.parents('.category-option-set');
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');
            $optionSet.find('.active').removeClass('active');
            $this.closest('li').addClass('active');
            return false;
        });

        // For toggle start
        if($('.toggle-builder').length > 0 ){
            var accordion_trigger_toggle = $('.accordion-heading.togglize');

            accordion_trigger_toggle.delegate('.accordion-toggle','click', function(e){
                if($(this).hasClass('active')){
                    $(this).removeClass('active');
                    $(this).addClass('inactive');
                }
                else{
                    $(this).removeClass('inactive');
                    $(this).addClass('active');
                }
                e.preventDefault();
            });
        }


    });

    $(window).load(function(){
        var container = document.querySelector( 'div#main' ),
            triggerBttn = document.getElementById( 'site-navigation-btn' ),
            overlay = document.querySelector( 'div.overlay' ),
            closeBttn = document.getElementById( 'site-navigation-btn' ),
            transEndEventNames = {
                'WebkitTransition': 'webkitTransitionEnd',
                'MozTransition': 'transitionend',
                'OTransition': 'oTransitionEnd',
                'msTransition': 'MSTransitionEnd',
                'transition': 'transitionend'
            },
            transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
            support = { transitions : Modernizr.csstransitions };

        $(window).resize(function(){
            menu_scroll();
        });

        triggerBttn.addEventListener( 'click', toggleOverlay );
        closeBttn.addEventListener( 'click', toggleOverlay );

        //overlay toggle
        function toggleOverlay() {
            if( classie.has( overlay, 'open' ) ) {
                $('#site-navigation-btn').removeClass('active');
                classie.remove( overlay, 'open' );
                classie.remove( container, 'overlay-open' );
                classie.add( overlay, 'close' );
                var onEndTransitionFn = function( ev ) {
                    if( support.transitions ) {
                        if( ev.propertyName !== 'visibility' ) return;
                        this.removeEventListener( transEndEventName, onEndTransitionFn );
                    }
                    classie.remove( overlay, 'close' );
                };
                if( support.transitions ) {
                    overlay.addEventListener( transEndEventName, onEndTransitionFn );
                }
                else {
                    onEndTransitionFn();
                }
            }else if( !classie.has( overlay, 'close' ) ) {
                classie.add( overlay, 'open' );
                classie.add( container, 'overlay-open' );
                $('#site-navigation-btn').addClass('active');
                menu_scroll();
            }
        }
        //For auto load
        var blog_i = 1;



        var blog_ms_i = 1;
        /* Masonry blog load more */
        $('body').on('click', '.blog-masonry .blog_paging .load_more_blog a' , function(e) {
            e.preventDefault();
            e.stopPropagation();
            $('.blog_paging .load_more_blog').hide();
            $('.blog_paging .load-more-loader').show();
            var link = $(this).attr('href');
            var $content = '#blog-main-container';
            var $anchor = '.blog_paging .load_more_blog a';
            var $next_href = $($anchor).attr('href'); // Get URL for the next set of posts
            $.get(link+'', function(data){

                var $new_content = $($content, data).wrapInner('').html(); // Grab just the content
                $next_href = $($anchor, data).attr('href'); // Get the new href
                $new_content = $($new_content);
                //$('#blog-main-container').isotope( 'insert', $new_content );
                $('#blog-main-container').append( $new_content ).isotope( 'appended', $new_content);
                $("#portfolio-container").imagesLoaded( function(){
                    $isotope_container = $("#portfolio-container").isotope({
                        itemSelector: '.blog-element'
                    });
                })

                //$('article.standard:last').after($new_content); // Append the new content
                $('.blog_paging .load_more_blog').show();
                $('.blog_paging .load-more-loader').hide();
                if($('.load_more_blog').attr('data-rel') > blog_ms_i) {
                    $('.load_more_blog a').attr('href', $next_href); // Change the next URL
                } else {
                    $('.load_more_blog').remove();
                }
            });
            blog_ms_i++;
        });

        var portfolio_i = 1;
        /* Masonry blog load more */
        $('.portfolio-outer-container .portfolio-inner-container .portfolio_paging .load_more_portfolio a').on('click' , function(e) {
            e.preventDefault();
            e.stopPropagation();
            $('.portfolio_paging .load_more_portfolio').hide();
            $('.portfolio_paging .load-more-loader').show();
            var link = $(this).attr('href');
            var $content = '#portfolio-container';
            var $anchor = '.portfolio_paging .load_more_portfolio a';
            var $next_href = $($anchor).attr('href'); // Get URL for the next set of posts
            $.get(link+'', function(data){

                var $new_content = $($content, data).wrapInner('').html(); // Grab just the content
                var $new_content = $($new_content); // Grab just the content
                $next_href = $($anchor, data).attr('href'); // Get the new href
                if($($content).hasClass('standard')){
                    $('#portfolio-container').append($new_content);
                }else{
                    $('#portfolio-container').isotope( 'insert', $new_content );
                    $("#portfolio-container").imagesLoaded( function(){
                        $isotope_container = $("#portfolio-container").isotope({
                            itemSelector: '.element'
                        });
                    })
                }

                $(".portfolio-outer-container").find('.gallery-view').magnificPopup({type:'image'});

                if($('.project-outer-container').length > 0){
                    $('.project-outer-container .magnific-gallery').each(function() { // the containers for all your galleries
                        $(this).magnificPopup({
                            delegate: 'a', // the selector for gallery item
                            type: 'image',
                            gallery: {
                                enabled:true
                            }
                        });
                    });
                }
                //$('article.standard:last').after($new_content); // Append the new content
                $('.portfolio_paging .load_more_portfolio').show();
                $('.portfolio_paging .load-more-loader').hide();
                if($('.load_more_portfolio').attr('data-rel') > portfolio_i) {
                    $('.load_more_portfolio a').attr('href', $next_href); // Change the next URL
                } else {
                    $('.load_more_portfolio').remove();
                }
            });
            portfolio_i++;
        });
    });

    function menu_scroll(){
        var nav_height = $('#navbar').innerHeight();
        $('.site-header #navbar .menu-header-container').css('max-height' ,nav_height);
    }
})(jQuery);//END

