// BACK TOP
var btn = $("#button");
$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.addClass("show");
    } else {
        btn.removeClass("show");
    }
});
btn.on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "300");
});

// LOADING EFFECT
$(window).on("load", function (event) {
    $("body").removeClass("preLoading");
    $(".load").delay(100).fadeOut("fast");
});

//SWIPER BANNER
const swiperBanner = new Swiper(".slide-category", {
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
});

// SWIPER SECTION FREE COURSE
const swiperFreeCourse = new Swiper(".list-free-courses", {
    slidesPerView: 4,
    spaceBetween: 20,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
// SWIPER SECTION RELATED COURSE
const swiperRelatedCourse = new Swiper(".list-related-courses", {
    slidesPerView: 3,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
