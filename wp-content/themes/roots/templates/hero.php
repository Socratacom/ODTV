<section>
  <div class="hero">
    <div class="videoWrapper">
      <!--<iframe id="videoWrapper-video" width="560" height="349" src="" frameborder="0" allowfullscreen></iframe>-->

      <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
      <div id="player"></div>


      <script>

      var tag = document.createElement('script');
      tag.src = "//www.youtube.com/player_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      var player;
      function onYouTubePlayerAPIReady() {
          player = new YT.Player('player', {
            height: '390',
            width: '640',
            videoId: 'ScMzIvxBSi4',
            playerVars: {rel: 0},
            events: {
              'onReady': onPlayerReady,
              'onStateChange': onPlayerStateChange
            }
          });
      }

      function onPlayerReady(event) {
          //event.target.playVideo();
      }

      function onPlayerStateChange(event) {
        if(event.data === 0) {
          $('.videoWrapper').removeClass('visible');
          $('.videoWrapper').addClass('hidden');
          $('.contentWrapper').removeClass('hidden');
          $('.contentWrapper').addClass('visible');
        }
      }

      $('.playbutton').click(function() {
        $('.videoWrapper').removeClass('hidden');
        $('.videoWrapper').addClass('visible');
        $('.contentWrapper').removeClass('visible');
        $('.contentWrapper').addClass('hidden');
        player.playVideo();
      });

      </script>
    </div>

    <div class="contentWrapper">

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="hero-container">

              <div class="hero-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/odtv-logo-hero.png" alt="logo">
              </div>

              <div class="content-play">
                <a href="#" class="playbutton"><i class="icon-play"></i></a>
              </div>

              <div class="hero-content">

                <div class="content-text">
                  <div class="text-headline">
                    <h1>Welcome to Open Data TV</h1>
                  </div>
                  <div class="text-subtext">
                    <p>Tune into ODTV to hear from the world’s foremost thought leaders on how government is using data to drive performance, boost the economy, and increase citizen engagement.</p>
                  </div>
                </div>

                <div class="content-buttons">
                  <a href="#featured" class="btn btn-primary btn-large btn-main">Browse Videos</a>
                  <a href="#featured" class="btn btn-default btn-secondary">Featured</a>
                  <a href="#recent" class="btn btn-default btn-secondary">Recent</a>
                </div>

                <div class="content-search">
                  <?php get_search_form( $echo ); ?>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
