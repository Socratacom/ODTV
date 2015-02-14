<?php
/**
 * Utility functions
 */
function is_element_empty($element) {
  $element = trim($element);
  return !empty($element);
}

// Tell WordPress to use searchform.php from the templates/ directory
function roots_get_search_form() {
  $form = '';
    locate_template('/templates/searchform.php', true, false);
  return $form;
}
add_filter('get_search_form', 'roots_get_search_form');

/**
 * Add page slug to body_class() classes if it doesn't exist
 */
function roots_body_class($classes) {
  // Add post/page slug
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }
  return $classes;
}
add_filter('body_class', 'roots_body_class');

// stop gravity form from auto scrolling to anchor position
add_filter("gform_confirmation_anchor", create_function("","return false;"));

// search only video post type
function mySearchFilter($query) {
  $post_type = $_GET['type'];
  if (!$post_type) {
    $post_type = 'any';
  }
    if ($query->is_search) {
        $query->set('post_type', $post_type);
    };
    return $query;
};

add_filter('pre_get_posts','mySearchFilter');
