<?php
/**
 * Farmhouse Theme.
 *
 * This file adds functions to the farmhouse Theme.
 *
 * @package Farmhouse Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

// Starts the engine.
require_once get_template_directory() . '/lib/init.php';

// Sets up the Theme.
require_once CHILD_DIR . '/lib/theme-defaults.php';

add_action( 'after_setup_theme', 'farmhouse_localization_setup' );
/**
 * Sets localization (do not remove).
 *
 * @since 1.0.0
 */
function farmhouse_localization_setup() {

    load_child_theme_textdomain( 'farmhouse-theme', CHILD_DIR . '/languages' );

}

// Adds helper functions.
require_once CHILD_DIR . '/lib/helper-functions.php';

// Adds image upload and color select to Customizer.
require_once CHILD_DIR . '/lib/customize.php';

// Includes Customizer CSS.
require_once CHILD_DIR . '/lib/output.php';

// Adds Custom Actions functions.
require_once CHILD_DIR . '/lib/custom-actions.php';

// Adds WooCommerce support.
require_once CHILD_DIR . '/lib/woocommerce/woocommerce-setup.php';

// Adds the required WooCommerce styles and Customizer CSS.
require_once CHILD_DIR . '/lib/woocommerce/woocommerce-output.php';

// Adds the Genesis Connect WooCommerce notice.
require_once CHILD_DIR . '/lib/woocommerce/woocommerce-notice.php';

// Adds responsive menus support for CLS.
require_once CHILD_DIR . '/lib/responsive-menus.php';
new WPS\WP\Themes\Genesis\Menus\ResponsiveMenus( farmhouse_responsive_menu_settings() );

// Speed up fonts.
require_once CHILD_DIR . '/lib/fonts.php';

add_action( 'after_setup_theme', 'genesis_child_gutenberg_support' );
/**
 * Adds Gutenberg opt-in features and styling.
 *
 * @since 1.0.0
 */
function genesis_child_gutenberg_support() { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedFunctionFound -- using same in all child themes to allow action to be unhooked.
    require_once CHILD_DIR . '/lib/gutenberg/init.php';
}

add_action( 'wp_enqueue_scripts', 'farmhouse_enqueue_scripts_styles' );
/**
 * Enqueues scripts and styles.
 *
 * @since 1.0.0
 */
function farmhouse_enqueue_scripts_styles() {

    wp_enqueue_style(
            genesis_get_theme_handle() . '-fonts',
            '//fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Nanum+Myeongjo:wght@400;800&display=swap',
            [],
            null
    );

    wp_enqueue_style( 'dashicons' );

    wp_enqueue_script(
            'farmhouse-block-effects',
            get_stylesheet_directory_uri() . '/assets/js/block-effects.js',
            array(),
            filemtime( get_stylesheet_directory() . '/assets/js/block-effects.js' ),
            true
    );

    $suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
    wp_enqueue_script(
            genesis_get_theme_handle() . '-smooth-scroll',
            get_stylesheet_directory_uri() . '/assets/js/smooth-scroll.js',
            [ 'jquery' ],
            filemtime( get_stylesheet_directory() . "/assets/js/smooth-scroll{$suffix}.js" ),
            true
    );

    if ( class_exists( 'FacetWP' ) ) {
        wp_enqueue_style(
                genesis_get_theme_handle() . '-facetwp',
                get_stylesheet_directory_uri() . '/lib/facetwp/facetwp.css',
                [ genesis_get_theme_handle() ],
                genesis_get_theme_version()
        );
    }

    // Setup page if has top banner.
    if ( get_theme_mod( 'farmhouse-top-banner-visibility', true ) ) {

        wp_enqueue_script(
                'top-banner-js',
                get_stylesheet_directory_uri() . "/assets/js/top-banner{$suffix}.js",
                array( 'jquery' ),
                filemtime( get_stylesheet_directory() . "/assets/js/top-banner{$suffix}.js" ),
                true
        );

    }

}

add_action( 'body_class', 'farmhouse_top_banner_classes' );
/**
 * Adds top-banner body classes.
 *
 * @param array $classes Current classes.
 *
 * @return array The new classes.
 * @since 1.0.0
 *
 */
function farmhouse_top_banner_classes( $classes ) {

    if ( get_theme_mod( 'farmhouse-top-banner-visibility', true ) && ! isset( $_COOKIE['top-banner-hidden'] ) ) {

        $classes[] = 'top-banner-hidden';

        if ( is_customize_preview() ) {
            $classes[] = 'customizer-preview';
        }
    }

    return $classes;

}

/**
 * Defines our responsive menu settings.
 *
 * @since 1.0.0
 */
function farmhouse_responsive_menu_settings() {

    $settings = array(
            'mainMenu'          => __( 'Menu', 'farmhouse-theme' ),
            'menuIconClass'     => 'dashicons-before dashicons-menu',
            'subMenu'           => __( 'Submenu', 'farmhouse-theme' ),
            'subMenuIconsClass' => 'dashicons-before dashicons-arrow-down-alt2',
            'menuClasses'       => array(
                    'combine' => array(
                            '.nav-primary',
                            '.nav-header',
                            '.nav-header-left',
                            '.nav-header-right',
                            '.nav-secondary',
                    ),
                    'others'  => array(
                            '.nav-footer',
                    ),
            ),
            'addMenuButtons'    => false,
    );

    return $settings;

}

