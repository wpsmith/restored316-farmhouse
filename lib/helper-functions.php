<?php
/**
 * Farmhouse Theme.
 *
 * This file adds the required helper functions used in the farmhouse Theme.
 *
 * @package Farmhouse Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

/**
 * Gets default link color.
 * Abstracted here since at least two functions use it.
 *
 * @since 1.0.0
 *
 * @return string Hex color code for link color.
 */
function farmhouse_get_default_link_color() {

	return '#8c9086';

}

/**
 * Gets default button color.
 * Abstracted here since at least two functions use it.
 *
 * @since 1.0.0
 *
 * @return string Hex color code for button color.
 */
function farmhouse_get_default_button_color() {

	return '#525252';

}

/**
 * Gets default primary color.
 * Abstracted here since at least two functions use it.
 *
 * @since 1.0.0
 *
 * @return string Hex color code for primary color.
 */
function farmhouse_get_default_primary_color() {

	return '#f4f1ea';

}

/**
 * Gets default banner color.
 * Abstracted here since at least two functions use it.
 *
 * @since 1.0.0
 *
 * @return string Hex color code for primary color.
 */
function farmhouse_get_default_banner_color() {

	return '#8c9086';

}

/**
 * Gets default accent color.
 * Abstracted here since at least two functions use it.
 *
 * @since 1.0.0
 *
 * @return string Hex color code for accent color.
 */
function farmhouse_get_default_accent_color() {

	return '#8c9086';

}

/**
 * Gets default body color.
 * Abstracted here since at least two functions use it.
 *
 * @since 1.0.0
 *
 * @return string Hex color code for accent color.
 */
function farmhouse_get_default_body_color() {

	return '#525252';

}

/**
 * Calculates if white or gray would contrast more with the provided color.
 *
 * @since 1.0.0
 *
 * @param string $color A color in hex format.
 * @return string The hex code for the most contrasting color: dark grey or white.
 */
function farmhouse_color_contrast( $color ) {

	$hexcolor = str_replace( '#', '', $color );
	$red      = hexdec( substr( $hexcolor, 0, 2 ) );
	$green    = hexdec( substr( $hexcolor, 2, 2 ) );
	$blue     = hexdec( substr( $hexcolor, 4, 2 ) );

	$luminosity = ( ( $red * 0.2126 ) + ( $green * 0.7152 ) + ( $blue * 0.0722 ) );

	return ( $luminosity > 128 ) ? '#525252' : '#ffffff';

}

/**
 * Generates a lighter or darker color from a starting color.
 * Used to generate complementary hover tints from user-chosen colors.
 *
 * @since 1.0.0
 *
 * @param string $color A color in hex format.
 * @param int    $change The amount to reduce or increase brightness by.
 * @return string Hex code for the adjusted color brightness.
 */
function farmhouse_color_brightness( $color, $change ) {

	$hexcolor = str_replace( '#', '', $color );

	$red   = hexdec( substr( $hexcolor, 0, 2 ) );
	$green = hexdec( substr( $hexcolor, 2, 2 ) );
	$blue  = hexdec( substr( $hexcolor, 4, 2 ) );

	$red   = max( 0, min( 255, $red + $change ) );
	$green = max( 0, min( 255, $green + $change ) );
	$blue  = max( 0, min( 255, $blue + $change ) );

	return '#' . dechex( $red ) . dechex( $green ) . dechex( $blue );

}

add_filter( 'body_class', 'farmhouse_maybe_add_menu_body_class' );
/**
 * Adds `has-one-menu` class if only one menu of the two available is set.
 *
 * @since 1.0.0
 *
 * @param array $classes Original body classes.
 * @return array Modified body classes.
 */
function farmhouse_maybe_add_menu_body_class( $classes ) {

	$menus = [ has_nav_menu( 'primary' ), has_nav_menu( 'secondary' ) ];

	if ( 1 === count( array_filter( $menus ) ) ) {
		$classes[] = 'has-one-menu';
	}

	return $classes;

}

/**
 * Gets default top banner section text.
 *
 * @since 1.0.0
 *
 * @return string Text to use in the top banner.
 */
function farmhouse_get_default_top_banner_text() {

	return __( 'Join my newsletter list to be the first to hear our latest news! <a href="#"> Learn More</a>', 'farmhouse-theme' );

}

// Add FacetWP Support.
add_filter( 'body_class', 'farmhouse_body_class', 88, 1 );

/**
 * Function to update body class
 *
 * @since 1.0.0
 *
 * @param  array $classes Body Classes.
 * @return array $classes Modified Classes.
 */
function farmhouse_body_class( $classes ) {
	if ( class_exists( 'FacetWP' ) && is_archive() ) {
		$classes[] = 'facetwp-template';
	}
	return $classes;
}

