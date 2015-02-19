<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Search for:', 'roots'); ?></label>
  <div class="input-group left-inner-addon">
    <i class="icon-search"></i>
    <input class="filter__search js-shuffle-search" type="search" placeholder="Search...">
    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-default icon-search">
      </button>
    </span>
  </div>
</form>
