$(document).ready(function () {
    $('.btn__service').click(function () {
        $('.popup_hamam').css('display', 'block');
        $('.popup_sauna').css('display', 'block');
        $('.popup_fitobochka').css('display', 'block');
    });

    $('.close__popup').click(function () {
        $('.popup_hamam').css('display', 'none');
        $('.popup_sauna').css('display', 'none');
        $('.popup_fitobochka').css('display', 'none');
    });
});

$(document).ready(function () {
    $(".btn__service-reserve").click(function (e) {
        e.preventDefault();
        var form_data = $('#popup_service').serialize(); //собераем все данные из формы
        $.ajax({
            type: "POST", //Метод отправки
            url: "/wp-content/themes/poseidon/mail_service.php", //путь до php фаила отправителя
            data: form_data,
            processData: false,
            success: function () {
                $('#popup_service')[0].reset();
                $('.popup_hamam').css('display', 'none');
                $('.popup_sauna').css('display', 'none');
                $('.popup_fitobochka').css('display', 'none');
            }
        });
    });
});

$(document).ready(function () {
    $('.service_slider .owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        dots: false,
        arrows: true,
        autoplay: true,
        smartSpeed: 2000,
        autoplayTimeout: 8000,
    });

    $('.room_slider .owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        dots: false,
        arrows: true,
        autoplay: true,
        smartSpeed: 2000,
        autoplayTimeout: 8000,
    });
});

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 400) {
            $('#to-top').fadeIn();
        } else {
            $('#to-top').fadeOut();
        }
    });

    $('#to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1000);
        return false;
    });

    $('#to_services').click(function () {
        $('html, body').animate({scrollTop: $('#services').offset().top - 100}, 2000);
        return false;
    });
});
