jQuery("document").ready(function ($) {
    var menuBtn = $(".menu-icon"),
        menu = $("ul");

    menuBtn.click(function () {
        if (menu.hasClass("show")) {
            menu.removeClass("show");
        } else {
            menu.addClass("show");
        }
    });
});

$(".tarjeta").hover(function () {
    var light = $(".ligth-tarjeta");
    if (light.css("opacity") == 1) {
        light.css({
            opacity: 0.7,
        });
    } else {
        light.css({
            opacity: 1,
        });
    }
});
