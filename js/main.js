// Import the Bootstrap bundle
//
// This includes Popper and all of Bootstrap's JS plugins.

import "../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js";


//
// Place any custom JS here
//

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

$('.tab-panel .tabs > li').hover( function () {
  $('.tab-panel .tabs > li').removeClass('active');
  $(this).addClass('active');
})

$('.hot-topic .close').click( function () {
  $('.hot-topic').fadeOut();
  $('.hot-topic-wrapper .open').fadeIn();
});

$('.hot-topic-wrapper .open').click( function() {
  $('.hot-topic-wrapper .open').fadeOut();
  $('.hot-topic').fadeIn();
});

$.fn.isInViewport = function() {
  var elementTop = $(this).offset().top;
  var elementBottom = elementTop + $(this).outerHeight();

  var viewportTop = $(window).scrollTop();
  var viewportBottom = viewportTop + $(window).height();

  return elementBottom > viewportTop && elementTop < viewportBottom;
};

$(window).on('resize scroll', function() {
  $('.container').each(function() {
    if ($(this).isInViewport()) {
      $(this).css('opacity',1);
    } else {
      $(this).css('opacity',0);
    }
  });
});