$(document).ready(function () {
    $(window).scroll(function () {
        if ($(document).scrollTop() > 50) {
            $('nav').addClass('shrink-navbar');
            $('nav').addClass('navbar-bgcolor');
        } else {
            $('nav').removeClass('shrink-navbar');
            $('nav').removeClass('navbar-bgcolor');
        }
    });
})
