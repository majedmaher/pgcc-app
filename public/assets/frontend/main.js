// $(window).on("load", function () {
$(document).ready(function () {
    let url = window.location.href.split("#");
    if (url.length > 1) {
        var position = $("#" + url[1])
            .first()
            .position().top;

        $(window).scrollTop(position);
    }

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

    var about = $("#about-us");

    if (about.length) {
        var aboutTop = about.position().top;
    } else {
        var aboutTop = $("#projects").position().top;
    }

    $(window).scroll(function () {
        let currentTop = $(window).scrollTop();

        if (currentTop >= aboutTop) {
            $(".nav-header").addClass("nav-header-scroll");
            $(".back-to-top").removeClass("d-none");
        } else {
            $(".nav-header").removeClass("nav-header-scroll");
            $(".back-to-top").addClass("d-none");
        }

        if (currentTop > 240) {
            counter();
        }
    });

    $(".back-to-top").click(function (e) {
        e.preventDefault();
        $(window).scrollTop(0);
    });

    const d = new Date();
    let year = d.getUTCFullYear();
    $("#copyright").text(year);
});
