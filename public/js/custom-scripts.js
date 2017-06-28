$(document).ready(function () {

    /* creating the hover effect on girls listing page*/
    $('.each-girl-masonry').mouseenter(function () {
        $(this).children('.masonry-details').addClass('masonry-details-hover');

        //$(this).children('.masonry-details').children('.details-to-hide').show('slide', {direction: 'down' }, 'slow');
        $(this).children('.masonry-details').children('.details-to-hide').slideDown(500);
        //$(this).children('.details-to-hide').removeClass('details-to-hide');
    });

    $('.each-girl-masonry').mouseleave(function () {
        $(this).children('.masonry-details').removeClass('masonry-details-hover');
        $(this).children('.masonry-details').children('.details-to-hide').slideUp(500);
    });


});