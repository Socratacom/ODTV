<?php

  $hero_title = get_field('hero_title');
  $hero_message = get_field('hero_message');
  $cta_label = get_field('cta_label');
  $cta_link = get_field('cta_link');

  $video = '';
  $player = '';
  if( have_rows('video') ) {
    while ( have_rows('video') ) { the_row();
      if( get_row_layout() == 'youtube' ) {
        $embed = get_sub_field('embed');
        preg_match('/src="(.+?)"/', $embed, $matches);
        $src = $matches[1];
        $params = array(
            'enablejsapi' => 1,
            'modestbranding' => 1,
            'rel'   => 0,
            'controls'  => 0,
            'html5'     => 1,
            'showinfo'  =>0,
            'playsinline' => 1,
            'autoplay' => 0
        );
        $video = add_query_arg($params, $src);
        $player = 'player';
      } else if( get_row_layout() == 'livestream' ) {
        $video = get_sub_field('url');
        $player = 'livestream';
      }
    }
  }

  $background_image = get_field('background_image');
  $background_video_webm = get_field('background_video_webm');
  $background_video_mp4 = get_field('background_video_mp4');
  ?>

<section>
  <div class="hero">
    <video id="bgvid" preload autoplay loop poster="<?php echo $background_image; ?>">
      <source src="<?php echo $background_video_webm['url']; ?>" type="video/webm">
      <source src="<?php echo $background_video_mp4['url']; ?>" type="video/mp4">
    </video>

    <div class="hero-video">
      <div class="videoWrapper">

        <iframe id="<?php echo $player; ?>" src="<?php echo $video; ?>" width="560" height="315" frameborder="0" scrolling="no"></iframe>

        <a href="#" class="video-close">X</a>
      </div>
    </div>

    <div class="container">
      <div class="contentWrapper">


        <div class="row">
          <div class="col-md-12">
            <div class="hero-container">

              <div class="hero-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/odtv-logo-hero.png" alt="logo">
              </div>

              <div class="hero-play">
                <a href="#" class="playbutton"><i class="icon-play"></i></a>
              </div>

              <div class="hero-content">

                <div class="content-text">
                  <div class="text-headline">
                    <h1><?php echo $hero_title; ?></h1>
                  </div>
                  <div class="text-subtext">
                    <?php echo $hero_message; ?>
                  </div>
                </div>

                <div class="content-buttons sticky">
                  <a href="#featured" class="btn btn-primary btn-large btn-main">Browse Videos</a>
                  <a href="<?php echo $cta_link; ?>" class="btn btn-default btn-secondary"><?php echo $cta_label; ?></a>
                </div>

              </div>

              <div class="hero-arrow">
                <a href="#featured" class="arrowbutton"><i class="icon-chevron-down"></i></a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>

