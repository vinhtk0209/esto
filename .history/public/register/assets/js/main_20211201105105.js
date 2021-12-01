// LOADING EFFECT
$(window).on("load", function (event) {
  $("body").removeClass("preLoading");
  $(".load").delay(200).fadeOut("fast");
});

(function ($) {
  $(".toggle-password").click(function () {
    $(this).toggleClass("zmdi-eye zmdi-eye-off");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });
})(jQuery);
