// Import the Bootstrap bundle
//
// This includes Popper and all of Bootstrap's JS plugins.

import "../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js";


//
// Place any custom JS here
//

/*
$(function(){
  var boxes = $('.box'),
      $window = $(window);
  $window.scroll(function(){
    var scrollTop = $window.scrollTop();
    boxes.each(function(){
      var $this = $(this),
          //scrollspeed = parseInt($this.data('scroll-speed')),
          scrollspeed = 6,
          val = - scrollTop / scrollspeed;
console.log(val);
          $this.css('transform', 'translateY(' + val + 'px)');
      if ($this.isInViewport()) {
      	
      }
    });
  });

	$.fn.isInViewport = function () {
    let elementTop = $(this).offset().top;
    let elementBottom = elementTop + $(this).outerHeight();

    let viewportTop = $(window).scrollTop();
    let viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
	};  
})
*/
$(function(){
  var boxes = $('.box'),
      $window = $(window);

  // set initial offset
  boxes.each(function(){
  	var $this = $(this);
  	console.log(($(this).offset().top - $(window).height()));
  	$this.css('transform', 'translateY(' + ($(this).offset().top - $(window).height()) + 'px)');
  });

  $window.scroll(function(){
    var scrollTop = $window.scrollTop();
    boxes.each(function(){
      var $this = $(this),
          //scrollspeed = parseInt($this.data('scroll-speed')),
          scrollspeed = 6,
          val = - scrollTop / scrollspeed;
          $this.css('transform', 'translateY(' + val + 'px)');
      if ($this.isInViewport()) {
      	
      }
    });
  });

	$.fn.isInViewport = function () {
    let elementTop = $(this).offset().top;
    let elementBottom = elementTop + $(this).outerHeight();

    let viewportTop = $(window).scrollTop();
    let viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
	};  
})
