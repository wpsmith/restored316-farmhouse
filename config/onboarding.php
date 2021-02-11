<?php
/**
 * Farmhouse Theme.
 *
 * Onboarding config to load plugins and homepage content on theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Farmhouse Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

$farmhouse_shared_content = genesis_get_config( 'onboarding-shared' );

return [
	'starter_packs' => [
		'home1'            => [
			'title'       => __( 'Install Farmhouse - ALL home page options', 'farmhouse-theme' ),
			'description' => __( 'After installation, you can select other home page options. ', 'farmhouse-theme' ),
			'thumbnail'   => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/farmhouse-home.jpg',
			'demo_url'    => 'https://demos.restored316designs.com/farmhouse/',
			'config'      => [
				'dependencies'     => [
					'plugins' => $farmhouse_shared_content['plugins'],
				],
				'content'          => array_merge(
					[
						'homepage' => [
							'post_title'     => 'Homepage',
							'post_content'   => require dirname( __FILE__ ) . '/import/content/home1.php',
							'post_type'      => 'page',
							'post_status'    => 'publish',
							'comment_status' => 'closed',
							'ping_status'    => 'closed',
							'meta_input'     => [
								'_genesis_layout'     => 'full-width-content',
								'_genesis_hide_title' => true,
								'_genesis_hide_breadcrumbs' => true,
								'_genesis_hide_singular_image' => true,
							],
						],
					],
					$farmhouse_shared_content['content']
				),
				'navigation_menus' => $farmhouse_shared_content['navigation_menus'],
				'widgets'          => $farmhouse_shared_content['widgets'],
			],
		],
	],
];
