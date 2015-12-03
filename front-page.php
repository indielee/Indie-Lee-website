<?php
global $indielee;

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php
      /**
       * @hooked indielee_homepage_content - 10
       */
      do_action( 'homepage' ); ?>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer(); ?>