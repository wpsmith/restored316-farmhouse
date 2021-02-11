<?php
/**
 * Farmhouse child theme editor color palette.
 *
 * @package Farmhouse Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

/**
 * Editor color palette config.
 */
return [
	[
		'name'  => __( 'Button color', 'farmhouse-theme' ), 
		'slug'  => 'theme-button',
		'color' => get_theme_mod( 'farmhouse_button_color', farmhouse_get_default_button_color() ),
	],
	[
		'name'  => __( 'Primary color', 'farmhouse-theme' ), 
		'slug'  => 'theme-primary',
		'color' => get_theme_mod( 'farmhouse_primary_color', farmhouse_get_default_primary_color() ),
	],
	[
		'name'  => __( 'Accent color', 'farmhouse-theme' ),
		'slug'  => 'theme-secondary',
		'color' => get_theme_mod( 'farmhouse_accent_color', farmhouse_get_default_accent_color() ),
	],
	[
		'name'  => __( 'Body color', 'farmhouse-theme' ),
		'slug'  => 'theme-third',
		'color' => get_theme_mod( 'farmhouse_body_color', farmhouse_get_default_body_color() ),
	],
];
