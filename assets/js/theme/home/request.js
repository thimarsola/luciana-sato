// var $j = jQuery.noConflict();

$(document).ready(function () {
    const path = $(location).attr("href");
    const file = 'wp-content/themes/goognet/source/Support/Sender.php';

    $('#form').submit(function () {
        $(".contact__row__content__form__status").removeClass("d-none");

        $.ajax({
            url: path.concat(file),
            type: 'POST',
            cache: false,
            data: $('#form').serialize(),
            success: function (data) {
                $('.contact__row__content__form__status').append(data);

                setTimeout(function (){
                    $(".contact__row__content__form__status").addClass("d-none");
                }, 3000);
            },
            error: function(){
                $('.contact__row__content__form__status').append('Erro');
            }
        });
        return false;
    });
});