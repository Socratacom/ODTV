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
      <a href="#featured" class="btn btn-default btn-sm">Featured</a>
      <a href="#recent" class="btn btn-default btn-sm">Recent</a>
      <a href="http://www.socrata.com/open-data-field-guide-chapter/about/?utm_source=odtv&utm_medium=organic&utm_content=cta&utm_campaign=open-data-field-guide" class="btn btn-default">What is Open Data</a>
    </div>

    <div class="nav-search">
      <form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url(home_url('/')); ?>">
        <label class="sr-only"><?php _e('Search for:', 'roots'); ?></label>
        <div class="input-group left-inner-addon">
          <i class="icon-search"></i>
          <input id="search" type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'roots'); ?> title or keywords" required>
          <input type="hidden" name="post_type" value="video" />

          <span class="input-group-btn">
            <a class="btn btn-default btn-search icon-search">
            </a>
            <button type="submit" class="search-submit btn btn-default icon-search">
            </button>
          </span>
        </div>
      </form>
    </div>

    <div class="nav-right">
      <div class="nav-cta">

      </div>
      <div class="nav-social">
        <div class="social-label">Share ODTV:</div>
        <div class="social-icons">
          <div class="addthis_toolbox addthis_32x32_style">
            <a class="addthis_button_email"></a>
            <a class="addthis_button_linkedin"></a>
            <a class="addthis_button_google_plusone_share"></a>
            <a class="addthis_button_twitter"></a>
            <a class="addthis_button_facebook"></a>
            <a class="addthis_button_expanded"></a>
          </div>
        </div>
      </div>
    </div>

  </div>
</header>
