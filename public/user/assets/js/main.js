// BACK TOP
const btn = $("#button");
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

// SHOW MODAL
const btnShowTest = document.querySelector(".btn-show-test");
const modal = document.querySelector(".modal-custom");
const modalContainer = document.querySelector(".modal-custom-container");
const btnClose = document.querySelector(".modal-custom-close");

function showModal() {
    modal.classList.add("open");
}
function hideModal() {
    modal.classList.remove("open");
}
btnShowTest.onclick = function () {
    showModal();
};
btnClose.onclick = function () {
    hideModal();
};
modal.onclick = function () {
    modal.classList.remove("open");
};
modalContainer.onclick = function (event) {
    event.stopPropagation();
};

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
// SWIPER BUSINESS FREE COURSE
const swiperBusinessCourse = new Swiper(".list-business-courses", {
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
//DARK MODE
const options = {
    bottom: "64px", // default: '32px'
    right: "unset", // default: '32px'
    left: "32px", // default: 'unset'
    time: "0.5s", // default: '0.3s'
    mixColor: "#fff", // default: '#fff'
    backgroundColor: "#fff", // default: '#fff'
    buttonColorDark: "#100f2c", // default: '#100f2c'
    buttonColorLight: "#fff", // default: '#fff'
    saveInCookies: true, // default: true,
    label: "🌓", // default: ''
    autoMatchOsTheme: true, // default: true
};
const darkmode = new Darkmode(options);
darkmode.showWidget();
