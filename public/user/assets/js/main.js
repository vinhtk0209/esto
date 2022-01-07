// BACK TOP
const btnBackTop = $("#btnBackTop");
$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btnBackTop.addClass("show");
    } else {
        btnBackTop.removeClass("show");
    }
});
btnBackTop.on("click", function () {
    $("html, body").animate({ scrollTop: 0 }, "300");
});
// //TABS
// $(".tabInfo").on("click", function (evt) {
//     evt.preventDefault();
//     $(this).toggleClass("activeTab");
//     $(".tab-content-info").removeClass("activeTab").addClass("activeTab");
// });

// LOADING EFFECT
$(window).on("load", function (event) {
    $("body").removeClass("preLoading");
    $(".load").delay(100).fadeOut("fast");
});

// SHOW MODAL

// TEST
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

//BUY CLASS
const btnBuyClass = document.querySelector(".btn-buy-class");
const modalClass = document.querySelector(".modal-custom-class");
const modalClassContainer = document.querySelector(
    ".modal-custom-class-container"
);
const btnCloseClass = document.querySelector(".btn-custom-class-close");
function showModalBuy() {
    modalClass.classList.add("open");
}
function hideModalBuy() {
    modalClass.classList.remove("open");
}
btnBuyClass.onclick = function () {
    showModalBuy();
};
btnCloseClass.onclick = function () {
    hideModalBuy();
};
modalClass.onclick = function () {
    modalClass.classList.remove("open");
};
modalClassContainer.onclick = function (event) {
    event.stopPropagation();
};

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
