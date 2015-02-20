<?php //get_template_part('templates/page', 'header'); ?>
<?php //get_template_part('templates/content', 'page'); ?>

<?php while (have_posts()) : the_post(); ?>

  <div class="section-header">
    <h2><span id="homefilter-text">Featured Videos</span></h2>
    <div class="searchbar">
      <input id="homefilter" class="filter__search js-shuffle-search" type="search" placeholder="Search ODTV">
    </div>
  </div>
<?

 get_template_part('templates/featured');
 get_template_part('templates/recent');

  endwhile;
?>

