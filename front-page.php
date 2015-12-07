<?php
global $indielee;

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <section class="jumbotron">

        <div class="jumbotron-product">
          <img src="http://indielee.dev/wp-content/uploads/2015/09/brighteningcleanser_1-300x300.jpg" class="attachment-shop_catalog wp-post-image" alt="brighteningcleanser_1">
          <h3>Calendula Eye Balm</h3>
          <p>A gentle and effective facial cleanser that REMOVES MAKEUP and impurities while MOISTURIZING THE SKIN.</p>
          <a href="#" class="button inverted">Explore</a>
        </div>

        <div class="jumbotron-image">
          <img src="http://indielee.dev/wp-content/uploads/2015/12/flower.png">
        </div>

      </section>

      <?php
      /**
       * @hooked indielee_homepage_content - 10
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