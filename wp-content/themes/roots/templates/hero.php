<?php

  $hero_title = get_field('hero_title');
  $hero_message = get_field('hero_message');
  $cta_label = get_field('cta_label');
  $cta_link = get_field('cta_link');

  ?>


<section>
  <div class="hero">
    <video id="bgvid" preload autoplay loop poster="<?php echo get_template_directory_uri(); ?>/assets/img/hero_bg.jpg">
      <source src="/wp-content/uploads/2015/02/hero-loop.webm" type="video/webm">
      <source src="/wp-content/uploads/2015/02/hero-loop.mp4" type="video/mp4">
    </video>

    <div class="hero-video">
      <div class="videoWrapper">


        <iframe src="http://livestream.com/accounts/4241684/events/2152811/player?width=560&height=315&autoPlay=false&mute=false" width="560" height="315" frameborder="0" scrolling="no"> </iframe>

        <script>

        // var tag = document.createElement('script');
        // tag.src = "//www.youtube.com/player_api";
        // var firstScriptTag = document.getElementsByTagName('script')[0];
        // firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // var player;
        // function onYouTubePlayerAPIReady() {
        //     player = new YT.Player('player', {
        //       height: '390',
        //       width: '640',
        //       videoId: 'SWHeUeB0Dqs',
        //       playerVars: {
        //         'modestbranding' : 1,
        //         'autoplay': 0,
        //         'controls': 0,
        //         'rel' : 0,
        //         'html5' : 1,
        //         'playsinline' : 1,
        //         'showinfo' : 0
        //       },
        //       events: {
        //         'onReady': onPlayerReady,
        //         'onStateChange': onPlayerStateChange
        //       }
        //     });
        // }

        // function onPlayerReady(event) {
        //     event.target.seekTo(0, false);
        //     event.target.stopVideo();
        // }

        // function onPlayerStateChange(event) {
        //   if(event.data === 0) {
        //     $('.videoWrapper').removeClass('visible');
        //     $('.contentWrapper').removeClass('hidden');
        //   }
        // }

        </script>

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

