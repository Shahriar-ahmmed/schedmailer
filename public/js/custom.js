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
    $('.form-control').on('keyup','#confirm_password',function(){

    });
    $('.form-group').on('focusout','.email',function(){
        emailtext = $('.email').val();
        validate_email(emailtext);
    }).on('focus', '.email',function(){
        $('.email').css('border-color','');
    });

    $('.email').tooltip();
    function validate_email(field)
    {
        with (field)
        {
            apos=field.indexOf("@");
            dotpos=field.lastIndexOf(".");
            if (apos<1||dotpos-apos<2){
                $('.email').css('border-color','red');
                $('.email').css('tooltip','its a ');
                //return false;
            }
            else {
                return true;
            }
        }
    }


})
