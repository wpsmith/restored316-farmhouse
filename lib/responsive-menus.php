<?php

namespace WPS\WP\Themes\Genesis\Menus;

/**
 * Class ResponsiveMenus
 */
class ResponsiveMenus {
    /**
     * Keeps whether the menu toggle button has been hooked already or not.
     *
     * @var bool
     */
    private $combined_menu_toggle_hooked = false;

    /**
     * Contains a raw copy of the menu settings.
     *
     * @var array
     */
    protected $menu_settings;

    /**
     * Contains a list of all the menus that are combined.
     *
     * @var string[]
     */
    protected $combined_menus;

    /**
     * Contains a list of all the menus.
     *
     * @var string[]
     */
    protected $all_menus;

    /**
     * Min-width media query string.
     *
     * @var string
     */
    protected $min_width;

    /**
     * ResponsiveMenus constructor.
     *
     * @param array $menu_settings Responsive Menus JS settings.
     * @param string $min_width Min width to hide menu button.
     */
    public function __construct( $menu_settings = array(), $min_width = '960px' ) {
        $this->set_menu_settings( $menu_settings );
        $this->min_width = $min_width;

        add_action( 'body_class', array( __CLASS__, 'add_body_class' ) );
        if ( function_exists( 'wp_body_open' ) ) {
            add_action( 'wp_body_open', array( __CLASS__, 'do_no_js' ), 0 );
        } else {
            add_action( 'genesis_before', array( __CLASS__, 'do_no_js' ), 0 );
        }

        add_action( 'init', array( $this, 'cls_style' ) );
        add_action( 'after_setup_theme', array( $this, 'maybe_add_nav_menus_output_filter' ) );
        add_action( 'wp_nav_menu_args', array( $this, 'maybe_add_nav_menus_attributes_filter' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'wp_enqueue_scripts' ) );
    }

    public function wp_enqueue_scripts() {

        $suffix = wp_scripts_get_suffix();
        wp_enqueue_script(
            genesis_get_theme_handle() . '-responsive-menu',
            get_stylesheet_directory_uri() . "/assets/js/responsive-menus{$suffix}.js",
            [ 'jquery' ],
            filemtime( get_stylesheet_directory() . "/assets/js/responsive-menus{$suffix}.js" ),
            true
        );

        wp_localize_script(
            genesis_get_theme_handle() . '-responsive-menu',
            'genesis_responsive_menu',
            $this->menu_settings
        );

    }

    /**
     * Sets the class paramters based on responsive menus js.
     *
     * @param array $menu_settings Associative array for responsive menus js.
     */
    protected function set_menu_settings( $menu_settings ) {
        $settings = ! empty( $menu_settings ) ? $menu_settings : array(
            'mainMenu'          => __( 'Menu' ),
            'menuIconClass'     => 'dashicons-before dashicons-menu',
            'subMenu'           => __( 'Submenu' ),
            'subMenuIconsClass' => 'dashicons-before dashicons-arrow-down-alt2',
            'menuClasses'       => array(
                'combine' => array(),
                'others'  => array(),
            ),
            'addMenuButtons'    => false,
        );

        if ( isset( $settings['menuClasses'] ) && isset( $settings['menuClasses']['combine'] ) ) {
            $this->combined_menus = array_map( array(
                __CLASS__,
                'get_nav_handle_from_nav_class'
            ), $settings['menuClasses']['combine'] );
        }

        $this->all_menus = $this->combined_menus;
        foreach ( $settings['menuClasses'] as $k => $classes ) {
            if ( 'combine' === $k ) {
                continue;
            }
            $this->all_menus = array_merge( $this->all_menus, array_map( array(
                __CLASS__,
                'get_nav_handle_from_nav_class'
            ), $classes ) );
        }

        $this->menu_settings = $settings;
        $this->all_menus = array_unique($this->all_menus);
    }

    /**
     * Removes the `.nav-` prefix from class selector.
     *
     * @param string $class Nav class name.
     *
     * @return string|string[]
     */
    public static function get_nav_handle_from_nav_class( $class ) {
        return str_replace( '.nav-', '', $class );
    }

    /**
     * Adds .no-js class body class.
     *
     * @param array $classes Current classes.
     *
     * @return array The new classes.
     *
     */
    public static function add_body_class( $classes ) {
        $classes[] = 'no-js';

        return array_unique( $classes );
    }

