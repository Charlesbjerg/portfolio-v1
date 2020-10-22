<?php
/**
 * Functions to enqueue styles and scripts.
 *
 * @package WordPress
 */


/**
 * Function to conditionally enqueue the Vue Single Page App based on the WordPress Custom Page Template.
 *
 * This is done by enqueueing the Vue build script generated by Webpack.
 */
function vue_portfolio_enqueue_spa_scripts() {

		// Swap out the variable for working locally/deployment
		$js_path = "http://localhost:8080/dist/build.js";
		// $js_path = get_stylesheet_directory_uri() . '/spa/dist/build.js',

		// register the Vue build script.
		wp_register_script('vue_portfolio', $js_path);

		// make custom data available to the Vue app with wp_localize_script.
		global $post;
		wp_localize_script(
			'vue_portfolio', // vue script handle.
			'wpData', // javascript object.
			array( // WordPress data to be made available to the Vue app.
				'template_directory_uri' => get_stylesheet_directory_uri(),
				'rest_url' => untrailingslashit( esc_url_raw( rest_url() ) ), // URL to the REST endpoint.
				'app_path' => $post->post_name, // page where the custom page template is loaded.
				'post_categories' => get_terms( array( // default post categories.
					'taxonomy' => 'category',
					'hide_empty' => true,
					'fields' => 'names',
				) ),
			)
		);

		// enqueue the Vue app script with localized data.
		wp_enqueue_script( 'vue_portfolio' );

}
