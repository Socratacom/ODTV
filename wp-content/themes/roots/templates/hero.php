<section>
  <div class="hero">


    <div class="videoWrapper">
      <iframe id="videoWrapper-video" width="560" height="349" src="" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="contentWrapper">

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="hero-container">

              <div class="hero-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/odtv-logo-hero.png">
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
