<?php
/**
 * Farmhouse Theme.
 *
 * This file adds the required CSS to the front end to the Farmhouse Theme.
 *
 * @package Farmhouse Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

add_action( 'wp_enqueue_scripts', 'farmhouse_css' );
/**
 * Checks the settings for the link color, and accent color.
 * If any of these value are set the appropriate CSS is output.
 *
 * @since 1.0.0
 */
function farmhouse_css() {

	$color_link   = get_theme_mod( 'farmhouse_link_color', farmhouse_get_default_link_color() );
	$color_button   = get_theme_mod( 'farmhouse_button_color', farmhouse_get_default_button_color() );
	$color_primary   = get_theme_mod( 'farmhouse_primary_color', farmhouse_get_default_primary_color() );
	$color_banner   = get_theme_mod( 'farmhouse_banner_color', farmhouse_get_default_banner_color() );
	$color_accent = get_theme_mod( 'farmhouse_accent_color', farmhouse_get_default_accent_color() );
	$color_body = get_theme_mod( 'farmhouse_body_color', farmhouse_get_default_body_color() );
	$logo         = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
	
		if ( $logo ) {
		$logo_height           = absint( $logo[2] );
		$logo_max_width        = get_theme_mod( 'farmhouse_logo_width', 400 );
		$logo_half_width       = $logo_max_width / 2;
		$logo_width            = absint( $logo[1] );
		$logo_ratio            = $logo_width / max( $logo_height, 1 );
		$logo_effective_height = min( $logo_width, $logo_max_width ) / max( $logo_ratio, 1 );
		$logo_padding          = max( 0, ( 50 - $logo_effective_height ) / 2 );
	}

	$css = '';

	$css .= ( farmhouse_get_default_link_color() !== $color_link ) ? sprintf(
		'

		a,
		.entry-content a,
		.entry-title a:focus,
		.entry-title a:hover,
		.genesis-nav-menu a:focus,
		.genesis-nav-menu a:hover,
		.genesis-nav-menu .current-menu-item > a,
		.genesis-nav-menu .sub-menu .current-menu-item > a:focus,
		.genesis-nav-menu .sub-menu .current-menu-item > a:hover,
		.gs-faq__question:focus,
		.gs-faq__question:hover,
		.menu-toggle:focus,
		.menu-toggle:hover,
		.sub-menu-toggle:focus,
		.sub-menu-toggle:hover {
			color: %1$s;
		}

		',
		$color_link
	) : '';
	
	$css .= ( farmhouse_get_default_button_color() !== $color_button ) ? sprintf(
		'

		a.button,
		button,
		.button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		input[type="reset"],
		input[type="submit"],
		.entry-content a.button,
		.entry-content a.button:focus,
		.entry-content a.button:hover,
		.widget a.button:focus,
		.widget a.button:hover,
		.site-container div.wpforms-container-full .wpforms-form button[type="submit"],
		.site-container div.wpforms-container-full .wpforms-form button[type="submit"]:hover,
		.site-container div.wpforms-container-full .wpforms-form input[type="submit"],
		.site-container div.wpforms-container-full .wpforms-form input[type="submit"]:hover,
		.site-container .wprm-recipe-jump {
			background-color: %1$s;
			color: %2$s;
		}
			
		',
		$color_button,
		farmhouse_color_contrast( $color_button )
	) : '';
	
		$css .= ( farmhouse_get_default_primary_color() !== $color_primary ) ? sprintf(
		'
		
		body.custom-bg::before,
		.nav-primary {
			background: %1$s;
		}
			
		',
		$color_primary
	) : '';
	
	$css .= ( farmhouse_get_default_banner_color() !== $color_banner ) ? sprintf(
		'

		.farmhouse-top-banner {
			background-color: %1$s;
			color: %2$s;
		}
		
		.farmhouse-top-banner a, 
		.farmhouse-top-banner a:focus, 
		.farmhouse-top-banner a:hover {
			color: %2$s;
		}
		
		#farmhouse-top-banner-close, 
		#farmhouse-top-banner-close:focus, 
		#farmhouse-top-banner-close:hover {
			color: %2$s;
		}

		',
		$color_banner,
		farmhouse_color_contrast( $color_banner )
	) : '';

	$css .= ( farmhouse_get_default_accent_color() !== $color_accent ) ? sprintf(
		'
		
		.wprm-header,
		.wprm-container {
			background-color: %1$s !important;
		}
		
		',
		$color_accent,
		farmhouse_color_contrast( $color_accent )
	) : '';
	
	$css .= ( farmhouse_get_default_body_color() !== $color_body ) ? sprintf(
		'

		body,
		::placeholder,
		input, select, textarea,
		.entry-title a,
		.genesis-nav-menu a,
		.site-title a, 
		.site-title a:focus, 
		.site-title a:hover,
		.site-footer a,
		.entry-meta a,
		.comment-respond a,
		.entry-comments a,
		.entry-pings a,
		.footer-widgets a,
		.author-box a,
		.breadcrumb a,
		.more-from-category a,
		.entry-content a:hover,
		.entry-meta a:focus,
		.entry-meta a:hover,
		.comment-respond a:focus,
		.comment-respond a:hover,
		.entry-comments a:focus,
		.entry-comments a:hover,
		.entry-pings a:focus,
		.entry-pings a:hover,
		.footer-widgets a:hover,
		.author-box a:focus,
		.author-box a:hover,
		.breadcrumb a:focus,
		.breadcrumb a:hover,
		.more-from-category a:focus,
		.more-from-category a:hover,
		.site-footer p a {
			color: %1$s;
		}

		',
		$color_body
	) : '';

	$css .= ( has_custom_logo() && ( 400 !== $logo_max_width ) ) ? sprintf(
		'
		.wp-custom-logo .site-container .title-area {
			max-width: %1$spx;
		}

		',
		$logo_max_width,
		$logo_half_width
	) : '';

	if ( $css ) {
		wp_add_inline_style( genesis_get_theme_handle(), $css );
	}

}
