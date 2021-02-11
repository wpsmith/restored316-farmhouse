<?php
/**
 * Farmhouse Theme.
 *
 * This file adds the required WooCommerce setup functions to the Farmhouse Theme.
 *
 * @package Farmhouse Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

// Adds product gallery support.
if ( class_exists( 'WooCommerce' ) ) {

	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'wc-product-gallery-zoom' );

}

add_filter( 'woocommerce_style_smallscreen_breakpoint', 'farmhouse_woocommerce_breakpoint' );
/**
 * Modifies the WooCommerce breakpoints.
 *
 * @since 1.0.0
 *
 * @return string Pixel width of the theme's breakpoint.
 */
function farmhouse_woocommerce_breakpoint() {

	$current = genesis_site_layout( false );
	$layouts = [
		'one-sidebar' => [
			'content-sidebar',
			'sidebar-content',
		],
	];

	if ( in_array( $current, $layouts['one-sidebar'], true ) ) {
		return '1200px';
	}

	return '860px';

}

add_filter( 'genesiswooc_products_per_page', 'farmhouse_default_products_per_page' );
/**
 * Sets the default products per page.
 *
 * @since 1.0.0
 *
 * @return int Number of products to show per page.
 */
function farmhouse_default_products_per_page() {

	return 8;

}

add_filter( 'woocommerce_pagination_args', 'farmhouse_woocommerce_pagination' );
/**
 * Updates the next and previous arrows to the default Genesis style.
 *
 * @since 1.0.0
 *
 * @param array $args The previous and next text arguments.
 * @return array New next and previous text arguments.
 */
function farmhouse_woocommerce_pagination( $args ) {

	$args['prev_text'] = sprintf( '&laquo; %s', __( 'Previous Page', 'farmhouse-theme' ) );
	$args['next_text'] = sprintf( '%s &raquo;', __( 'Next Page', 'farmhouse-theme' ) );

	return $args;

}

add_action( 'after_switch_theme', 'farmhouse_woocommerce_image_dimensions_after_theme_setup', 1 );
/**
 * Defines WooCommerce image sizes on theme activation.
 *
 * @since 1.0.0
 */
function farmhouse_woocommerce_image_dimensions_after_theme_setup() {

	global $pagenow;

	// Checks conditionally to see if we're activating the current theme and that WooCommerce is installed.
	if ( ! isset( $_GET['activated'] ) || 'themes.php' !== $pagenow || ! class_exists( 'WooCommerce' ) ) { // phpcs:ignore WordPress.CSRF.NonceVerification.NoNonceVerification -- low risk, follows official snippet at https://goo.gl/nnHHQa.
		return;
	}

	farmhouse_update_woocommerce_image_dimensions();

}

add_action( 'activated_plugin', 'farmhouse_woocommerce_image_dimensions_after_woo_activation', 10, 2 );
/**
 * Defines the WooCommerce image sizes on WooCommerce activation.
 *
 * @since 1.0.0
 *
 * @param string $plugin The path of the plugin being activated.
 */
function farmhouse_woocommerce_image_dimensions_after_woo_activation( $plugin ) {

	// Checks to see if WooCommerce is being activated.
	if ( 'woocommerce/woocommerce.php' !== $plugin ) {
		return;
	}

	farmhouse_update_woocommerce_image_dimensions();

}

/**
 * Updates WooCommerce image dimensions.
 *
 * @since 1.0.0
 */
function farmhouse_update_woocommerce_image_dimensions() {

	// Updates image size options.
	update_option( 'woocommerce_single_image_width', 920 );    // Single product image.
	update_option( 'woocommerce_thumbnail_image_width', 450 ); // Catalog image.

	// Updates image cropping option.
	update_option( 'woocommerce_thumbnail_cropping', '1:1' );

}

add_filter( 'woocommerce_get_image_size_gallery_thumbnail', 'farmhouse_gallery_image_thumbnail' );
/**
 * Filters the WooCommerce gallery image dimensions.
 *
 * @since 1.0.0
 *
 * @param array $size The gallery image size and crop arguments.
 * @return array The modified gallery image size and crop arguments.
 */
function farmhouse_gallery_image_thumbnail( $size ) {

	$size = [
		'width'  => 180,
		'height' => 180,
		'crop'   => 1,
	];

	return $size;

}
