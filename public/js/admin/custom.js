/**
 * Created by costel on 6/1/2017.
 */



$(document).ready(function () {
    function deleteTheImage(url) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: "GET",
            url: url,
            data: {_token: CSRF_TOKEN},
            success: function (result) {
                //do something...
            },
            error: function () {
                //do something...
            }
        });

    }

    $('.delete-picture').unbind("click").click(function (e) {
        e.preventDefault();
        var imageId = ($(this).attr('id'));
        var url = $(this).attr('data-value');
        $(this).parent().parent().fadeOut("slow");
        deleteTheImage(url);
        return false;
    });


});
