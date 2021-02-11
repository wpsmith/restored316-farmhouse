<?php

/**
 * Gets the fonts css files.
 *
 * @return array
 */
function farmhouse_get_fonts_css() {

    $css_prefix  = '/' . str_replace( ABSPATH, '', get_stylesheet_directory() . '/assets/css/' );
    $font_prefix = '/' . str_replace( ABSPATH, '', get_stylesheet_directory() . '/assets/fonts/' );
    $fonts       = array(
        'MonologueScript-Regular',
        'FreightDispProBook-Regular',
        'FreightBigProLight-Italic',
        'FreightBigProLight-Regular',
    );
    $items = array();
    foreach( $fonts as $font) {
        $items[] = array(
            'name'  => $font,
            'woff'  => $css_prefix . $font .'.woff.css',
            'woff2' => $css_prefix . $font . '.woff2.css',
            'font'  => $font_prefix . $font .'.woff2',
        );
    }

    return $items;

}

add_action( 'wp_head', 'farmhouse_add_font_script', 0 );
/**
 * Add font script.
 */
function farmhouse_add_font_script() {
    $suffix = wp_scripts_get_suffix();
    ?>
    <script type="text/javascript" id="farmhouse-theme-fonts-js-extra">
        /* <![CDATA[ */
        <?php echo farmhouse_localize_script( 'farmhouseFonts', farmhouse_get_fonts_css() ); ?>
        /* ]]> */
    </script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . "/assets/js/webfont-localstorage{$suffix}.js"; ?>?ver=<?php echo filemtime( get_stylesheet_directory() . "/assets/js/webfont-localstorage{$suffix}.js" ); ?>>" id="farmhouse-theme-fonts-js"></script>
    <?php
}

/**
 * Localizes the fonts.
 *
 * @param string $object_name JavaScript object name.
 * @param array $l10n JavaScript object to be encoded.
 *
 * @return string
 */
function farmhouse_localize_script( $object_name, $l10n ) {
    foreach ( (array) $l10n as $key => $value ) {
        if ( ! is_scalar( $value ) ) {
            continue;
        }

        $l10n[ $key ] = html_entity_decode( (string) $value, ENT_QUOTES, 'UTF-8' );
    }

    return "var $object_name = " . wp_json_encode( $l10n ) . ';';
}

add_action( 'wp_head', 'farmhouse_resource_hints', 99, 1 );
/**
 * Adds resource hints link tags to the header.
 */
function farmhouse_resource_hints() {
    if ( is_admin() ) {
        return;
    }

    $default_ver = get_bloginfo( 'version' );

    // Fonts.
    $fonts = wp_list_pluck( farmhouse_get_fonts_css(), 'font' );
    $pattern = '<link name="%s" rel="preload" href="%s" as="font" type="font/%s" crossorigin="anonymous">';
    foreach ( $fonts as $font ) {
        $info = pathinfo( $font );
        if ( 'woff2' === $info['extension'] ) {
            printf(
                $pattern,
                $info['filename'],
                $font,
                $info['extension']
            );
        }
    }

    // Main Stylesheet.
    printf(
        '<link name="%s" rel="preload" href="%s" as="style">',
        genesis_get_theme_handle(),
        get_stylesheet_directory_uri() . '/style.css?ver=' . genesis_get_theme_version()
    );

    // Required scripts.
    foreach ( wp_scripts()->queue as $handle ) {
        $item = ( isset( wp_scripts()->registered[ $handle ] ) ? wp_scripts()->registered[ $handle ] : new \stdClass() );
        if ( $item && isset( $item->src ) && $item->src ) {
            if ( null === $item->ver ) {
                $ver = '';
            } else {
                $ver = $item->ver ? $item->ver : $default_ver;
            }
            printf(
                '<link name="%s" rel="preload" href="%s?ver=%s" as="script">',
                esc_attr( $item->handle ),
                esc_url( $item->src ),
                esc_attr( $ver )
            );
        }
    }
}

add_action( 'wp_enqueue_scripts', 'farmhouse_enqueue_fonts' );
/**
 * Enqueues scripts and styles.
 *
 * @since 1.0.0
 */
function farmhouse_enqueue_fonts() {

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
        genesis_get_theme_handle() . '-responsive-menu',
        get_stylesheet_directory_uri() . "/assets/js/responsive-menus{$suffix}.js",
        [ 'jquery' ],
        filemtime( get_stylesheet_directory() . "/assets/js/responsive-menus{$suffix}.js" ),
        true
    );

    wp_localize_script(
        genesis_get_theme_handle() . '-responsive-menu',
        'genesis_responsive_menu',
        farmhouse_responsive_menu_settings()
    );

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
