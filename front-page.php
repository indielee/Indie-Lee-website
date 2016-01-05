<?php
global $indielee;

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php
      /**
       * @hooked indielee_homepage_jumbotron -10
       * @hooked indielee_homepage_bestsellers - 20
       * @hooked indielee_homepage_about - 30
       */
      do_action( 'homepage' ); ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer(); ?>