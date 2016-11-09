/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages
    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  },
  page_template_template_cultural_heritage: {
    init: function() {
      // JavaScript to be fired on the about us page
	  function initHeritageItemHeight(){
		  if($(window).width() >= 992){
			  var headerHeight, footerHeight, containerHeight;
			  
			  headerHeight = $('.navbar-default').outerHeight();
			  footerHeight = $('.content-info').outerHeight();
			  
			  containerHeight = $(window).outerHeight() - headerHeight - footerHeight;
			  
			  $('.heritage_item').css({'height':containerHeight});
			  
			  $('.hover_text').css({'bottom':$('.overlay_container').outerHeight()});
			  
			  $('.heritage_item').unbind('mouseenter');			  
			  $('.heritage_item').on('mouseenter',function(){
				  $(this).find('.hover_text').addClass('open');
				  console.log('number '+ $('.heritage_item').index($(this))+ ' is on hover');
				  var index = $('.heritage_item').index($(this));
				  var contentHeight = $(this).find('.hover_text_content').outerHeight();
				  
				  
				  $(this).find('.hover_text_content_wrapper').animate({height:contentHeight}, 300);
              });
			  
			  $('.heritage_item').unbind('mouseleave');
			  $('.heritage_item').on('mouseleave',function(){
				  $(this).find('.hover_text').removeClass('open');
				  var index = $('.heritage_item').index($(this));
				  
				  
				  $(this).find('.hover_text_content_wrapper').animate({height:0}, 300);
              });
		  }else{
			  return;  
		  }
	  }
	  
	  $(document).ready(function(e) {
		 initHeritageItemHeight();
      });
	  
	  $(window).resize(function(){
		 initHeritageItemHeight();
	  });
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
