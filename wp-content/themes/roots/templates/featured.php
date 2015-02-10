<section>
  <h2 class="section-header">Featured</h2>

  <?php
    $page_slug = $post->post_name;

    $args = array(
      'post_type' => 'video',
      'order' => 'ASC',
      'tax_query' => array(
        array(
          'taxonomy'  => 'video-category',
          'field'   => 'name',
          'terms'   => 'Featured',
        ),
      ),
      'posts_per_page' => 100,
    );

    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) :
      echo '<div class="row">';
      while ( $loop->have_posts() ) : $loop->the_post();
        $link = get_the_permalink();
        $title = get_the_title();
        $post_date = get_the_date();
        $post_excerpt_quote = get_field('quote');
        $post_runtime = get_field('run_time');
        $post_views = '[post_view]';

        $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
        $featured_image = $featured_image[0];

        echo '<div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">';
        echo '<a href="' . $link . '" title="' . $title . '">
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
        echo          '<div class="text-quote">' . $post_excerpt_quote . '</div>';
        echo          '<div class="text-excerpt">' . $post_excerpt . '</div>
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
      endwhile;
      echo '</div>';
    endif;
  ?>

</section>
