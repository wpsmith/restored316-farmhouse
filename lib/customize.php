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

add_action( 'customize_register', 'farmhouse_customizer_register' );
/**
 * Registers settings and controls with the Customizer.
 *
 * @since 1.0.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function farmhouse_customizer_register( $wp_customize ) {
	
	$childthemesettings = genesis_get_config( 'child-theme-settings' )[ GENESIS_SETTINGS_FIELD ];

	$wp_customize->add_setting(
		'farmhouse_link_color',
		[
			'default'           => farmhouse_get_default_link_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'farmhouse_link_color',
			[
				'description' => __( 'Change the hover color of linked titles, menu items, and more.', 'farmhouse-theme' ),
				'label'       => __( 'Link Color', 'farmhouse-theme' ),
				'section'     => 'colors',
				'settings'    => 'farmhouse_link_color',
			]
		)
	);
	
	$wp_customize->add_setting(
		'farmhouse_button_color',
		[
			'default'           => farmhouse_get_default_button_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'farmhouse_button_color',
			[
				'description' => __( 'Change the default background color of all buttons.', 'farmhouse-theme' ),
				'label'       => __( 'Button Color', 'farmhouse-theme' ),
				'section'     => 'colors',
				'settings'    => 'farmhouse_button_color',
			]
		)
	);
	
	$wp_customize->add_setting(
		'farmhouse_primary_color',
		[
			'default'           => farmhouse_get_default_primary_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'farmhouse_primary_color',
			[
				'description' => __( 'Change the primary color for your site.', 'farmhouse-theme' ),
				'label'       => __( 'Primary Color', 'farmhouse-theme' ),
				'section'     => 'colors',
				'settings'    => 'farmhouse_primary_color',
			]
		)
	);
	
		$wp_customize->add_setting(
		'farmhouse_banner_color',
		[
			'default'           => farmhouse_get_default_banner_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'farmhouse_banner_color',
			[
				'description' => __( 'Change the banner color for your site. This affects the Top Banner of your site only.', 'farmhouse-theme' ),
				'label'       => __( 'Banner Color', 'farmhouse-theme' ),
				'section'     => 'colors',
				'settings'    => 'farmhouse_banner_color',
			]
		)
	);

	$wp_customize->add_setting(
		'farmhouse_accent_color',
		[
			'default'           => farmhouse_get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'farmhouse_accent_color',
			[
				'description' => __( 'Change the accent color for your site.', 'farmhouse-theme' ),
				'label'       => __( 'Accent Color', 'farmhouse-theme' ),
				'section'     => 'colors',
				'settings'    => 'farmhouse_accent_color',
			]
		)
	);
	
	$wp_customize->add_setting(
		'farmhouse_body_color',
		[
			'default'           => farmhouse_get_default_body_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'farmhouse_body_color',
			[
				'description' => __( 'Change the default color for your body text and heading titles.', 'farmhouse-theme' ),
				'label'       => __( 'Body Color', 'farmhouse-theme' ),
				'section'     => 'colors',
				'settings'    => 'farmhouse_body_color',
			]
		)
	);

	$wp_customize->add_setting(
		'farmhouse_logo_width',
		[
			'default'           => 400,
			'sanitize_callback' => 'absint',
			'validate_callback' => 'farmhouse_validate_logo_width',
		]
	);

	// Adds a control for the logo size.
	$wp_customize->add_control(
		'farmhouse_logo_width',
		[
			'label'       => __( 'Logo Width', 'farmhouse-theme' ),
			'description' => __( 'The maximum width of the logo in pixels.', 'farmhouse-theme' ),
			'priority'    => 9,
			'section'     => 'title_tagline',
			'settings'    => 'farmhouse_logo_width',
			'type'        => 'number',
			'input_attrs' => [
				'min' => 100,
			],

		]
	);
		
	// Top Banner Section.
	$wp_customize->add_section(
		'farmhouse-top-banner-settings', array(
			'description' => sprintf( '<strong>%s</strong><p>%s</p>', __( 'Modify the settings for the top banner section.', 'farmhouse-theme' ), __( 'Each time the customizer is opened, the top banner will be displayed in the live preview so you can easily customize the content.', 'farmhouse-theme' ) ),
			'title'       => __( 'Top Banner Section', 'farmhouse-theme' ),
		)
	);

	$wp_customize->add_setting(
		'farmhouse-top-banner-visibility', array(
			'default'           => 1,
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'farmhouse-top-banner-visibility', array(
			'description' => __( 'Check the box to display a dismissible banner at the top of all pages.', 'farmhouse-theme' ),
			'label'       => __( 'Show Top Banner?', 'farmhouse-theme' ),
			'section'     => 'farmhouse-top-banner-settings',
			'settings'    => 'farmhouse-top-banner-visibility',
			'type'        => 'checkbox',
		)
	);

	$wp_customize->add_setting(
		'farmhouse-top-banner-text', array(
			'default'           => farmhouse_get_default_top_banner_text(),
			'sanitize_callback' => 'wp_kses_post',
			'transport'         => isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh',
		)
	);

	$wp_customize->add_control(
		'farmhouse-top-banner-text', array(
			'description' => __( 'Change the text for the dismissible banner (allows HTML).', 'farmhouse-theme' ),
			'label'       => __( 'Top Banner Text', 'farmhouse-theme' ),
			'section'     => 'farmhouse-top-banner-settings',
			'settings'    => 'farmhouse-top-banner-text',
			'type'        => 'textarea',
		)
	);

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'farmhouse-top-banner-text', array(
				'selector'        => '.farmhouse-top-banner',
				'settings'        => array( 'farmhouse-top-banner-text' ),
				'render_callback' => function() {
					return get_theme_mod( 'farmhouse-top-banner-text' );
				},
			)
		);
	}
	
	$wp_customize->add_setting(
		'farmhouse_archive_full_width_content',
		[
			'default'           => $childthemesettings['content_archive_full_width'],
			'sanitize_callback' => 'absint',
			'type'              => 'theme_mod',
		]
	);

	// Add a control for the show archive post content.
	$wp_customize->add_control(
		'farmhouse_archive_full_width_content',
		[
			'label'    => __( 'Enable Full Width', 'farmhouse-theme' ),
			'priority' => 9,
			'section'  => 'genesis_archives',
			'settings' => 'farmhouse_archive_full_width_content',
			'type'     => 'checkbox',
			'std'      => 1,

		]
	);

	$wp_customize->add_setting(
		'farmhouse_archive_grid',
		[
			'default'           => $childthemesettings['content_archive_grid'],
			'sanitize_callback' => 'absint',
		]
	);

	// Add a control for the select grid.
	$wp_customize->add_control(
		'farmhouse_archive_grid',
		[
			'label'       => __( 'Grid Column', 'farmhouse-theme' ),
			'description' => __( 'Select column for archive.', 'farmhouse-theme' ),
			'priority'    => 9,
			'section'     => 'genesis_archives',
			'settings'    => 'farmhouse_archive_grid',
			'type'        => 'select',
			'choices'     => array(
				'2' => __( '2', 'farmhouse-theme' ),
				'3' => __( '3', 'farmhouse-theme' ),
				'4' => __( '4', 'farmhouse-theme' ),
			),

		]
	);

	$wp_customize->add_setting(
		'farmhouse_archive_show_info',
		[
			'default'           => $childthemesettings['content_archive_show_info'],
			'type'              => 'theme_mod',
			'sanitize_callback' => 'absint',
		]
	);

	// Add a control for the show archive post info.
	$wp_customize->add_control(
		'farmhouse_archive_show_info',
		[
			'label'    => __( 'Show Post Info', 'farmhouse-theme' ),
			'priority' => 12,
			'section'  => 'genesis_archives',
			'settings' => 'farmhouse_archive_show_info',
			'type'     => 'checkbox',
			'std'      => 1,
		]
	);

	$wp_customize->add_setting(
		'farmhouse_archive_show_content',
		[
			'default'           => $childthemesettings['content_archive_show_content'],
			'type'              => 'theme_mod',
			'sanitize_callback' => 'absint',
		]
	);

	// Add a control for the show archive post content.
	$wp_customize->add_control(
		'farmhouse_archive_show_content',
		[
			'label'    => __( 'Show Post Content', 'farmhouse-theme' ),
			'priority' => 13,
			'section'  => 'genesis_archives',
			'settings' => 'farmhouse_archive_show_content',
			'type'     => 'checkbox',
			'std'      => 1,
		]
	);

	$wp_customize->add_setting(
		'farmhouse_archive_show_meta',
		[
			'default'           => $childthemesettings['content_archive_show_meta'],
			'type'              => 'theme_mod',
			'sanitize_callback' => 'absint',
		]
	);

	// Add a control for the show archive post meta.
	$wp_customize->add_control(
		'farmhouse_archive_show_meta',
		[
			'label'    => __( 'Show Post Meta', 'farmhouse-theme' ),
			'priority' => 14,
			'section'  => 'genesis_archives',
			'settings' => 'farmhouse_archive_show_meta',
			'type'     => 'checkbox',
			'std'      => 1,
		]
	);

	$wp_customize->add_setting(
		'farmhouse_archive_image_position',
		[
			'default'           => $childthemesettings['content_archive_image_position'],
			'sanitize_callback' => 'sanitize_text_field',
		]
	);

	// Add a control for the select grid.
	$wp_customize->add_control(
		'farmhouse_archive_image_position',
		[
			'label'    => __( 'Image Position', 'farmhouse-theme' ),
			'priority' => 20,
			'section'  => 'genesis_archives',
			'settings' => 'farmhouse_archive_image_position',
			'type'     => 'select',
			'choices'  => array(
				'after-title'  => __( 'After Title', 'farmhouse-theme' ),
				'before-title' => __( 'Before Title', 'farmhouse-theme' ),
			),
		]
	);

	$wp_customize->add_setting(
		'farmhouse_archive_meta_position',
		[
			'default'           => $childthemesettings['content_archive_meta_position'],
			'sanitize_callback' => 'sanitize_text_field',
		]
	);

	// Add a control for add meta text.
	$wp_customize->add_control(
		'farmhouse_archive_meta_position',
		[
			'label'    => __( 'Post Meta Position', 'farmhouse-theme' ),
			'priority' => 20,
			'section'  => 'genesis_archives',
			'settings' => 'farmhouse_archive_meta_position',
			'type'     => 'select',
			'choices'  => array(
				'no'           => __( 'No Changes', 'farmhouse-theme' ),
				'after-title'  => __( 'After Title', 'farmhouse-theme' ),
				'before-title' => __( 'Before Title', 'farmhouse-theme' ),
			),
		]
	);

	$wp_customize->add_setting(
		'farmhouse_archive_info_text',
		[
			'default'           => $childthemesettings['content_archive_info_text'],
			'sanitize_callback' => 'sanitize_text_field',
		]
	);

	// Add a control for info text.
	$wp_customize->add_control(
		'farmhouse_archive_info_text',
		[
			'label'    => __( 'Post Info Text', 'farmhouse-theme' ),
			'priority' => 20,
			'section'  => 'genesis_archives',
			'settings' => 'farmhouse_archive_info_text',
			'type'     => 'text',
		]
	);

	$wp_customize->add_setting(
		'farmhouse_archive_meta_text',
		[
			'default'           => $childthemesettings['content_archive_meta_text'],
			'sanitize_callback' => 'sanitize_text_field',
		]
	);

	// Add a control for meta text.
	$wp_customize->add_control(
		'farmhouse_archive_meta_text',
		[
			'label'    => __( 'Post Meta Text', 'farmhouse-theme' ),
			'priority' => 20,
			'section'  => 'genesis_archives',
			'settings' => 'farmhouse_archive_meta_text',
			'type'     => 'text',
		]
	);

	$wp_customize->add_setting(
		'farmhouse_more_text',
		[
			'default'           => $childthemesettings['read_more_text'],
			'sanitize_callback' => 'sanitize_text_field',
		]
	);

	// Add a control for meta text.
	$wp_customize->add_control(
		'farmhouse_more_text',
		[
			'label'    => __( 'Read More Text (if applied) ', 'farmhouse-theme' ),
			'priority' => 20,
			'section'  => 'genesis_archives',
			'settings' => 'farmhouse_more_text',
			'type'     => 'text',
		]
	);

}

/**
 * Displays a message if the entered width is not numeric or greater than 100.
 *
 * @param object $validity The validity status.
 * @param int    $width The width entered by the user.
 * @return int The new width.
 */
function farmhouse_validate_logo_width( $validity, $width ) {

	if ( empty( $width ) || ! is_numeric( $width ) ) {
		$validity->add( 'required', __( 'You must supply a valid number.', 'farmhouse-theme' ) );
	} elseif ( $width < 100 ) {
		$validity->add( 'logo_too_small', __( 'The logo width cannot be less than 100.', 'farmhouse-theme' ) );
	}

	return $validity;

}
