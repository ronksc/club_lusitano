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
			  
			  $('.heritage_image').css({'height':containerHeight});
			  $('.hover_text_content_wrapper').css({'height':0});
			  //$('.heritage_item').css({'height':containerHeight});
			  
			  $('.hover_text').css({'bottom':$('#overlay').outerHeight()});
			  
			  $('.heritage_item').unbind('mouseenter');	
			  $('.heritage_item').on('mouseenter',function(){
				  if($(window).width() >= 992){
					  $(this).find('.hover_text').addClass('open');
					  var index = $('.heritage_item').index($(this));
					  var contentHeight = $(this).find('.hover_text_content').outerHeight();
					  
					  $(this).find('.hover_text_content_wrapper').animate({height:contentHeight}, 300);
				  }
              });
			  
			  $('.heritage_item').unbind('mouseleave');
			  $('.heritage_item').on('mouseleave',function(){
				  if($(window).width() >= 992){
					  $(this).find('.hover_text').removeClass('open');
					  var index = $('.heritage_item').index($(this));
					  
					  $(this).find('.hover_text_content_wrapper').animate({height:0}, 300);
				  }
              });
		  }else{
			  $('.heritage_image').css({'height':'auto'});
			  $('.hover_text_content_wrapper').css({'height':'auto'});
		  }
	  }
	  
	  $(document).ready(function(e) {
		 initHeritageItemHeight();
      });
	  
	  $(window).resize(function(){
		 initHeritageItemHeight();
	  });
    }
  },
  page_template_template_facilities: {
	init: function(){
		$(document).ready(function(){
			var container = $('#facilities');
	 
			container.isotope({
				itemSelector: '.facilities_item',
				layoutMode: 'moduloColumns',
				moduloColumns: {
					columnWidth: container.find('.item').not('.wide').get(0),
					gutter: 20
				}
			});
			 
			container.imagesLoaded().progress( function() {
				console.log('images loaded');
				container.isotope('layout');
			});						   
		});
		
		$(window).resize(function(){
			//console.log($('.container').outerWidth());
			console.log($(window).outerWidth());
		});
	}
  },
  page_template_template_facilities_content:{
	init: function(){
		function initSlider(){
			if($('.facilities_slider').length > 0 && $(window).outerWidth() >= 992){
				console.log('initSlider');
				$('.facilities_slider').slick({
				  dots: false,
				  infinite: false,
				  autoplay: true,
				  autoplaySpeed: 5000,
				  speed: 300,
				  slidesToShow: 1,
				  fade: true,
				  cssEase: 'linear'
				  //adaptiveHeight: true
				});	
				
				$('.facilities_gallery_container a').unbind('click');
				$('.facilities_gallery_container a').click(function(){
					$('.facilities_slider').slick('slickGoTo', $('.facilities_gallery_container a').index($(this)));
				});
			}else{
				if($('.facilities_slider').hasClass('slick-initialized')){
					$('.facilities_slider').slick('unslick');
				}
			}
		}
		
		$(document).ready(function(){
			initSlider();			   
		});	
		
		$(window).resize(function(){
			initSlider();						  
		});
	}
  },
  page_template_template_history:{
	init: function(){
		function initTimelineText(){
			var maxHeight = 0;
			var timeline_text_count = 0;
			
			$('.timeline_text').each(function(){
				timeline_text_count++;
				var selfHeight = $(this).outerHeight();
				if(selfHeight > maxHeight){
					maxHeight = selfHeight;	
				}
				
				if(timeline_text_count === $('.timeline_text').length){
					$('.timeline_text_wrapper').css({'height':maxHeight});	
					$('.timeline_text').addClass('verticle_align');
				}
			});
		}
		
		$(document).ready(function(){
			initTimelineText();
		});
		
		$(window).resize(function(){
			initTimelineText();
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
