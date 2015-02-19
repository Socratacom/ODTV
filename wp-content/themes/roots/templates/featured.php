<section>
  <a name="featured"></a>
  <h2 class="section-header">Featured</h2>

<input class="filter__search js-shuffle-search" type="search" placeholder="Search...">
  <?php
    $page_slug = $post->post_name;

    $args = array(
      'post_type' => 'video',
      'order' => 'DES',
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
      echo '<div class="row" id="vid_grid">';
      while ( $loop->have_posts() ) : $loop->the_post();
        $link = get_the_permalink();
        $title = get_the_title();
        $post_date = get_the_date();
        $post_excerpt_quote = get_field('quote');
        $post_excerpt = get_field('overlay_excerpt');
        $post_runtime = get_field('run_time');
        $post_views = '[post_view]';

        $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
        $featured_image = $featured_image[0];

        // field type post object
        $speaker = get_field('speaker');
        $speaker_name = $speaker->post_title;

        echo '<div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 item">';
        echo '<a href="' . $link . '" title="' . $title . '" class="videotile-link" data-backdrop="static">
                <div class="videotile">
                  <div class="videotile-content">
                    <div class="content-img">
                      <div class="img-container">';
        echo           '<img src="' . $featured_image . '" class="img-responsive" alt="' . $title . '">
                        <div class="container-icon"><i class="icon-eye"></i></div>
                      </div>
                      <div class="img-overlay">
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
                    <div class="content-text">';
        echo          '<div class="text-title"><p>' . $title . '</p></div>';
        echo          '<div class="text-postdate"><p>' . $speaker_name . '</p></div>
                    </div>
                  </div>
                </div>
              </a>
              </div>';
      endwhile;
    endif;
  ?>
