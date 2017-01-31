$(document).ready(function() {

    // $(".goToTop").fadeOut();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('#goToTop').fadeIn();
        } else {
            $('#goToTop').fadeOut();
        }
    });

    $('#goToTop').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});
