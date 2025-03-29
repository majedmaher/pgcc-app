$(document).ready(function () {
    let counters = [];

    for (let index = 0; index < $(".counter-item").length; index++) {
        counters.push(["#counter-item-" + index, 0]);
    }

    var counter = (function () {
        var executed = false;
        return function () {
            if (!executed) {
                executed = true;
                function increaseCounter() {
                    setInterval(increase, 100);
                }
                function increase() {
                    counters.forEach((counter) => {
                        let currentCount = parseInt(
                            $(counter[0]).attr("data-count")
                        );
                        if (currentCount != counter[1]) {
                            counter[1]++;

                            $(counter[0]).text(counter[1]);
                        } else {
                            return;
                        }
                        // for (let index = 0; index < currentCount; index++) {
                        //     $(counter).text(count);
                        // }
                    });
                }

                increaseCounter();
            }
        };
    })();

    $(".menu-box").click(function (e) {
        e.preventDefault();
        $(this).toggleClass("active");
        $(".nav-content").toggleClass("active", $(this).hasClass("active"));
        $(".nav-actions").toggleClass("active", $(this).hasClass("active"));
    });

    $(window).scroll(function () {
        let aboutTop = $("#about-us").first().position().top;
        let currentTop = $(window).scrollTop();

        if (currentTop >= aboutTop) {
            $(".nav-header").addClass("nav-header-scroll");
        } else {
            $(".nav-header").removeClass("nav-header-scroll");
        }

        if (currentTop > 240) {
            counter();
        }
    });

    $(".back-to-top").click(function (e) {
        e.preventDefault();
        $(window).scrollTop(0);
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

    $(".contact .contact-form .form form").on("submit", function (event) {
        event.preventDefault();
        $.ajax({
            url: "contact/store",
            method: "POST",
            data: new FormData(this),
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function (message) {
                console.log(message);
                Toastify({
                    text: message,
                    duration: 3000,
                    destination: "https://github.com/majedmaher",
                    newWindow: true,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "right", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        background:
                            "linear-gradient(to right, #00b09b, #96c93d)",
                    },
                    onClick: function () {}, // Callback after click
                }).showToast();
            },
        });
    });
});
