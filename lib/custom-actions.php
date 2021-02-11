<?php
/**
 * Farmhouse Theme.
 *
 * This file adds the Customizer additions to the Farmhouse Theme.
 *
 * @package Farmhouse Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

$childthemesettings = genesis_get_config( 'child-theme-settings' )[ GENESIS_SETTINGS_FIELD ];

/**
 * Custom Actions call function.
 */
function farmhouse_custom_actions() {
	global $childthemesettings;

	if ( is_home() || is_archive() || is_search() ) {

		$show_info = get_theme_mod( 'farmhouse_archive_show_info', $childthemesettings['content_archive_show_info'] );
		if ( ! $show_info ) {
			// remove post info from archive.
			remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
		}

		$show_content = get_theme_mod( 'farmhouse_archive_show_content', $childthemesettings['content_archive_show_content'] );
		if ( ! $show_content ) {
			// remove content from archive.
			remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
		}

		$show_meta = get_theme_mod( 'farmhouse_archive_show_meta', $childthemesettings['content_archive_show_meta'] );

		if ( ! $show_meta ) {
			// remove meta footer from archive.
			remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
			remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
			remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );
		}
		$image_position = get_theme_mod( 'farmhouse_archive_image_position', $childthemesettings['content_archive_image_position'] );
		if ( 'before-title' === $image_position ) {

			remove_action( 'genesis_entry_content', 'genesis_do_post_image', 12 );
			remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );

			add_action( 'genesis_entry_header', 'genesis_do_post_image', 7 );

		} elseif ( 'after-title' === $image_position ) {

			remove_action( 'genesis_entry_content', 'genesis_do_post_image', 12 );
			remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );

			add_action( 'genesis_entry_content', 'genesis_do_post_image', 9 );
		}
		if ( 1 === $show_meta ) {
			$meta_position = get_theme_mod( 'farmhouse_archive_meta_position', $childthemesettings['content_archive_meta_position'] );
			if ( 'before-title' === $meta_position ) {

				// remove meta footer from archive.
				remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
				remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
				remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );

				add_action( 'genesis_entry_header', 'genesis_post_meta', 7 );

			} elseif ( 'after-title' === $meta_position ) {

				remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
				remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
				remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );
				add_action( 'genesis_entry_header', 'genesis_post_meta', 12 );
			}

			add_filter( 'genesis_post_meta', 'farmhouse_meta_text', 999 );
			add_filter( 'genesis_post_info', 'farmhouse_info_text', 999 );
		}
	}

	if ( is_singular( 'post' ) ) {

					add_action( 'genesis_before_comments', 'farmhouse_move_comments' );

	}

	// Modify breadcrumb arguments.
	add_filter( 'genesis_breadcrumb_args', 'farmhouse_breadcrumb_args' );

}

/**
 * Update Breadcrumb Args
 *
 * @param  array $args Arguments for Breadcumb.
 * @return array modified $args Arguments for Breadcumb.
 */
function farmhouse_breadcrumb_args( $args ) {
	global $childthemesettings;

	$args['sep'] = ' ' . get_theme_mod( 'farmhouse_breadcrumb_sep', $childthemesettings['breadcrumb_sep'] ) . ' ';

	$args['labels']['prefix'] = get_theme_mod( 'farmhouse_breadcrumb_text', $childthemesettings['breadcrumb_text'] ) . ' ';

	return $args;
}

/**
 * Update Archive Post Info
 *
 * @param  string $info info for post.
 * @return string modified $info.
 */
function farmhouse_info_text( $info ) {
	global $childthemesettings;

	$info = do_shortcode( get_theme_mod( 'farmhouse_archive_info_text', $childthemesettings['content_archive_info_text'] ) );

	return $info;
}

/**
 * Update Archive Post Meta
 *
 * @param  string $meta meta for post.
 * @return string modified $meta.
 */
function farmhouse_meta_text( $meta ) {
	global $childthemesettings;

	$meta = do_shortcode( get_theme_mod( 'farmhouse_archive_meta_text', $childthemesettings['content_archive_meta_text'] ) );

	return $meta;
}


add_action( 'genesis_before_header', 'farmhouse_custom_actions' );

// child theme settings update.
add_filter( 'genesis_options', 'farmhouse_theme_settings_defaults', 10, 2 );

/**
 * Set Defaults to Theme
 *
 * @since 1.0.0
 *
 * @param  array $options Theme Options.
 * @param  array $setting Theme Settings.
 * @return array Modified Theme Options.
 */
function farmhouse_theme_settings_defaults( $options, $setting ) {
	global $childthemesettings;

	if ( GENESIS_SETTINGS_FIELD === $setting ) {

		$enable_thumbnail = isset( $options['content_archive_thumbnail'] ) ? $options['content_archive_thumbnail'] : $childthemesettings['content_archive_thumbnail'];

		$image_size = isset( $options['image_size'] ) ? $options['image_size'] : $childthemesettings['content_archive_image_size'];

		$options['content_archive_thumbnail'] = $enable_thumbnail;
		$options['image_size']                = $image_size;

	}
	return $options;
}




add_filter( 'loop_shop_columns', 'farmhouse_loop_columns', 999 );

if ( ! function_exists( 'loop_columns' ) ) {
	/**
	 * Change number or products per row to 3
	 */
	function farmhouse_loop_columns() {

		global $childthemesettings;

		return $childthemesettings['woocommerce_products_per_row']; // 3 products per row
	}
}


/**
 * Move Comments after Comment Form
 */
function farmhouse_move_comments() {
	if ( have_comments() ) {
		remove_action( 'genesis_comment_form', 'genesis_do_comment_form' );
		add_action( 'genesis_comments', 'genesis_do_comment_form', 5 );
	}
}

/**
 * Add the options from 'entry', since this replaces the main entry
 *
 * @param  array $options Existing attributes.
 * @return array Amended options.
 */
function farmhouse_genesis_pre_get_option_site_layout( $options ) {
	global $childthemesettings;

	if ( is_home() || is_archive() || is_search() ) {

		$fullwidthlayout = get_theme_mod( 'farmhouse_archive_full_width_content', $childthemesettings['content_archive_full_width'] );
		if ( $fullwidthlayout ) {
			return 'full-width-content';
		}
	}
}
// Add filter to make archive full width.
add_filter( 'genesis_pre_get_option_site_layout', 'farmhouse_genesis_pre_get_option_site_layout' );


/**
 * Customize Read More Text
*/
add_filter( 'excerpt_more', 'farmhouse_read_more_link' );
add_filter( 'get_the_content_more_link', 'farmhouse_read_more_link' );
add_filter( 'the_content_more_link', 'farmhouse_read_more_link' );
/**
 * Function to change read more link text
 */
function farmhouse_read_more_link() {
	global $childthemesettings;

	if ( is_home() || is_archive() || is_search() ) {

		$more_text = get_theme_mod( 'farmhouse_more_text', $childthemesettings['read_more_text'] );

		return '<a href="' . get_permalink() . '" rel="nofollow" class="more-link" >' . $more_text . '</a>';
	}
}
