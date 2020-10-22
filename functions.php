<?php
/**
 * vue-portfolio-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vue-portfolio-theme
 */
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

// enqueue-scripts.php
add_action( 'wp_enqueue_scripts', 'vue_portfolio_enqueue_spa_scripts' );

// extend-api.php.
add_action( 'rest_api_init', 'vuetwentyseventeen_extend_api_response' );

