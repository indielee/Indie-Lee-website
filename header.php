<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Indie Lee
 */
global $indielee;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="first-row">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">=</button>
			<div class="site-branding">
				<?php if ( get_header_image() ) { ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="Logo">
				</a>
				<?php } else { ?>
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				<?php } ?>
			</div>

				<?php
				/**
				 * @hooked indielee_cart_link
				 * @hooked indielee_header_cart
				 */
				do_action( 'indielee_cart' ); ?>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
