<?php
/**
 * Farmhouse Theme.
 *
 * This file adds the Landing template to the Farmhouse Theme.
 *
 * Template Name: Landing
 *
 * @package Farmhouse Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

add_filter( 'body_class', 'farmhouse_add_body_class' );
/**
 * Adds landing page body class.
 *
 * @since 1.0.0
 *
 * @param array $classes Original body classes.
 * @return array Modified body classes.
 */
function farmhouse_add_body_class( $classes ) {

	$classes[] = 'landing-page';
	return $classes;

}

// Removes Skip Links.
remove_action( 'genesis_before_header', 'genesis_skip_links', 5 );

add_action( 'wp_enqueue_scripts', 'farmhouse_dequeue_skip_links' );
/**
 * Dequeues Skip Links Script.
 *
 * @since 1.0.0
 */
function farmhouse_dequeue_skip_links() {

	wp_dequeue_script( 'skip-links' );
	wp_dequeue_script( genesis_get_theme_handle() . '-sticky-header' );

}

//* Force full width content layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Remove Top Announcement Banner
remove_action( 'genesis_before', 'farmhouse_do_top_banner' );

// Removes site header elements.
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

// Removes farmhouse.
remove_theme_support( 'genesis-menus' );
remove_action( 'genesis_header', 'farmhouse_header_right_menu', 9 );
remove_action( 'genesis_header', 'farmhouse_header_left_menu', 6 );
remove_action( 'genesis_footer', 'farmhouse_footer_menu', 7 );

// Removes footer widgets.
remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );

// Removes site footer elements.
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

// Remove Before Footer CTA
remove_action( 'genesis_before_footer', 'farmhouse_before_footer_cta', 9 );

// Remove Before Footer Instagram
remove_action( 'genesis_before_footer', 'farmhouse_before_footer_insta', 12 );

// Remove Footer Logo
remove_filter( 'genesis_before_footer', 'farmhouse_custom_footer_logo', 12 );

// Runs the Genesis loop.
genesis();
