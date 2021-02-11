<?php
/**
 * Farmhouse Theme.
 *
 * Onboarding config shared between Starter Packs.
 *
 * Starter Packs give you a choice of content variation when activating
 * the theme. The content below is common to all packs for this theme.
 *
 * @package Farmhouse Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

return [
	'plugins'          => [
		[
			'name'       => __( 'Genesis Blocks', 'farmhouse-theme' ),
			'slug'       => 'genesis-blocks/genesis-blocks.php',
			'public_url' => 'https://wordpress.org/plugins/genesis-blocks/',
		],
		[
			'name'       => __( 'Simple Social Icons', 'farmhouse-theme' ),
			'slug'       => 'simple-social-icons/simple-social-icons.php',
			'public_url' => 'https://wordpress.org/plugins/simple-social-icons/',
		],
		[
			'name'       => __( 'Genesis eNews Extended', 'farmhouse-theme' ),
			'slug'       => 'genesis-enews-extended/plugin.php',
			'public_url' => 'https://wordpress.org/plugins/genesis-enews-extended/',
		],
		[
			'name'       => __( 'WPForms Lite', 'farmhouse-theme' ),
			'slug'       => 'wpforms-lite/wpforms.php',
			'public_url' => 'https://wordpress.org/plugins/wpforms-lite/',
		],
		[
			'name'       => __( 'WP Recipe Maker', 'farmhouse-theme' ),
			'slug'       => 'wp-recipe-maker/wp-recipe-maker.php',
			'public_url' => 'https://wordpress.org/plugins/wp-recipe-maker/',
		],
		[
			'name'       => __( 'Related Posts for WordPress', 'farmhouse-theme' ),
			'slug'       => 'related-posts-for-wp/related-posts-for-wp.php',
			'public_url' => 'https://wordpress.org/plugins/related-posts-for-wp/',
		],
		[
			'name'       => __( 'Smash Balloon Social Photo Feed', 'farmhouse-theme' ),
			'slug'       => 'instagram-feed/instagram-feed.php',
			'public_url' => 'https://wordpress.org/plugins/instagram-feed/',
		],
	],
	'content'          => [
		'home2' => [
			'post_title'     => 'Home Option #2',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/home2.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_title' 		   => true,
				'_genesis_hide_singular_image' => true,
				'_genesis_custom_body_class' => 'custom-header',
			],
		],
		'home3' => [
			'post_title'     => 'Home Option #3',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/home3.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_title' 		   => true,
				'_genesis_hide_singular_image' => true,
				'_genesis_custom_body_class' => 'custom-header',
			],
		],
		'home4' => [
			'post_title'     => 'Home Option #4',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/home4.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_title' 		   => true,
				'_genesis_hide_singular_image' => true,
			],
		],
		'pricing' => [
			'post_title'     => 'Pricing Page',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/pricing-page.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_title' 		   => true,
				'_genesis_hide_singular_image' => true,
			],
		],
		'about'   => [
			'post_title'     => 'About',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/about.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_title' 		   => true,
				'_genesis_hide_singular_image' => true,
			],
		],
		'sales-page'   => [
			'post_title'     => 'Sales Page',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/sales-page.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/landing.php',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_title' 		   => true,
				'_genesis_hide_singular_image' => true,
			],
		],
		'contact' => [
			'post_title'     => 'Contact Us',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/contact.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		],
		'category-index' => [
			'post_title'     => 'Category Index',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/category-index.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_title' 		   => true,
				'_genesis_hide_singular_image' => true,
			],
		],
		'landing' => [
			'post_title'     => 'Landing Page',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/landing-page.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/landing.php',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_breadcrumbs'    => true,
				'_genesis_hide_title' 		   => true,
				'_genesis_hide_singular_image' => true,
			],
		],
		'instagram' => [
			'post_title'     => 'Instagram',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/instagram.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/landing.php',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_breadcrumbs'    => true,
				'_genesis_hide_title' 		   => true,
				'_genesis_hide_singular_image' => true,
			],
		],
	],
	'navigation_menus' => [
		'header-left'   => [
			'homepage' => [
				'title' => 'Home',
			],
			'about'    => [
				'title' => 'About',
			],
			'contact'  => [
				'title' => 'Contact',
			],
		],
		'header-right'   => [
			'category-index'  => [
				'title' => 'Category Index',
			],
			'sales-page'  => [
				'title' => 'Sales Page',
			],
			'pricing'  => [
				'title' => 'Pricing',
			],
		],
	],
	'widgets'          => [
		'sidebar' => [
			[
				'type' => 'text',
				'args' => [
					'title'   => 'Hey! It is nice to meet you!',
					'content' => 'UPLOAD YOUR IMAGE HERE. <br> Write something here about yourself!',
					'filter'  => 1,
					'visual'  => 1,
				],
			],
			[
				'type' => 'simple-social-icons',
				'args' => [
					'title'                  => '',
					'size'                   => '28',
					'border_radius'          => '0',
					'border_width'           => '0',
					'alignment'              => 'aligncenter',
					'icon_color'             => '#000000',
					'icon_color_hover'       => '#dcb8ad',
					'background_color'       => 'transparent',
					'background_color_hover' => 'transparent',
					'facebook'               => '#',
					'instagram'              => '#',
					'pinterest'              => '#',
					'twitter'                => '#',
					'filter'                 => 1,
					'visual'                 => 1,
				],
			],
			[
				'type' => 'enews-ext',
				'args' => [
					'title'       => 'Never miss a post',
					'text'        => '',
					'fname-field' => 'FNAME',
					'email-field' => 'EMAIL',
					'fname_text'  => 'First Name',
					'input_text'  => 'Email',
					'button_text' => 'Join the Others!',
					'action'      => '#',
					'filter'      => 1,
					'visual'      => 1,
				],
			],
			[
				'type' => 'categories',
				'args' => [
					'title'  => 'Search by Category',
					'dropdown' => 1,
					'filter' => 1,
					'visual' => 1,
				],
			],
			[
				'type' => 'search',
				'args' => [
					'title'  => '',
					'filter' => 1,
					'visual' => 1,
				],
			],
		],
		'nav-social-menu' => [
			[
				'type' => 'simple-social-icons',
				'args' => [
					'title'                  => '',
					'size'                   => '28',
					'border_radius'          => '0',
					'border_width'           => '0',
					'alignment'              => 'aligncenter',
					'icon_color'             => '#000000',
					'icon_color_hover'       => '#dcb8ad',
					'background_color'       => 'transparent',
					'background_color_hover' => 'transparent',
					'facebook'               => '#',
					'instagram'              => '#',
					'pinterest'              => '#',
					'twitter'                => '#',
					'filter'                 => 1,
					'visual'                 => 1,
				],
			],
		],
		'before-footer-insta' => [
			[
				'type' => 'custom_html',
				'args' => [
					'title'   => '',
					'content' => '[instagram-feed num=7 cols=7 showheader=false showbutton=false showfollow=false]',
					'filter'  => 1,
					'visual'  => 1,
				],
			],
		],
		'block-sidebar' => [
			[
				'type' => 'text',
				'args' => [
					'title'   => 'Hey! It is nice to meet you!',
					'content' => 'UPLOAD YOUR IMAGE HERE. <br> Write something here about yourself!',
					'filter'  => 1,
					'visual'  => 1,
				],
			],
			[
				'type' => 'simple-social-icons',
				'args' => [
					'title'                  => '',
					'size'                   => '28',
					'border_radius'          => '0',
					'border_width'           => '0',
					'alignment'              => 'aligncenter',
					'icon_color'             => '#000000',
					'icon_color_hover'       => '#dcb8ad',
					'background_color'       => 'transparent',
					'background_color_hover' => 'transparent',
					'facebook'               => '#',
					'instagram'              => '#',
					'pinterest'              => '#',
					'twitter'                => '#',
					'filter'                 => 1,
					'visual'                 => 1,
				],
			],
			[
				'type' => 'enews-ext',
				'args' => [
					'title'       => 'Never miss a post',
					'text'        => '',
					'fname-field' => 'FNAME',
					'email-field' => 'EMAIL',
					'fname_text'  => 'First Name',
					'input_text'  => 'Email',
					'button_text' => 'Join the Others!',
					'action'      => '#',
					'filter'      => 1,
					'visual'      => 1,
				],
			],
			[
				'type' => 'categories',
				'args' => [
					'title'  => 'Search by Category',
					'dropdown' => 1,
					'filter' => 1,
					'visual' => 1,
				],
			],
			[
				'type' => 'search',
				'args' => [
					'title'  => '',
					'filter' => 1,
					'visual' => 1,
				],
			],
		],
	],
];
