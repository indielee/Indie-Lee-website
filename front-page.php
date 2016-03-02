<?php
global $indielee;

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <section class="jumbotron">

        <div class="jumbotron-product">
          <h3>Defy Age Naturally</h3>
          <p>Roseship Cleanser, Swiss Apple Facial Serum &amp; Squalane Facial Cream</p>
          <a href="/shop" class="button inverted">Gå till butiken</a>
        </div>

        <div class="jumbotron-image">
          <img src="/wp-content/uploads/2016/03/anti-age.jpg">
        </div>

      </section>

      <?php
      /**
       * @hooked indielee_homepage_jumbotron -10 -- Not hooked
       * @hooked indielee_homepage_bestsellers - 20
       * @hooked indielee_homepage_about - 30 -- Not hooked
       */
      do_action( 'homepage' ); ?>

    </main><!-- #main -->

    <section class="about-section" style="background-image:url('/wp-content/uploads/2015/12/natural.jpg');">

      <div class="about-text">
        <h3>Devoted to making all natural beauty products</h3>
        <h1>Finest natural ingredients</h1>
        <p>What you put on your body is just as important as what you put in it. Indie Lee uses all natural ingredients, carefully selected for it's proven effect.</p>
      </div>

    </section>

  </div><!-- #primary -->

<?php
get_footer(); ?>
