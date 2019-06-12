/*global $, jQuery, alert*/

//scrolling animation

$(document).on('click', '.navscroll a', function (event) {
    "use strict";
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 60
    }, 500);

});

//changing color of menu elements when scrolling

$(function () {
    "use strict";
    $(window).bind('scroll', function () {
        $('.anchor').each(function () {
            var anchored = $(this).attr("id"),
                position = $(this).position().top - $(window).scrollTop(),
                targetOffset = $(this).offset().top - 61;
          
          

            if ($(window).scrollTop() > targetOffset) {
                $('ul.navscroll').find('a').removeClass("active");
                $('ul.navscroll').find(('*[data-anchor="' + anchored + '"]')).addClass("active");
            }
        });
    });
});