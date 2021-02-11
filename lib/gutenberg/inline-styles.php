<?php
/**
 * Adds front-end inline styles for the custom Gutenberg color palette.
 *
 * @package Farmhouse Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

add_action( 'wp_enqueue_scripts', 'farmhouse_custom_gutenberg_css' );
/**
 * Output front-end inline styles for `editor-color-palette` colors.
 *
 * These colors can be changed in the Customizer, so CSS is set dynamically.
 *
 * @since 1.0.0
 */
function farmhouse_custom_gutenberg_css() {

	$custom_color          = get_theme_mod( 'farmhouse_link_color', farmhouse_get_default_link_color() );
	$button_color          = get_theme_mod( 'farmhouse_button_color', farmhouse_get_default_button_color() );
	$primary_color         = get_theme_mod( 'farmhouse_primary_color', farmhouse_get_default_primary_color() );
	$accent_color          = get_theme_mod( 'farmhouse_accent_color', farmhouse_get_default_accent_color() );
	$body_color            = get_theme_mod( 'farmhouse_body_color', farmhouse_get_default_body_color() );
	$button_color_contrast = farmhouse_color_contrast( $button_color );
	$primary_color_contrast = farmhouse_color_contrast( $primary_color );

	$css = <<<CSS
.site-container .has-theme-primary-color,
.site-container .wp-block-button .wp-block-button__link.has-theme-primary-color,
.site-container .wp-block-button.is-style-outline .wp-block-button__link.has-theme-primary-color {
	color: $primary_color;
}

.site-container .has-theme-primary-background-color,
.site-container .wp-block-button .wp-block-button__link.has-theme-primary-background-color,
.site-container .wp-block-pullquote.is-style-solid-color.has-theme-primary-background-color {
	background-color: $primary_color;
	color: $primary_color_contrast;
}

.site-container .has-theme-secondary-color,
.site-container .wp-block-button .wp-block-button__link.has-theme-secondary-color,
.site-container .wp-block-button.is-style-outline .wp-block-button__link.has-theme-secondary-color {
	color: $accent_color;
}

.site-container .has-theme-secondary-background-color,
.site-container .wp-block-button .wp-block-button__link.has-theme-secondary-background-color,
.site-container .wp-block-pullquote.is-style-solid-color.has-theme-secondary-background-color {
	background-color: $accent_color;
}

.site-container .has-theme-third-color,
.site-container .wp-block-button .wp-block-button__link.has-theme-third-color,
.site-container .wp-block-button.is-style-outline .wp-block-button__link.has-theme-third-color {
	color: $body_color;
}

.site-container .has-theme-third-background-color,
.site-container .wp-block-button .wp-block-button__link.has-theme-third-background-color,
.site-container .wp-block-pullquote.is-style-solid-color.has-theme-third-background-color {
	background-color: $body_color;
}

.site-container .wp-block-button.is-style-outline .wp-block-button__link {
	color: $button_color;
}

.site-container .has-theme-button-background-color,
.site-container .wp-block-button .wp-block-button__link.has-theme-button-background-color,
.site-container .wp-block-pullquote.is-style-solid-color.has-theme-button-background-color {
	background-color: $button_color;
}

.site-container .has-theme-button-color,
.site-container .wp-block-button .wp-block-button__link.has-theme-button-color,
.site-container .wp-block-pullquote.is-style-solid-color.has-theme-button-color {
	color: $button_color;
}

.site-container .has-theme-button-background-color,
.site-container .has-theme-button-background-color a {
	color: $button_color_contrast;
}

.site-container .wp-block-button .wp-block-button__link {
	background-color: $button_color;
}

.wp-block-button .wp-block-button__link:not(.has-background),
.wp-block-button .wp-block-button__link:not(.has-background):focus,
.wp-block-button .wp-block-button__link:not(.has-background):hover {
	color: $button_color_contrast;
}

.gb-block-post-grid header .gb-block-post-grid-title a,
.gb-block-post-grid .gb-block-post-grid-link, 
.gb-block-post-grid .gb-block-post-grid-author a, 
.gb-block-post-grid a.gb-text-link {
	color: $body_color;
}

.site-container hr.wp-block-separator {
	border-top-color: $body_color;
}

CSS;

	wp_add_inline_style( genesis_get_theme_handle() . '-gutenberg', $css );

}

add_action( 'enqueue_block_editor_assets', 'farmhouse_custom_gutenberg_admin_css' );
/**
 * Output back-end inline styles for link state.
 *
 * Causes the custom color to apply to elements with the Gutenberg editor.
 * The custom color is set in the Customizer in the Colors panel.
 *
 * Note this will appear before the style-editor.css injected by JavaScript,
 * so overrides will need to have higher specificity.
 *
 * @since 1.0.0
 */
function farmhouse_custom_gutenberg_admin_css() {

	$custom_color          = get_theme_mod( 'farmhouse_link_color', farmhouse_get_default_link_color() );
	$button_color          = get_theme_mod( 'farmhouse_button_color', farmhouse_get_default_button_color() );
	$primary_color         = get_theme_mod( 'farmhouse_primary_color', farmhouse_get_default_primary_color() );
	$accent_color          = get_theme_mod( 'farmhouse_accent_color', farmhouse_get_default_accent_color() );
	$body_color            = get_theme_mod( 'farmhouse_body_color', farmhouse_get_default_body_color() );
	$button_color_contrast = farmhouse_color_contrast( $button_color );
	$primary_color_contrast = farmhouse_color_contrast( $primary_color );

	$css = <<<CSS
.editor-styles-wrapper .wp-block-pullquote.is-style-solid-color.has-theme-primary-background-color {
	background-color: $custom_color;
}

.editor-styles-wrapper .editor-rich-text .button,
.editor-styles-wrapper .wp-block-button .wp-block-button__link:not(.has-background),
.editor-styles-wrapper .wp-block-button__link {
	background-color: $button_color;
}

.editor-styles-wrapper p,
.editor-styles-wrapper h1,
.editor-styles-wrapper h2,
.editor-styles-wrapper h3,
.editor-styles-wrapper h4,
.editor-styles-wrapper h5,
.editor-styles-wrapper h6,
.editor-styles-wrapper .editor-post-title__block .editor-post-title__input,
.editor-styles-wrapper .gb-block-post-grid header .gb-block-post-grid-title a,
.editor-styles-wrapper .wp-block-preformatted pre,
.editor-styles-wrapper .wp-block-verse pre {
	color: $body_color;
}

.editor-styles-wrapper,
.editor-styles-wrapper a {
	color: $body_color !important;
}

.editor-styles-wrapper hr.wp-block-separator {
	border-top-color: $body_color !important;
}

.editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link {
	color: $button_color;
}

CSS;

	wp_add_inline_style( genesis_get_theme_handle() . '-gutenberg-fonts', $css );

}
