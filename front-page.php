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

    <section class="about-section" style="background-image:url('http://indielee.dev/wp-content/uploads/2015/12/natural.jpg');">
        
      <div class="about-text">
        <h3>Devoted to making all natural beauty products</h3>
        <h1>Finest natural ingredients</h1>
        <p>What you put on your body is just as important as what you put in it. Indie Lee uses all natural ingredients, carefully selected for it's proven effect.</p>
      </div>

    </section>
    
  </div><!-- #primary -->

<?php
get_footer(); ?>