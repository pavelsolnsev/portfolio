"use strict";
$(function () {
  $("[data-target]").on("click", function (e) {
    var obj = $(this),
      target = $('[data-key="' + obj.attr("data-target") + '"]'),
      headerHeight = $(".head").outerHeight() + 20,
      topValue;
    if (!target.length) {
      topValue = 0;
    } else {
      topValue = target.offset().top - headerHeight;
    }
    topValue = Math.floor(topValue);
    $("html, body")
      .stop()
      .animate({
        scrollTop: topValue + "px",
      });
  });
});
