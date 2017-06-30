$(document).ready(function () {

    /* creating the hover effect on girls listing page*/
    $('.each-girl-masonry').mouseenter(function () {
        $(this).children('.masonry-details').addClass('masonry-details-hover');

        //$(this).children('.masonry-details').children('.details-to-hide').show('slide', {direction: 'down' }, 'slow');
        $(this).children('.masonry-details').children('.details-to-hide').stop().slideDown(500);
        //$(this).children('.details-to-hide').removeClass('details-to-hide');
    });

    $('.each-girl-masonry').mouseleave(function () {
        $(this).children('.masonry-details').removeClass('masonry-details-hover');
        $(this).children('.masonry-details').children('.details-to-hide').stop().slideUp(500);
    });


    /* creating Hover effect on smartphones */
     $('ul li.has-children').on("touchstart", function (e) {
         alert('touch stest from: custom-scripts.js ');
     });




});