<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
<?php endif; ?>

  <?php //get_template_part('templates/content', get_post_format()); ?>

  <?php

    global $query_string;

    $query_args = explode("&", $query_string);
    $search_query = array();

    foreach($query_args as $key => $string) {
      $query_split = explode("=", $string);
      $search_query[$query_split[0]] = urldecode($query_split[1]);
    }

    $search = new WP_Query($search_query);

    if ( $search->have_posts() ) :
      while ( $search->have_posts() ) : $search->the_post();

        if('video' === $post->post_type) {


        $link = get_the_permalink();
        $title = get_the_title();
        $post_date = get_the_date();
        $post_excerpt_quote = get_field('quote');
        $post_excerpt = get_field('overlay_excerpt');
        $post_runtime = get_field('run_time');
        $post_views = '[post_view]';

        $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
        $featured_image = $featured_image[0];

        echo '<div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">';
        echo '<a href="' . $link . '" title="' . $title . '" class="videotile-link" data-backdrop="static">
                <div class="videotile">
                  <div class="videotile-content">
                    <div class="content-img">
                      <div class="img-container">';
        echo           '<img src="' . $featured_image . '" class="img-responsive" alt="' . $title . '">
                      </div>
                      <div class="img-overlay">
                        <i class="icon-play"></i>
                      </div>
                    </div>
                    <div class="content-text">';
        echo          '<div class="text-title"><p>' . $title . '</p></div>';
        echo          '<div class="text-postdate"><p>' . $post_date . '</p></div>
                    </div>
                  </div>
                  <div class="videotile-overlay clearfix">
                    <div class="overlay-text">';
        echo          '<div class="text-excerpt"><p>' . $post_excerpt . '</p></div>
                      <div class="text-icons">
                        <ul class="list list-inline">';
        echo              '<li><i class="icon-clock"></i> ' . $post_runtime . '<li>';
        echo              '<li><i class="icon-eye"></i> ' . do_shortcode($post_views) . '<li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              </div>';
            }
      endwhile;
    endif;
  ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
