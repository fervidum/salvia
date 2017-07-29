<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package salvia
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'salvia_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'salvia_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php salvia_header_styles(); ?>">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked into salvia_header action
			 *
			 * @hooked salvia_skip_links                       - 0
			 * @hooked salvia_social_icons                     - 10
			 * @hooked salvia_site_branding                    - 20
			 * @hooked salvia_secondary_navigation             - 30
			 * @hooked salvia_product_search                   - 40
			 * @hooked salvia_primary_navigation_wrapper       - 42
			 * @hooked salvia_primary_navigation               - 50
			 * @hooked salvia_header_cart                      - 60
			 * @hooked salvia_primary_navigation_wrapper_close - 68
			 */
			do_action( 'salvia_header' ); ?>

		</div>
	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to salvia_before_content
	 *
	 * @hooked salvia_header_widget_region - 10
	 */
	do_action( 'salvia_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		/**
		 * Functions hooked in to salvia_content_top
		 *
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'salvia_content_top' );
