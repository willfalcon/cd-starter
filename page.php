<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php the_content() ?>

<?php endwhile; else: ?>

  <h3 class="mb-4">Sorry, nothing here!</h3>

<?php endif; ?>

<?php get_footer(); ?>
