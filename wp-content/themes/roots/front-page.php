<?php //get_template_part('templates/page', 'header'); ?>
<?php //get_template_part('templates/content', 'page'); ?>

<?php while (have_posts()) : the_post(); ?>

  <?
   get_template_part('templates/datavision');
  ?>

  <div class="section-header">
    <div class="searchbar">
      <input id="homefilter" class="filter__search js-shuffle-search" type="search" placeholder="Search ODTV">
    </div>
    <h2><span id="homefilter-text">All Videos</span></h2>
  </div>

  <?
   get_template_part('templates/featured');
   get_template_part('templates/recent');
  ?>

  <?
   get_template_part('templates/multicityinnovation');
  ?>


<?php
  endwhile;
?>

