<?php
/**
 * Indie Lee functions and definitions
 *
 * @package Indie Lee
 */

if ( ! function_exists( 'indie_lee_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function indie_lee_setup() {

	/*
	 * Add Redux Framework
	 */
	require get_template_directory() . '/admin/admin-init.php';

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Indie Lee, use a find and replace
	 * to change 'indie-lee' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'indie-lee', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'indie-lee' ),
		'secondary' => esc_html__( 'Top Menu', 'indie-lee' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );
}

endif; // indie_lee_setup
add_action( 'after_setup_theme', 'indie_lee_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function indie_lee_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'indie_lee_content_width', 640 );
}
add_action( 'after_setup_theme', 'indie_lee_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function indie_lee_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'indie-lee' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'indie_lee_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function indie_lee_scripts() {
	global $indielee;
	wp_enqueue_style( 'indie-lee-style', get_stylesheet_uri() );

	wp_deregister_script('jquery');
	wp_register_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js', false, null);

  if ( isset( $indielee['homepage-blocks']['enabled']['slider'] ) ) {
		wp_enqueue_script( 'indie-lee-slider', get_template_directory_uri() . '/js/vendor/owl.carousel.js', array(), '2.0.0-beta.2.4', true );
  }


	wp_enqueue_script( 'indie-lee-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'indie-lee-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'indie_lee_scripts' );

// Disable all woocommerce auto-css. We rely on our own coding skills. #coolness
// add_filter( 'woocommerce_enqueue_styles', '__return_false' );

/**
 * Tell WooCommerce that we know what we are doing and our theme is configurated to use WooCommerce.
 */
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Remove Woocommerce wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<main id="main" class="site-main" role="main">';
}

function my_theme_wrapper_end() {
  echo '</main';
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

require get_template_directory() . '/inc/functions/extras.php';
require get_template_directory() . '/inc/structure/template-tags.php';
require get_template_directory() . '/inc/woocommerce/hooks.php';

add_action( 'homepage', 'indielee_homepage_content', 10 );
add_action( 'indielee_cart', 'indielee_header_cart', 10 );
add_action( 'wp_footer', 'homepage_scripts', 21 );