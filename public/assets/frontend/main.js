$(document).ready(function () {
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
