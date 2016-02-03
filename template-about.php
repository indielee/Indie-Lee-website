<?php
/**
 * Template Name: About Indie Lee
 */
get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'page' ); ?>

        <div class="video-hero">
          <label class="button inverted" for="videoModal">
            <div class="modal-trigger">Watch video</div>
          </label>
          <a href="/shop" class="button inverted">Shop products</a>
        </div>

        <div class="modal video">
          <input class="modal-state" id="videoModal" type="checkbox" />
          <div class="modal-fade-screen">
            <div class="modal-inner">
              <iframe id="aboutVideo" src="https://player.vimeo.com/video/15567447?color=9fb137?api=1&player_id=vimeoplayer" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
          </div>
        </div>

        <div class="featured-media">
          <img src="http://indielee.dev/wp-content/uploads/2015/12/flower.png" alt="Media" />
          <img src="http://indielee.dev/wp-content/uploads/2015/12/flower.png" alt="Media" />
          <img src="http://indielee.dev/wp-content/uploads/2015/12/flower.png" alt="Media" />
          <img src="http://indielee.dev/wp-content/uploads/2015/12/flower.png" alt="Media" />
        </div>

        <div class="about-indie">
          <div class="about-indie-image">
            <img src="http://indielee.com/shop/media/catalog/product/cache/1/image/460x/17f82f742ffe127f42dca9de82fb58b1/c/o/complexion-kit-composite-2.jpg" alt="About Indie" />
          </div>
          <div class="about-indie-text">
            <h2>About Indie</h2>
            <p>
              After conquering a life-threatening brain tumor that pointed to environmental toxins as the culprit, Indie Lee awoke on April 22, 2009 with a new lease on life and the passion to create a chic and eco-friendly namesake collection. Comprised of the finest all-natural ingredients around the world, the line is designed to enhance the face and body with gratifying green glamour. Indulge in the luxurious feel and beautiful benefits of Indie Lee products while protecting the Earth– and your body. Unleash your inner and outer beauty with Indie Lee, an eco-chic collection of skincare products that combine style and sustainability without sacrifice.
            </p>
            <p>
              Unleash your inner and outer beauty with Indie Lee, an eco-chic collection of skincare products that combine style and sustainability without sacrifice.
            </p>
          </div>
        </div>

        <div class="about-indie">
          <div class="about-indie-image">
            <img src="http://indielee.com/shop/media/catalog/product/cache/1/image/460x/17f82f742ffe127f42dca9de82fb58b1/c/o/complexion-kit-composite-2.jpg" alt="About Indie" />
          </div>
          <div class="about-indie-text">
            <h2>About Indie</h2>
            <p>
              After conquering a life-threatening brain tumor that pointed to environmental toxins as the culprit, Indie Lee awoke on April 22, 2009 with a new lease on life and the passion to create a chic and eco-friendly namesake collection. Comprised of the finest all-natural ingredients around the world, the line is designed to enhance the face and body with gratifying green glamour. Indulge in the luxurious feel and beautiful benefits of Indie Lee products while protecting the Earth– and your body. Unleash your inner and outer beauty with Indie Lee, an eco-chic collection of skincare products that combine style and sustainability without sacrifice.
            </p>
            <p>
              Unleash your inner and outer beauty with Indie Lee, an eco-chic collection of skincare products that combine style and sustainability without sacrifice.
            </p>
          </div>
        </div>

        <?php
          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
        ?>

      <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->
<?php get_footer(); ?>

<script src="https://f.vimeocdn.com/js/froogaloop2.min.js"></script>
<script>
  $(function() {
    var iframe = document.getElementById('aboutVideo');
    // $f == Froogaloop
    var player = $f(iframe);

    $("#videoModal").on("change", function() {
      if ($(this).is(":checked")) {
        $("body").addClass("modal-open");
        player.api('play');
      } else {
        $("body").removeClass("modal-open");
        player.api('pause');
      }
    });

    $(".modal-fade-screen, .modal-close").on("click", function() {
      $(".modal-state:checked").prop("checked", false).change();
    });

    $(".modal-inner").on("click", function(e) {
      e.stopPropagation();
    });
  });
</script>
