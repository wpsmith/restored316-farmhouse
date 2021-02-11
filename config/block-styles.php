<?php
/**
 * Block styles specific to Farmhouse Pro.
 *
 * @package Farmhouse
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/farmhouse/
 */

return [
	'core/button'                 => [
		[
			'name'  => 'button-line',
			'label' => __( 'Button Line', 'farmhouse-theme' ),
		],
	],
	'core/heading'                => [
		[
			'name'         => 'xl-text',
			'label'        => __( 'Extra Large', 'farmhouse-theme' ),
			'inline_style' => '.is-style-xl-text, .editor-styles-wrapper .is-style-xl-text { font-size: 80px; }',
		],
		[
			'name'         => 'small-text',
			'label'        => __( 'Small Capitals', 'farmhouse-theme' ),
			'inline_style' => '.is-style-small-text, .editor-styles-wrapper .is-style-small-text { font-family: Montserrat, sans-serif; font-weight: 500; font-size: 11px; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 10px;}',
		],
		[
			'name'         => 'script-text',
			'label'        => __( 'Script', 'farmhouse-theme' ),
			'inline_style' => '.is-style-script-text, .editor-styles-wrapper .is-style-script-text { font-family: "Monologue", sans-serif; font-size: 80px;}',
		],
	],
	'core/image'                  => [
		[
			'name'  => 'shadow-style',
			'label' => __( 'Solid Shadow Style', 'farmhouse-theme' ),
		],
		[
			'name'  => 'offset-border-style',
			'label' => __( 'Offset Border Style', 'farmhouse-theme' ),
		],
		[
			'name'  => 'boxshadow-style',
			'label' => __( 'Boxshadow Style', 'farmhouse-theme' ),
		],
	],
	'core/paragraph'              => [
		[
			'name'         => 'highlight-text',
			'label'        => __( 'Heading Font', 'farmhouse-theme' ),
			'inline_style' => 'p.is-style-highlight-text { font-family: Freight, serif; font-weight: 300; line-height: 1.6; }',
		],
		[
			'name'         => 'capital-text',
			'label'        => __( 'Capitals', 'farmhouse-theme' ),
			'inline_style' => '.is-style-capital-text, .editor-styles-wrapper .is-style-capital-text { font-family: Montserrat, sans-serif; font-size: 11px; font-weight: 500; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 10px;}',
		],
		[
			'name'         => 'script-text',
			'label'        => __( 'Script', 'farmhouse-theme' ),
			'inline_style' => '.is-style-script-text, .editor-styles-wrapper .is-style-script-text { font-family: "Monologue", sans-serif; font-size: 80px;}',
		],
	],
	'genesis-blocks/gb-column'    => [
		[
			'name'  => 'offset-up',
			'label' => __( 'Upward Offset', 'farmhouse-theme' ),
		],
		[
			'name'  => 'offset-down',
			'label' => __( 'Downward Offset', 'farmhouse-theme' ),
		],
		[
			'name'  => 'offset-left',
			'label' => __( 'Offset Left', 'farmhouse-theme' ),
		],
		[
			'name'  => 'border',
			'label' => __( 'Border', 'farmhouse-theme' ),
		],
		[
			'name'  => 'black-border',
			'label' => __( 'Black Inset Border', 'farmhouse-theme' ),
		],
	],
	'genesis-blocks/gb-container' => [
		[
			'name'  => 'angled-underlay',
			'label' => __( 'Angled Underlay', 'farmhouse-theme' ),
		],
	],
	'genesis-blocks/gb-post-grid' => [
		[
			'name'  => 'overlay',
			'label' => __( 'Title Overlay', 'farmhouse-theme' ),
		],
	],
];
