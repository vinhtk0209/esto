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
