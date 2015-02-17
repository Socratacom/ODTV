<?php while (have_posts()) : the_post();
  $video_quote = get_field('quote');
  $post_views = '[post_view]';
?>
  <article <?php post_class(); ?>>

    <div class="videoWrapper">
      <?php
        $videoUrl = get_field('youtube_link');
        echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $videoUrl . '?rel=0&amp;vq=hd1080" frameborder="0" allowfullscreen></iframe>';
      ?>
    </div>
    <div class="template-socialBar">
      <div class="socialBar-label">
        Share:
      </div>
      <div class="socialBar-addThis">
        <div class="addThis-widget">
          <!-- AddThis Button BEGIN -->
          <div class="addthis_toolbox addthis_64x64_style">
            <a class="addthis_button_email"></a>
            <a class="addthis_button_linkedin"></a>
            <a class="addthis_button_google_plusone_share"></a>
            <a class="addthis_button_twitter"></a>
            <a class="addthis_button_facebook"></a>
            <a class="addthis_button_expanded"></a>
          </div>
        </div>
      </div>
      <div class="socialBar-statsContainer">
        <div class="statsContainer-stats">
          <div class="stats-number">
            <p><?php echo do_shortcode($post_views); ?></p>
          </div>
          <div class="stats-label">
            <p>views</p>
          </div>
        </div>
        <div class="statsContainer-stats">
          <div class="stats-number">
            <p><?php comments_number( '0', '1', '%' ); ?></p>
          </div>
          <div class="stats-label">
            <p>comments</p>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>

    <div class="row">

      <div class="col-sm-8">
        <div class="entry-content">
          <div class="content-quote">
            <?php
              echo '<i class="icon-quotes-left"></i><p>' . $video_quote . '</p><i class="icon-quotes-right"></i>';
            ?>
          </div>
            <?php
              echo '<div class="content-body">';
              the_content();
              echo '</div>';
            ?>
          <?php comments_template('/templates/comments.php'); ?>
        </div>
      </div>

      <div class="col-sm-4 border-left">
        <div class="template-speaker">

        <?php
          // field type post object
          $speaker = get_field('speaker');

          $speaker_id = $speaker->ID;
          $speaker_name = $speaker->post_title;
          $speaker_description = $speaker->post_content;
          $link = get_permalink($speaker_id);
          $featured_image = get_the_post_thumbnail($speaker_id, 'full', array('class' => 'img-responsive') );

          echo '<div class="speaker-title"><p>About our speaker</p></div>';
          echo '<div class="speaker-img">' . $featured_image . '</div>';
          echo '<div class="speaker-title"><a href="' . $link . '"><p>' . $speaker_name . '</p></a></div>';
          echo '<div class="speaker-subtitle"><p></p></div>';
          echo '<div class="speaker-description">' . $speaker_description . '</div>';
        ?>

        </div>
      </div>
    </div>

    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>

  </article>
<?php endwhile; ?>
