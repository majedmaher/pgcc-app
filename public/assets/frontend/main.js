$(document).ready(function () {
    $(window).scroll(function () {
        let aboutTop = $("#about-us").first().position().top;
        let currentTop = $(window).scrollTop();

        if (currentTop >= aboutTop) {
            $(".nav-header").addClass("nav-header-scroll");
        } else {
            $(".nav-header").removeClass("nav-header-scroll");
        }
    });

    aa = $("body").hasClass("ltr");
    $(".owl-carousel").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        lazyLoad: true,
        rtl: true,
        margin: 10,
        // nav: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 4,
            },
        },
    });

    const d = new Date();
    let year = d.getUTCFullYear();
    $("#copyright").text(year);
});
