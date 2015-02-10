<?php while (have_posts()) : the_post();



?>
  <article <?php post_class(); ?>>

    <div class="videoWrapper">
    <?php
    $videoUrl = get_field('youtube_link');
    echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $videoUrl . '" frameborder="0" allowfullscreen></iframe>';
    ?>
    </div>

    <header>
      <h1 class="entry-title"><?php echo $videoUrl; ?><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
