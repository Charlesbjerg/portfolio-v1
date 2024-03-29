<?php
/**
 * Functions to extend the WP Rest API
 *
 * @package WordPress
 */

/**
 * Register custom fields for GET requests.
 *
 * Ref: https://developer.wordpress.org/reference/functions/register_rest_field/
 */
function vuetwentyseventeen_extend_api_response() {

	register_rest_field(
		array( 'post' ), // post types.
		'vue_meta', // name of the new key.
		array(
			'get_callback' => 'vue_get_post_meta_fields',
			'update_callback' => null,
			'schema' => null,
		)
	);
}

/**
 * GET callback for the "vue_meta" field defined above.
 *
 * @param array $post_object Details of the current post.
 * @param string $field_name Field Name set in register_rest_field().
 * @param WP_REST_Request $request Current request.
 *
 * @return mixed
 */
function vue_get_post_meta_fields( $post_object, $field_name, $request ) {

	// make additional fields available in the response using an associative array.
	$additional_post_data = array();
	$terms = array();
	$term_links = array();

	// get the post id.
	$post_id = $post_object['id']; 

	// add categories, custom excerpt, featured image to the api response.
	$img_id  = get_post_thumbnail_id( $post_id );
	$img_alt = get_post_meta( $img_id,'_wp_attachment_image_alt', true );
	
	if (isset($post_object['excerpt'])) {
		$excerpt = $post_object['excerpt']['rendered'];
	} else {
		$excerpt = get_the_excerpt();
	}

	$additional_post_data = array(
		'custom_excerpt' => wp_trim_words(
			$excerpt,
			25,
			' &hellip;'
		),
		'terms' => $terms,
		'term_links' => $term_links,
		'featuredmedia_alt' => get_post_meta(
			$img_id,
			'_wp_attachment_image_alt',
			true
		),
		'featuredmedia_url' => get_the_post_thumbnail_url(
			$post_id,
			'full'
		),
	);

	// return data to the get_callback.
	// this data will be made available in the key "vue_meta".
	return $additional_post_data;
}
