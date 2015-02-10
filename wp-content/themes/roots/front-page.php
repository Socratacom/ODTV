<?php //get_template_part('templates/page', 'header'); ?>
<?php //get_template_part('templates/content', 'page'); ?>
<div class="sticky">
<?php while (have_posts()) : the_post();

 get_template_part('templates/featured');
 get_template_part('templates/recent');

endwhile; ?>
</div>
