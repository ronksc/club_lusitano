<?php

// mainpaage banner
add_action('init', 'facility_register');
function facility_register() {
  $labels = array(
      'name' => _x('Facility', 'post type general name'),
      'singular_name' => _x('Facility', 'post type singular name'),
      'add_new' => _x('Add facility', 'rep'),
      'add_new_item' => __('Add facility'),
      'edit_item' => __('Edit facility'),
      'new_item' => __('New facility'),
      'view_item' => __('View facility'),
      'search_items' => __('Search facility'),
      'not_found' =>  __('Nothing found'),
      'not_found_in_trash' => __('Nothing found in Trash'),
      'parent_item_colon' => ''
  );
  $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'menu_position' => 20,
      'supports'      => array( 'title', 'editor', 'page-attributes'),
  );
  register_post_type( 'facility' , $args );
}
?>