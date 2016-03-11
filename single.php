<?php
/**
 * The template for displaying all single posts.
 *
 * @package Indie Lee
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="blog-posts-container">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="blog-post">

					<?php the_post_thumbnail(); ?>

					<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<?php the_post_navigation(); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				</div>

			<?php endwhile; // End of the loop. ?>

		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
