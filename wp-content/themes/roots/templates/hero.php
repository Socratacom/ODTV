<section>
  <div class="hero">

    <div class="videoWrapper">
      <iframe width="560" height="349" src="http://www.youtube.com/embed/ScMzIvxBSi4?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="hero-container">

            <div class="hero-logo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/odtv-logo-hero.png">
            </div>

            <div class="hero-content">

              <div class="content-text">
                <div class="text-headline">
                  <h1>Welcome to Open Data TV</h1>
                </div>
                <div class="text-subtext">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                </div>
              </div>

              <div class="content-buttons">
                <a href="#featured" class="btn btn-primary btn-large btn-main">Browse Videos</a>
                <a href="#featured" class="btn btn-default btn-sm btn-secondary">Featured</a>
                <a href="#recent" class="btn btn-default btn-sm btn-secondary">Recent</a>
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
</section>
