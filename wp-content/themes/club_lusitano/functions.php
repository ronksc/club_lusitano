<?php
/**
 * Roots includes
 *
 * The $roots_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/roots/pull/1042
 */
$roots_includes = array(
  'lib/utils.php',           // Utility functions
  'lib/init.php',            // Initial theme setup and constants
  'lib/wrapper.php',         // Theme wrapper class
  'lib/sidebar.php',         // Sidebar class
  'lib/config.php',          // Configuration
  'lib/activation.php',      // Theme activation
  'lib/titles.php',          // Page titles
  'lib/nav.php',             // Custom nav modifications
  'lib/gallery.php',         // Custom [gallery] modifications
  'lib/scripts.php',         // Scripts and stylesheets
  'lib/extras.php',          // Custom functions
  'lib/post-types.php',          // Register Post Types
);

foreach ($roots_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'roots'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


function new_excerpt_more($more) {
       global $post;
	return '<a class="btn_readmore" href="'. get_permalink($post->ID) . '">...More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyCpGcV1lNRwqsSS3ixl-VK9pKCgME_kEaI';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');