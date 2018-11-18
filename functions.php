<?php
/**
 * vue-portfolio-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vue-portfolio-theme
 */

// if ( ! function_exists( 'vue_portfolio_theme_setup' ) ) :
// 	/**
// 	 * Sets up theme defaults and registers support for various WordPress features.
// 	 *
// 	 * Note that this function is hooked into the after_setup_theme hook, which
// 	 * runs before the init hook. The init hook is too late for some featuzres, such
// 	 * as indicating support for post thumbnails.
// 	 */
// 	function vue_portfolio_theme_setup() {
// 		/*
// 		 * Make theme available for translation.
// 		 * Translations can be filed in the /languages/ directory.
// 		 * If you're building a theme based on vue-portfolio-theme, use a find and replace
// 		 * to change 'vue-portfolio-theme' to the name of your theme in all the template files.
// 		 */
// 		load_theme_textdomain( 'vue-portfolio-theme', get_template_directory() . '/languages' );

// 		// Add default posts and comments RSS feed links to head.
// 		add_theme_support( 'automatic-feed-links' );

// 		/*
// 		 * Let WordPress manage the document title.
// 		 * By adding theme support, we declare that this theme does not use a
// 		 * hard-coded <title> tag in the document head, and expect WordPress to
// 		 * provide it for us.
// 		 */
// 		add_theme_support( 'title-tag' );

// 		/*
// 		 * Enable support for Post Thumbnails on posts and pages.
// 		 *
// 		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
// 		 */
// 		add_theme_support( 'post-thumbnails' );

// 		// This theme uses wp_nav_menu() in one location.
// 		register_nav_menus( array(
// 			'menu-1' => esc_html__( 'Primary', 'vue-portfolio-theme' ),
// 		) );

// 		/*
// 		 * Switch default core markup for search form, comment form, and comments
// 		 * to output valid HTML5.
// 		 */
// 		add_theme_support( 'html5', array(
// 			'search-form',
// 			'comment-form',
// 			'comment-list',
// 			'gallery',
// 			'caption',
// 		) );

// 		// Set up the WordPress core custom background feature.
// 		add_theme_support( 'custom-background', apply_filters( 'vue_portfolio_theme_custom_background_args', array(
// 			'default-color' => 'ffffff',
// 			'default-image' => '',
// 		) ) );

// 		// Add theme support for selective refresh for widgets.
// 		add_theme_support( 'customize-selective-refresh-widgets' );

// 	}
// endif;
// add_action( 'after_setup_theme', 'vue_portfolio_theme_setup' );

function vue_portfolio_theme_scripts() {

	// normalize css
	wp_enqueue_style('vue-portfolio-normalize', get_stylesheet_directory_uri() . '/assets/css/normalize.css');

	// flexgrid.css
	wp_register_style('vue-portfolio-flexgrid', get_stylesheet_directory_uri() . '/assets/css/flexgrid.min.css');
	wp_enqueue_style('vue-portfolio-flexgrid', get_stylesheet_directory_uri() . '/assets/css/flexgrid.min.css');

	// main.css
	wp_register_style('vue-portfolio-theme-style', get_stylesheet_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style('vue-portfolio-theme-style', get_stylesheet_directory_uri() . '/assets/css/main.css');

	// Font awesome
	wp_register_script('font-awesome', get_stylesheet_directory_uri() . '/assets/js/fa.min.js');
	wp_enqueue_script('font-awesome', get_stylesheet_directory_uri() . '/assets/js/fa.min.js');
	
	// Built vue script
	/*wp_register_script('vue-portfolio-spa-script', get_stylesheet_directory_uri() . '/assets/js/build.js');
	wp_enqueue_script('vue-portfolio-spa-script', get_stylesheet_directory_uri() . '/assets/js/build.js');*/

}
add_action( 'wp_enqueue_scripts', 'vue_portfolio_theme_scripts' );

// Includes
include_once( get_stylesheet_directory() . '/includes/enqueue-scripts.php' );
include_once( get_stylesheet_directory() . '/includes/extend-api.php' );

/* hooks and filters */
// enqueue-scripts.php.
// add_action( 'wp_enqueue_scripts', 'vuetwentyseventeen_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'vue_portfolio_enqueue_spa_scripts' );

// extend-api.php.
add_action( 'rest_api_init', 'vuetwentyseventeen_extend_api_response' );