// Repositions the primary farmhouse menu.
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_before_header', 'genesis_do_nav', 7 );

add_filter( 'wp_nav_menu_items', 'farmhouse_primary_nav_extras', 10, 2 );
/**
 * Adds search form to farmhouse.
 *
 * @param string $menu HTML string representing the menu items.
 * @param stdClass $args An object containing menu arguments.
 *
 * @return string   $menu Updated $menu string.
 * @since 1.0.0
 *
 */
function farmhouse_primary_nav_extras( $menu, $args ) {
    if ( 'primary' !== $args->theme_location ) {
        return $menu;
    }

    ob_start();
    get_search_form();
    $search = ob_get_clean();
    $menu   .= '<li class="right search">' . $search . '</li>';

    return $menu;
}

add_filter( 'genesis_nav_items', 'farmhouse_social_icons', 10, 2 );
add_filter( 'wp_nav_menu_items', 'farmhouse_social_icons', 10, 2 );
/**
 * Adds widget to primary farmhouse.
 *
 * @param string $menu HTML string representing the menu items.
 * @param stdClass $args An object containing menu arguments.
 *
 * @return string   $menu Updated $menu string.
 * @since 1.0.0
 *
 */
function farmhouse_social_icons( $menu, $args ) {
    $args = (array) $args;
    if ( 'primary' !== $args['theme_location'] ) {
        return $menu;
    }
    ob_start();
    genesis_widget_area( 'nav-social-menu' );
    $social = ob_get_clean();

    return $menu . $social;
}

add_action( 'genesis_header', 'farmhouse_header_left_menu', 6 );
/**
 * Hooks menu to left of logo.
 *
 * @since 1.0.0
 */
function farmhouse_header_left_menu() {
    genesis_nav_menu(
            array(
                    'theme_location' => 'header-left',
                    'depth'          => 2,
            )
    );
}

add_action( 'genesis_header', 'farmhouse_header_right_menu', 9 );
/**
 * Hooks menu to right of logo.
 *
 * @since 1.0.0
 */
function farmhouse_header_right_menu() {
    genesis_nav_menu(
            array(
                    'theme_location' => 'header-right',
                    'depth'          => 2,
            )
    );
}

//* Hook menu in footer
add_action( 'genesis_footer', 'farmhouse_footer_menu', 7 );
function farmhouse_footer_menu() {
    genesis_nav_menu( array(
            'theme_location' => 'footer',
            'depth'          => 1,
    ) );
}

add_action( 'after_setup_theme', 'farmhouse_theme_support', 9 );
/**
 * Add desired theme supports.
 *
 * See config file at `config/theme-supports.php`.
 *
 * @since 1.2.0
 */
function farmhouse_theme_support() {

    $theme_supports = genesis_get_config( 'theme-supports' );

    foreach ( $theme_supports as $feature => $args ) {
        add_theme_support( $feature, $args );
    }

}

add_action( 'after_setup_theme', 'farmhouse_post_type_support', 9 );
/**
 * Add desired post type supports.
 *
 * See config file at `config/post-type-supports.php`.
 *
 * @since 1.2.0
 */
function farmhouse_post_type_support() {

    $post_type_supports = genesis_get_config( 'post-type-supports' );

    foreach ( $post_type_supports as $post_type => $args ) {
        add_post_type_support( $post_type, $args );
    }

}

// Adds image sizes.
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'vertical-entry-image', 400, 600, true );
    add_image_size( 'horizontal-entry-image', 900, 600, true );
    add_image_size( 'genesis-singular-images', 1280, 400, true );
}

add_filter( 'image_size_names_choose', 'farmhouse_image_sizes' );
function farmhouse_image_sizes( $sizes ) {
    $addsizes = array(
            'vertical-entry-image'   => __( 'Vertical Entry Image', 'farmhouse-theme' ),
            'horizontal-entry-image' => __( 'Horizontal Entry Image', 'farmhouse-theme' )
    );
    $newsizes = array_merge( $sizes, $addsizes );

    return $newsizes;
}

// Removes secondary sidebar.
unregister_sidebar( 'sidebar-alt' );

// Removes site layouts.
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );

//* Load Entry Farmhouse
add_action( 'genesis_after_entry', 'genesis_prev_next_post_nav', 1 );

//* Change featured image size on Related Posts
add_filter( 'rp4wp_thumbnail_size', 'rp4wp_example_my_thumbnail_size' );
function rp4wp_example_my_thumbnail_size( $thumb_size ) {
    return 'vertical-entry-image';
}

// Reposition featured image on single posts
remove_action( 'genesis_entry_content', 'genesis_do_singular_image', 8 );
add_action( 'genesis_before_content', 'genesis_do_singular_image' );

