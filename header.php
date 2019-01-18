<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vue-portfolio-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="SkVGIVwsiJg5P6PRZuO_6I2B59KzktZJTUWQN4oFjiE" />
  	<meta name="description" content="The web developer portfolio for Charlie Underhill, specialising in PHP development. See what work he's done." />
	<title>Charlie Underhill - Developer Portfolio</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vue-portfolio-theme' ); ?></a>
	<div id="content" class="site-content">
