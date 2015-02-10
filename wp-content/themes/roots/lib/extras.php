<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');


// Initialize custom post types
add_action('init', 'register_custom_posts_init');

function register_custom_posts_init() {
  // Register Video Post

  $video_labels = array(
      'name'               => 'Video Post',
      'singular_name'      => 'Video Post',
      'menu_name'          => 'Video Post'
  );

  $video_args = array(
      'labels'             => $video_labels,
      'public'             => true,
      'rewrite'            => array( 'slug' => 'video' ),
      'menu_icon'          => 'dashicons-video-alt3',
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => true,
      'taxonomies'         => array( 'video-category', 'video-tag' ),
      'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'comments' )
  );
  register_post_type('video', $video_args);

  // Register Video Post

  $speaker_labels = array(
      'name'               => 'Speaker',
      'singular_name'      => 'Speaker',
      'menu_name'          => 'Speaker'
  );

  $speaker_args = array(
      'labels'             => $speaker_labels,
      'public'             => true,
      'rewrite'            => array( 'slug' => 'speaker' ),
      'menu_icon'          => 'dashicons-format-status',
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => true,
      'taxonomies'         => array( 'speaker-category', 'speaker-tag' ),
      'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'comments' )
  );
  register_post_type('speaker', $speaker_args);
}

add_action( 'init', 'build_taxonomies', 0 );

function build_taxonomies() {
  register_taxonomy( 'video-category', 'video', array( 'hierarchical' => true, 'label' => 'Categories', 'query_var' => true, 'rewrite' => true ) );
}