add_filter( 'genesis_author_box_gravatar_size', 'farmhouse_author_box_gravatar' );
/**
 * Modifies size of the Gravatar in the author box.
 *
 * @param int $size Original icon size.
 *
 * @return int Modified icon size.
 * @since 1.0.0
 *
 */
function farmhouse_author_box_gravatar( $size ) {

    return 120;

}

add_filter( 'genesis_comment_list_args', 'farmhouse_comments_gravatar' );
/**
 * Modifies size of the Gravatar in the entry comments.
 *
 * @param array $args Gravatar settings.
 *
 * @return array Gravatar settings with modified size.
 * @since 1.0.0
 *
 */
function farmhouse_comments_gravatar( $args ) {

    $args['avatar_size'] = 60;

    return $args;

}

add_action( 'genesis_before_footer', 'farmhouse_before_footer_insta', 12 );
/**
 * Hooks in before footer Instagram widget area.
 *
 * @since 1.0.0
 */
function farmhouse_before_footer_insta() {

    genesis_widget_area(
            'before-footer-insta',
            array(
                    'before' => '<div class="before-footer-insta"><div class="wrap">',
                    'after'  => '</div></div>',
            )
    );

}

add_action( 'genesis_before', 'farmhouse_do_top_banner' );
/**
 * Output the Top Banner if visible.
 *
 * @since 1.0.0
 */
function farmhouse_do_top_banner() {

    if ( get_theme_mod( 'farmhouse-top-banner-visibility', true ) ) {

        $button = sprintf( '<button id="farmhouse-top-banner-close"><span class="dashicons dashicons-no-alt"></span><span class="screen-reader-text">%s</span></button>', __( 'Close Top Banner', 'farmhouse-theme' ) );
        printf(
                '<div class="farmhouse-top-banner"><div class="farmhouse-top-banner-inner">%s</div>%s</div>',
                get_theme_mod( 'farmhouse-top-banner-text', farmhouse_get_default_top_banner_text() ),
                $button
        );

    }

}

add_shortcode( 'get_sidebar', 'sidebar_shortcode' );
/**
 * Get Sidebar function.
 *
 * @param array $atts Passed Arguments to Shortcode.
 * @param string $content Passed content between opening and closing shortcode.
 *
 * @return html Sidebar.
 * @since 1.0.0
 *
 */
function sidebar_shortcode( $atts, $content = 'null' ) {
    $allatts = shortcode_atts( array( 'id' => '' ), $atts );

    $id = $allatts['id'];

    ob_start();
    genesis_widget_area(
            $id,
            array(
                    'before' => "<div id=\"$id\" class=\"$id\"><div class=\"widget-area\"><div class=\"wrap\">",
                    'after'  => '</div></div></div>',
            )
    );
    $sidebar = ob_get_contents();
    ob_end_clean();

    return $sidebar;
}

/**
 * Function to select grid column class
 *
 * @param Number $grid Grid Number.
 *
 * @return string Class name for Grid.
 * @since 1.0.0
 *
 */
function farmhouse_column_class( $grid ) {
    $classname = array(
            '2' => 'one-half',
            '3' => 'one-third',
            '4' => 'one-fourth',
    );

    return $classname[ $grid ];

}

add_filter( 'post_class', 'farmhouse_post_class' );
/**
 * Function to apply class to post.
 *
 * @param array $classes Classes applied to Post.
 *
 * @return array Classes with appended new classes.
 * @since 1.0.0
 *
 */
function farmhouse_post_class( $classes ) {
    global $wp_query;

    $childthemesettings = genesis_get_config( 'child-theme-settings' )[ GENESIS_SETTINGS_FIELD ];

    if ( is_front_page() || is_singular() ) {
        return $classes;
    }

    if ( class_exists( 'woocommerce' ) ) {

        $shop = get_option( 'woocommerce_shop_page_id' );

        if ( is_post_type_archive( 'product' ) || is_product_category() || is_page( $shop ) ) {
            return $classes;
        }
    }

    $grid = get_theme_mod( 'farmhouse_archive_grid', $childthemesettings['content_archive_grid'] );

    $class = farmhouse_column_class( $grid );

    $classes[] = $class;

    if ( 0 === $wp_query->current_post % $grid ) {
        $classes[] = 'first';
    }

    return $classes;
}

// Registers widget areas.
genesis_register_sidebar( array(
        'id'          => 'nav-social-menu',
        'name'        => __( 'Nav Social Menu', 'farmhouse-theme' ),
        'description' => __( 'This is the nav social menu section.', 'farmhouse-theme' ),
) );
genesis_register_sidebar(
        array(
                'id'          => 'before-footer-insta',
                'name'        => __( 'Footer Instagram', 'farmhouse-theme' ),
                'description' => __( 'This is the before footer instagram section.', 'farmhouse-theme' ),
        ) );
genesis_register_sidebar(
        array(
                'id'          => 'block-sidebar',
                'name'        => __( 'Block Sidebar', 'farmhouse-theme' ),
                'description' => __( 'This is the front page sidebar section.', 'farmhouse-theme' ),
        )
);

