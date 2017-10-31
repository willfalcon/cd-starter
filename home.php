<?php get_header(); ?>

<div class="row">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="col-12 col-md-6 cd-blog-card">

      <!-- col classes not showing up in inspector???? -->


    </div>
  <?php endwhile; else: ?>

    <h3 class="mb-4">Sorry, nothing here!</h3>

  <?php endif; ?>

</div>

<?php get_footer(); ?>
