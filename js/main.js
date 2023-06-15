! function (a) {
    "use strict";
    var i = a(window);

    function o() {
        var e, o;
        e = a(".full-screen"), o = i.height(), e.css("min-height", o), e = a("header").height(), o = a(".screen-height"), e = i.height() - e, o.css("height", e)
    }
    a("#preloader").fadeOut("normall", function () {
        a(this).remove()
    }), i.on("scroll", function () {
        var e = i.scrollTop(),
            o = a(".navbar-brand img"),
            t = a(".navbar-brand.logodefault img");
        e <= 500 ? (a("header").removeClass("scrollHeader").addClass("fixedHeader"), o.attr("src", "img/logos/logo.png")) : (a("header").removeClass("fixedHeader").addClass("scrollHeader"), o.attr("src", "img/logos/logo.png")), t.attr("src", "img/logos/logo.png")
    }), i.on("scroll", function () {
        500 < a(this).scrollTop() ? a(".scroll-to-top").fadeIn(400) : a(".scroll-to-top").fadeOut(400)
    }), a(".scroll-to-top").on("click", function (e) {
        e.preventDefault(), a("html, body").animate({
            scrollTop: 0
        }, 600)
    }), a(".parallax,.bg-img").each(function (e) {
        a(this).attr("data-background") && a(this).css("background-image", "url(" + a(this).data("background") + ")")
    }), a(".story-video").magnificPopup({
        delegate: ".video",
        type: "iframe"
    }), a(".popup-social-video").magnificPopup({
        disableOn: 700,
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: !1,
        fixedContentPos: !1
    }), a(".source-modal").magnificPopup({
        type: "inline",
        mainClass: "mfp-fade",
        removalDelay: 160
    }), 0 !== a(".copy-clipboard").length && (new ClipboardJS(".copy-clipboard"), a(".copy-clipboard").on("click", function () {
        var e = a(this);
        e.text();
        e.text("Copied"), setTimeout(function () {
            e.text("Copy")
        }, 2e3)
    })), i.resize(function (e) {
        setTimeout(function () {
            o()
        }, 500), e.preventDefault()
    }), new WOW({
        boxClass: "wow",
        animateClass: "animated",
        offset: 0,
        mobile: !1,
        live: !0
    }).init(), a(".text-animation").waypoint(function () {
        a(".text-animation.animated").textillate()
    }, {
        offset: "100%"
    }), a(".page-title-section .text-animation").textillate(), o(), a(document).ready(function () {
        a(".portfolio-carousel").owlCarousel({
            loop: !0,
            responsiveClass: !0,
            autoplay: !0,
            autoplayTimeout: 3e3,
            smartSpeed: 1500,
            nav: !1,
            center: !1,
            autoplayHoverPause: !0,
            dots: !1,
            margin: 30,
            navText: ["<i class='ti-angle-left'></i>", "<i class='ti-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                1200: {
                    items: 4
                },
                1400: {
                    items: 5
                }
            }
        }), a(".portfolio2-carousel").owlCarousel({
            loop: !0,
            responsiveClass: !0,
            autoplay: !0,
            autoplayTimeout: 3e3,
            smartSpeed: 1500,
            nav: !1,
            center: !1,
            dots: !0,
            margin: 30,
            navText: ["<i class='ti-angle-left'></i>", "<i class='ti-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                    dots: !1
                },
                767: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 3
                }
            }
        }), a(".clientele-carousel").owlCarousel({
            loop: !0,
            responsiveClass: !0,
            autoplay: !0,
            autoplayTimeout: 3e3,
            smartSpeed: 1500,
            nav: !1,
            center: !1,
            autoplayHoverPause: !0,
            dots: !1,
            margin: 20,
            navText: ["<i class='ti-angle-left'></i>", "<i class='ti-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                1200: {
                    items: 6
                },
                1400: {
                    items: 6
                }
            }
        }),
         a(".owl-carousel").owlCarousel({
            items: 1,
            loop: !0,
            dots: !1,
            margin: 0,
            autoplay: !0,
            smartSpeed: 500
        }), a(".current-year").text((new Date).getFullYear()), a(".countup").counterUp({
            delay: 25,
            time: 2e3
        }), a(".countdown").countdown({
            date: "01 Dec 2024 00:01:00",
            format: "on"
        })
    })
    //  i.on("load", function () {
    //     a(".portfolio-gallery").lightGallery(), a(".portfolio-link").on("click", e => {
    //         e.stopPropagation()
    //     }), i.stellar()
    // })
}(jQuery);