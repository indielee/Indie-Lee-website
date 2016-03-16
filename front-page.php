<?php
global $indielee;

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <section class="jumbotron" style="background-image:url('/wp-content/uploads/2016/03/aging-kit.jpg')">

        <div class="jumbotron-product">
          <h3>Defy Age Naturally</h3>
          <p>Roseship Cleanser, Swiss Apple Facial Serum &amp; Squalane Facial Cream</p>
          <a href="/shop" class="button inverted">Gå till butiken</a>
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
        <h3>
          <?php esc_html_e( 'Devoted to making all natural beauty products', 'indie-lee' ); ?>
        </h3>
        <h1>
          <?php esc_html_e( 'Finest natural ingredients', 'indie-lee' ); ?>
        </h1>
        <p>
          <?php esc_html_e( 'What you put on your body is just as important as what you put in it. Indie Lee uses all natural ingredients, carefully selected for it\'s proven effect.', 'indie-lee' ); ?>
        </p>
      </div>

    </section>
  </div><!-- #primary -->

<?php
get_footer(); ?>
