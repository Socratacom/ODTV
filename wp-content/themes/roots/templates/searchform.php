<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Search for:', 'roots'); ?></label>
  <div class="input-group left-inner-addon">
    <i class="icon-search"></i>
    <input class="filter__search js-shuffle-search" type="search" placeholder="Search...">
    <!--<input type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'roots'); ?> title or keywords" required>
    <input type="hidden" name="post_type" value="video" />
    -->

    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-default icon-search">
      </button>
    </span>
  </div>
</form>