    /**
     * Gets the Genesis filter name for a specific menu location.
     *
     * @param string $menu_location Menu location.
     *
     * @return string
     */
    protected function get_filter_nav_menu_location( $menu_location ) {
        if ( 'primary' === $menu_location ) {
            return 'genesis_do_nav';
        } elseif ( 'secondary' === $menu_location ) {
            return 'genesis_do_subnav';
        }

        return "genesis_{$menu_location}_nav";
    }

    /**
     * Adds filters to the appropriate nav menus.
     */
    public function maybe_add_nav_menus_output_filter() {
        $menus = get_theme_support( 'genesis-menus' );

        foreach ( (array) $menus[0] as $menu => $menu_name ) {
            // Make sure a menu exists.
            if ( has_nav_menu( $menu ) ) {
                // For combined menus, only add the hook to the first menu that appears.
                if ( in_array( $menu, $this->combined_menus, true ) && ! $this->combined_menu_toggle_hooked ) {
                    $this->add_hook( $menu );
                    $this->combined_menu_toggle_hooked = true;
                } elseif ( ! in_array( $menu, $this->combined_menus, true ) ) {
                    // For non-combined menus, go ahead and add a hook.
                    $this->add_hook( $menu );
                }
            }
        }
    }

    /**
     * @param $args
     *
     * @return mixed
     */
    public function maybe_add_nav_menus_attributes_filter( $args ) {
        if ( ! in_array( $args['theme_location'], $this->all_menus, true ) ) {
            return $args;
        }

        add_filter( "genesis_attr_nav-{$args['theme_location']}", array( $this, 'genesis_attr_nav' ), PHP_INT_MAX );
        return $args;
    }

    /**
     * Add attributes for primary navigation element.
     *
     * @since 2.6.0
     *
     * @param array $attributes Existing attributes for primary navigation element.
     * @return array Amended attributes for primary navigation element.
     */
    public function genesis_attr_nav( $attributes ) {
        $attributes['class'] .= ' genesis-responsive-menu';
        return $attributes;
    }

    /**
     * Adds a filter to the theme menu output.
     *
     * @param string $menu Theme menu location.
     */
    protected function add_hook( $menu ) {
        add_filter( $this->get_filter_nav_menu_location( $menu ), array(
            __CLASS__,
            'add_menu_toggle_button'
        ), PHP_INT_MAX, 3 );
    }

    /**
     * Output JS to remove .no-js if JS is enabled.
     * Connects to the genesis theme handle.
     */
    public function cls_style() {
        wp_add_inline_style( genesis_get_theme_handle(), "/*CLS Fix*/@media only screen and (min-width: $this->min_width) {.no-js button.menu-toggle {display: none;}}" );
    }

    /**
     * Outputs script tag to remove the .no-js class from the body tag.
     */
    public static function do_no_js() {
        echo '<script>(function() {document.body.className = document.body.className.replace("no-js","");})();</script>';
    }

    /**
     * Adds menu toggle button.
     *
     * @param string $nav_output Opening container markup, nav, closing container markup.
     * @param string $nav Navigation list (`<ul>`).
     * @param array $args {
     *     Arguments for `wp_nav_menu()`.
     *
     * @type string $theme_location Menu location ID.
     * @type string $container Container markup.
     * @type string $menu_class Class(es) applied to the `<ul>`.
     * @type bool $echo 0 to indicate `wp_nav_menu()` should return not echo.
     * }
     *
     * @return string Modified menu output.
     */
    public static function add_menu_toggle_button( $nav_output, $nav, $args ) {
        return self::get_menu_toggle( $args['theme_location'] ) . $nav_output;
    }

    /**
     * Outputs the menu toggle button.
     *
     * @param string $menu Navigation menu slug.
     */
    public static function do_menu_toggle( $menu = 'primary' ) {
        echo self::get_menu_toggle( $menu );
    }

    /**
     * Gets the menu toggle button output.
     *
     * @param string $menu Navigation menu slug.
     *
     * @return string Menu toggle button output.
     */
    public static function get_menu_toggle( $menu = 'primary' ) {
        $menu = '' === $menu ? 'primary' : $menu;

        return sprintf(
            '<button class="menu-toggle dashicons-before dashicons-menu" aria-expanded="false" aria-pressed="false" id="genesis-mobile-nav-%s">%s</button>',
            $menu,
            __( 'Menu', 'farmhouse' )
        );
    }
}
