<?php //get_template_part('templates/page', 'header'); ?>
<?php //get_template_part('templates/content', 'page'); ?>

<?php while (have_posts()) : the_post();

 get_template_part('templates/featured');
 get_template_part('templates/recent');

endwhile; ?>

