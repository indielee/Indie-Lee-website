<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<div class="single-product">

		<?php
			/**
			 * woocommerce_before_main_content hook
			 *
			 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
			 * @hooked woocommerce_breadcrumb - 20
			 */
			do_action( 'woocommerce_before_main_content' );
		?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php wc_get_template_part( 'content', 'single-product' ); ?>

			<?php endwhile; // end of the loop. ?>

		<div class="brand-info-container">
			<div class="brand-info">INDIE LEE is devoted to making all natural beauty products from the WORLD’S FINEST INGREDIENTS. What you put on your body is just as important as what you put in it. We must nurture our soul to let our inner beauty shine through. Live life to its fullest, ONE MOMENT AT A TIME.</div>
		</div>

		<div class="ingredient-info-container">
			<div class="ingredient-info">
				<h2>Derivated Squalane</h2>
				<p>Our face oil is made of 100% pure, olive derived squalane oil that promotes skin elasticity, diminishes age spots, and boosts cell regeneration and oxgenation. One oil bottle contains the squalane from thousands of olivs. Indie Lee does not use animalic squalane.</p>
			</div>
			<div class="ingredient-image" style="background-image: url('http://indielee.dev/wp-content/uploads/2015/12/natural.jpg');"></div>
		</div>

		<?php
			/**
			 * woocommerce_after_main_content hook
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action( 'woocommerce_after_main_content' );
		?>

	</div>

<?php get_footer( 'shop' ); ?>
