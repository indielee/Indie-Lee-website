<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Indie Lee
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1><?php  post_type_archive_title( '', true ) ?></h1>

				<?php
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

      <?php /* Start the Loop */ ?>

      <div class="press-posts-container">

  			<?php

					$args = array( 'post_type' => 'Press', 'posts_per_page' => 16, 'orderby' => 'menu_order' );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();

				?>

          <div class="press-post">

    				<?php

    					/*
    					 * Include the Post-Format-specific template for the content.
    					 * If you want to override this in a child theme, then include a file
    					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
    					 */
    					get_template_part( 'template-parts/content', 'press' );
    				?>
          </div>

  			<?php endwhile; ?>
      </div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
