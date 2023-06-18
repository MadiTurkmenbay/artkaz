// new WOW().init();

function headerEvent() {
    $('.search--btn').on('click', function(){
        $('.search').addClass('open');
        $('.search .close').on('click', function(){
            $(this).parent().removeClass('open');
            return false;
        });
        return false;
    });

    $('.langs__btn').on('click', function(){
        $('.langs').toggleClass('open');
        return false;
    });

    var width = $(window).width();
    $('.submenu > a').on('click', function(){
        if (width < 992) {
            $(this).next().slideToggle(250).parent().toggleClass('active');
            $('.submenu > a').not(this).siblings('ul:visible').slideUp().parent().removeClass('active');
            return false;
        }
    });
    $('.submenu > a').on('mouseover', function(){
        if (width > 991) {
            $(this).next().slideDown(250).parent().addClass('active');
            $('.submenu > a').not(this).siblings('ul:visible').slideUp().parent().removeClass('active');
            return false;
        }
    });
    $('.submenu').on('mouseleave', function(){
        $(this).children('ul').slideUp(250).parent().removeClass('active');
    });

    $('.nav--btn').on('click', function(){
        if ($('.nav').is(':visible')) {
            $('.nav').slideUp();
            $(this).removeClass('open');
        } else {
            $('.nav').slideDown();
            $(this).addClass('open');
        }
        return false;
    });
}

function mainSliders() {
    $('.slider').slick({
        autoplay: true,
        speed: 1200,
        arrows: false,
        dots: true
    });

    $('.reviews__slider').slick({
        autoplay: true
    });

    $('.cat--unit__for').slick({
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        fade: true,
        asNavFor: '.cat--unit__nav'
    });
    $('.cat--unit__nav').slick({
        slidesToShow: 3,
        asNavFor: '.cat--unit__for',
        focusOnSelect: true
    });
}

function FileUpload(el){
    var filename = el.val().replace(/.*\\/, "");
    el.next('.filename').html(filename);
    $('.file--upload').append('<label><input type="file" name="doc[]"><span class="filename">+ Добавить еще работы</span></label>');
}

$(document).ready(function(){
    mainSliders();
    headerEvent();
});
$(function(){

    $('.cat--inside__col__img').fancybox({
        beforeShow : function(){
         $(".fancybox-inner").addClass("gallery--modal");
        }
    });

    $('.filter__col a').on('click', function(){
        $(this).parent('li').addClass('active').not(this).siblings().removeClass('active');

        if ( $('.filter [name="ReGroup"]').is('.active') ) {
            $('.cat--inside').addClass('ReGroup').css('opacity', '0');
            setTimeout(function(){
                $('.cat--inside').css('opacity', '1');
            }, 500);
        } else {
            $('.cat--inside').removeClass('ReGroup').css('opacity', '0');
            setTimeout(function(){
                $('.cat--inside').css('opacity', '1');
            }, 500);
        }
        return false;
    });

    $(document).on('change',".file--upload input[type=file]",function(){
        FileUpload($(this));
    });


    $('.contacts__col__phone .arrow').on('click', function(){
        $(this).parent().toggleClass('open');
        return false;
    });

    $('input[name="tel"]').inputmask('+7 (999) 999-99-99');
});
