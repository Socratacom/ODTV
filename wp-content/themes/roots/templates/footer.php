<footer class="content-info" role="contentinfo">

  <section class="social">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="social-headline">
            <h3>Engage With the Open Data Movement</h3>
          </div>
          <div class="social-subhead">
            <p>Share the ODTV Channel:</p>
          </div>
          <div class="social-icons">
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
      </div>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <div class="social-contribute">
            <div class="contribute-headline">
              <h4>Contribute</h4>
            </div>
            <div class="contribute-body">
              <p>Have an open data success you'd like to share? A suggested topic for us to cover</p>
            </div>
            <div class="contribute-button">
              <a href="#" class="btn btn-primary">Drop us a line</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="social-twitter">
            <div class="twitter-icon">
              <i class="icon-twitter"></i>
            </div>
            <div class="twitter-body">
              <p>"@socrata thanks soooo much for inviting me to your AMAZING conference! Have learned so much and met some brilliant people. #SCS2014"</p>
            </div>
            <div class="twitter-author">
              <p>Sam Mowbray</p>
            </div>
            <div class="twitter-handle">
              <p>@sammymoggas</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="social-signup">
            <div class="signup-headline">
              <h4>Stay in the know</h4>
            </div>
            <div class="signup-body">
              <p>Receive occasional news on open data.</p>
            </div>
            <div class="signup-form">
              <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="subfooter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="presented">
            Open Data Tv is Presented By: <img src="<?php echo get_template_directory_uri(); ?>/assets/img/socrata-logo.png" class="img-responsive">
          </div>
          <div class="pull-right">
            <?php wp_nav_menu(array('theme_location' => 'footer_navigation', 'items_wrap' => '<ul id="%1$s" class="%2$s list-inline">%3$s</ul>', 'menu_class' => 'footer')); ?>
            <div class="copyright">Copyright <?php echo date('Y'); ?> Open Data TV</div>
          </div>
        </div>

      </div>
    </div>
  </section>

</footer>


<div class="video-modal modal fade" tabindex="-1">
</div>
