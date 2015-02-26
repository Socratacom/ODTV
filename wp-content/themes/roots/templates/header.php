<?php
  $cta_label = get_field('cta_label', page-id-5);
  $cta_link = get_field('cta_link', page-id-5);
?>

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
      <a href="<?php echo $cta_link; ?>" class="btn btn-default"><?php echo $cta_label; ?></a>
    </div>

    <div class="visible-xs" style="clear:both;"></div>

    <div class="nav-right">
      <div class="nav-social">
        <div class="social-label">Share ODTV:</div>
        <div class="social-icons">
          <div class="addthis_toolbox addthis_32x32_style">
            <a class="addthis_button_email">
              <i class="icon-email"></i>
            </a>
            <a class="addthis_button_linkedin">
              <i class="icon-linked"></i>
            </a>
            <a class="addthis_button_google_plusone_share">
              <i class="icon-google-plus"></i>
            </a>
            <a class="addthis_button_twitter">
              <i class="icon-twitter"></i>
            </a>
            <a class="addthis_button_facebook">
              <i class="icon-facebook"></i>
            </a>
            <a class="addthis_button_expanded">
              <i class="icon-plus"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
</header>
