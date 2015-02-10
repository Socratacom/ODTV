<?php while (have_posts()) : the_post();

  $video_quote = get_field('quote');
?>
  <article <?php post_class(); ?>>

    <div class="videoWrapper">
      <?php
        $videoUrl = get_field('youtube_link');
        echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $videoUrl . '?rel=0&amp;vq=hd1080" frameborder="0" allowfullscreen></iframe>';
      ?>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="template-socialBar">
          <div class="socialBar-addThis">
            <div class="addThis-label">
              Share:
            </div>
            <div class="addThis-widget">
              <div class="addthis_sharing_toolbox"></div>
            </div>
          </div>
          <div class="socialBar-statsContainer">
            <div class="statsContainer-stats">
              <div class="stats-number">
                <p>112</p>
              </div>
              <div class="stats-label">
                <p>views</p>
              </div>
            </div>
            <div class="statsContainer-stats">
              <div class="stats-number">
                <p>56</p>
              </div>
              <div class="stats-label">
                <p>likes</p>
              </div>
            </div>
            <div class="statsContainer-stats">
              <div class="stats-number">
                <p>14</p>
              </div>
              <div class="stats-label">
                <p>comments</p>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-sm-6 col-md-8 col-md-9">
        <header>
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <?php get_template_part('templates/entry-meta'); ?>
        </header>
        <div class="entry-content">
          <div class="">
            <?php echo $video_quote; ?>
          </div>
          <?php the_content(); ?>
          <?php comments_template('/templates/comments.php'); ?>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3 border-left">
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
          echo '<div class="speaker-subtitle"><p>What he does</p></div>';
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
