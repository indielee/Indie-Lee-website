<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Indie Lee
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>

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
      <h2>As seen in</h2>
      <div class="logos-container">
        <div class="media-logo">
          <img src="/wp-content/uploads/2016/02/elle.png" alt="Elle" />
        </div>
        <div class="media-logo">
          <img src="/wp-content/uploads/2016/02/metro-mode.png" alt="Metro Mode" />
        </div>
        <div class="media-logo">
          <img src="/wp-content/uploads/2016/02/modette.png" alt="Modette" />
        </div>
        <div class="media-logo">
          <img src="/wp-content/uploads/2016/02/kosmetik.png" alt="Kosmetik" />
        </div>
        <div class="media-logo">
          <img src="/wp-content/uploads/2016/02/bazaar.png" alt="Bazaar" />
        </div>
        <div class="media-logo">
          <img src="/wp-content/uploads/2016/02/vogue.png" alt="Vogue" />
        </div>
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
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'indie-lee' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'indie-lee' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
