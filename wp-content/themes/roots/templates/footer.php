<footer class="content-info" role="contentinfo">

  <div class="container">
    <div class="row">
      <div class="presented">
        Open Data Tv is Presented By: <img src="<?php echo get_template_directory_uri(); ?>/assets/img/socrata-logo.png" class="img-responsive">
      </div>
      <div class="pull-right">
        <?php wp_nav_menu(array('theme_location' => 'footer_navigation', 'items_wrap' => '<ul id="%1$s" class="%2$s list-inline">%3$s</ul>', 'menu_class' => 'footer')); ?>
        <div class="copyright">Copyright <?php echo date('Y'); ?> Open Data TV</div>
      </div>
    </div>
  </div>

</footer>
