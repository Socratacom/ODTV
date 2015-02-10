<header class="banner navbar navbar-default fixed" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/odtv-logo.png"></a>
    <div class="nav-buttons">
      <a href="#" class="btn btn-default btn-sm">Featured</a>
      <a href="#" class="btn btn-default btn-sm">Recent</a>
    </div>

    <div class="nav-right">
      <div class="nav-search">
        <?php get_search_form( $echo ); ?>
      </div>
    </div>

    <div class="nav-right">
      <div class="nav-social">
        <div class="social-label">Share ODTV:</div>
        <div class="social-icons"><div class="addthis_sharing_toolbox"></div></div>
      </div>
    </div>

  </div>
</header>
