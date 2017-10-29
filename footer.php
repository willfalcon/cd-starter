      <div class="row">

        <?php get_sidebar( 'footer_left' ); ?>
        <?php get_sidebar( 'footer_left_center' ); ?>

        <div class="col-6 col-md-3 quick-links-container">
          <h6 class="quick-links">Quick Links</h6>
          <?php

            $quickLinks = array(
              'theme_location' => 'quick-links',
              'container_id' => 'quick_links_wrapper'
            );

            wp_nav_menu( $quickLinks );

          ?>
        </div>

        <div class="col-md-3 text-right">
          <?php if ( get_field( 'copyright_label', 'option' ) ) : ?>
            <p class="cd-copyright">&copy; <?php the_field( 'copyright_label', 'option' ); ?> <?php echo date_i18n('Y'); ?>
          <?php endif; ?>
        </div>

      </div>

      <?php wp_footer(); ?>

    </div><!--.container-fluid-->
  </body>
</html>
