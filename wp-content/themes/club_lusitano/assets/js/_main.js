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
	  
	  $(document).ready(function() {
		  $('select').niceSelect();
		  if($('#post_sorting').length > 0){
			  $('#post_sorting').bind('change', function () { // bind change event to select
				var sorting = $(this).val(); // get selected value
				if (sorting !== '') { // require a URL
					window.location = full_url+'?sort='+sorting; // redirect
				}
				return false;
			  });
		  }
	  });
    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
	  function initBannerSlider(){
		  if($('.home_banner_container').length > 0){
			  $('.home_banner_container').slick({
				  dots: true,
				  infinite: true,
				  autoplay: true,
				  autoplaySpeed: 5000,
				  speed: 300,
				  slidesToShow: 1,
				  cssEase: 'linear',
				  adaptiveHeight: true
			  });	
		  }
	  }
	  
	  $(document).ready(function(){
		initBannerSlider();
	  });
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
			  $('.hover_text').css({'bottom':'0'});
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
					gutter: 20.25
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
  single_facility:{
	init: function(){
		function initSlider(){
			if($('.facilities_slider').length > 0 && $(window).outerWidth() >= 992){
				//console.log('initSlider');
				$('.facilities_slider').slick({
				  dots: false,
				  infinite: false,
				  autoplay: false,
				  //autoplaySpeed: 5000,
				  speed: 300,
				  slidesToShow: 1,
				  fade: true,
				  cssEase: 'linear',
				  adaptiveHeight: true
				});	
				
				$('.facilities_gallery_container a').eq(0).addClass('active');
				
				$('.facilities_gallery_container a').unbind('click');
				$('.facilities_gallery_container a').click(function(){
					$('.facilities_gallery_container a').removeClass('active');
					$('.facilities_slider').slick('slickGoTo', $('.facilities_gallery_container a').index($(this)));
					$(this).addClass('active');
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
			
			$('.overlay_link').unbind('click');
			$('.overlay_link').click(function(e){
				e.preventDefault();
				
				var target = $(this).attr('href');
				var target_buffer = $(target).outerHeight()+ 50;
				
				$('html, body').animate({
                    scrollTop: $(target).offset().top - target_buffer
                }, 1000);
			});
		}
		
		$(document).ready(function(){
			initTimelineText();
		});
		
		$(window).resize(function(){
			initTimelineText();
		});
	}
  },
  page_template_template_contact:{
	init: function(){
		/*
		*  new_map
		*
		*  This function will render a Google Map onto the selected jQuery element
		*
		*  @type	function
		*  @date	8/11/2013
		*  @since	4.3.0
		*
		*  @param	$el (jQuery element)
		*  @return	n/a
		*/
		
		function new_map( $el ) {
			
			// var
			var $markers = $el.find('.marker');
			
			
			// vars
			var args = {
				zoom		: 16,
				center		: new google.maps.LatLng(0, 0),
				mapTypeId	: google.maps.MapTypeId.ROADMAP
			};
			
			
			// create map	        	
			var map = new google.maps.Map( $el[0], args);
			
			
			// add a markers reference
			map.markers = [];
			
			
			// add markers
			$markers.each(function(){
				
				add_marker( $(this), map );
				
			});
			
			
			// center map
			center_map( map );
			
			
			// return
			return map;
			
		}	
		
		/*
		*  add_marker
		*
		*  This function will add a marker to the selected Google Map
		*
		*  @type	function
		*  @date	8/11/2013
		*  @since	4.3.0
		*
		*  @param	$marker (jQuery element)
		*  @param	map (Google Map object)
		*  @return	n/a
		*/
		
		function add_marker( $marker, map ) {
		
			// var
			var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
		
			// create marker
			var marker = new google.maps.Marker({
				position	: latlng,
				map			: map
			});
		
			// add to array
			map.markers.push( marker );
		
			// if marker contains HTML, add it to an infoWindow
			if( $marker.html() )
			{
				// create info window
				var infowindow = new google.maps.InfoWindow({
					content		: $marker.html()
				});
		
				// show info window when marker is clicked
				google.maps.event.addListener(marker, 'click', function() {
		
					infowindow.open( map, marker );
		
				});
			}
		
		}
		
		/*
		*  center_map
		*
		*  This function will center the map, showing all markers attached to this map
		*
		*  @type	function
		*  @date	8/11/2013
		*  @since	4.3.0
		*
		*  @param	map (Google Map object)
		*  @return	n/a
		*/
		
		function center_map( map ) {
		
			// vars
			var bounds = new google.maps.LatLngBounds();
		
			// loop through all markers and create bounds
			$.each( map.markers, function( i, marker ){
		
				var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
		
				bounds.extend( latlng );
		
			});
		
			// only 1 marker?
			if( map.markers.length === 1 )
			{
				// set center of map
				map.setCenter( bounds.getCenter() );
				map.setZoom( 16 );
			}
			else
			{
				// fit to bounds
				map.fitBounds( bounds );
			}
		
		}
		
		var map = null;
		$(document).ready(function(){
		
			$('.acf-map').each(function(){
		
				// create map
				map = new_map( $(this) );
		
			});
		
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
