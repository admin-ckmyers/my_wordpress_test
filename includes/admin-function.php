<?php
/**
 * Admin Functions for Top Store Theme.
 *
 * @package ThemeHunk
 * @subpackage Top Store
 * @since 1.0.0
 */

if ( ! function_exists( 'top_store_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features,
     * such as indicating support for post thumbnails.
     */
    function top_store_setup(){
        /*
         * Make theme available for translation.
         */
        load_theme_textdomain( 'top-store', get_template_directory() . '/languages' );
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );
        add_theme_support( 'woocommerce' );
    
        // Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        // Add support for editor styles.
        add_theme_support( 'editor-styles' );

        // Enqueue editor styles.
        add_editor_style( 'style-editor.css' );

        add_editor_style( 'editor.css' );
        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );

        add_theme_support( 'custom-spacing' );
        
        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
        // Remove theme support for widget block editor
        // remove_theme_support( 'widgets-block-editor' );
        /**
         * Add support for core custom logo.
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
        // Add support for Custom Header.
        add_theme_support( 'custom-header', 

        apply_filters( 'top_store_custom_header_args', array(
                'default-image' => '',
                'flex-height'   => true,
                'header-text'   => false,
                'video'          => false,
        ) 
        ) );

        // Recommend plugins
        add_theme_support( 'recommend-plugins', array(

            'hunk-companion' => array(
                'name' => esc_html__( 'Hunk Companion (Highly Recommended)', 'top-store' ),
                'img' => 'icon-128x128.png',
                'active_filename' => 'hunk-companion/hunk-companion.php',
            ),

            'th-advance-product-search' => array(
            'name' => esc_html__( 'TH Advance Product Search', 'top-store' ),
            'img' => 'icon-128x128.gif',
            'active_filename' => 'th-advance-product-search/th-advance-product-search.php',
            ),
            'th-all-in-one-woo-cart' => array(
                 'name' => esc_html__( 'Th All In One Woo Cart', 'top-store' ),
                  'img' => 'icon-128x128.gif',
                 'active_filename' => 'th-all-in-one-woo-cart/th-all-in-one-woo-cart.php',
             ),
            'th-product-compare' => array(
                 'name' => esc_html__( 'Th Product Compare', 'top-store' ),
                  'img' => 'icon-128x128.gif',
                 'active_filename' => 'th-product-compare/th-product-compare.php',
             ),
            'th-variation-swatches' => array(
                'name' => esc_html__( 'TH Variation Swatches', 'top-store' ),
                 'img' => 'icon-128x128.gif',
                'active_filename' => 'th-variation-swatches/th-variation-swatches.php',
            ),
            'vayu-blocks' => array(
                'name' => esc_html__( 'Vayu blocks For Gutenberg', 'top-store' ),
                'img' => 'icon-128x128.png',
                'active_filename' => 'vayu-blocks/vayu-blocks.php',
                ),
            'lead-form-builder' => array(
                'name' => esc_html__( 'Lead Form Builder', 'top-store' ),
                 'img' => 'icon-128x128.png',
                'active_filename' => 'lead-form-builder/lead-form-builder.php',
            ),
            'wp-popup-builder' => array(
                'name' => esc_html__( 'WP Popup Builder – Popup Forms & Newsletter', 'top-store' ),
                 'img' => 'icon-128x128.png',
                'active_filename' => 'wp-popup-builder/wp-popup-builder.php',
            ), 
            'woocommerce' => array(
                'name' => esc_html__( 'Woocommerce', 'top-store' ),
                 'img' => 'icon-128x128.gif',
                'active_filename' => 'woocommerce/woocommerce.php',
            ),
            'themehunk-megamenu-plus' => array(
                'name' => esc_html__( 'ThemeHunk Megamenu – Menu builder', 'top-store' ),
                'img' => 'icon-128x128.png',
                'active_filename' => 'themehunk-megamenu-plus/themehunk-megamenu.php',
            ), 
            'yith-woocommerce-wishlist' => array(
                'name' => esc_html__( 'YITH WooCommerce Wishlist', 'top-store' ),
                 'img' => 'icon-128x128.jpg',
                'active_filename' => 'yith-woocommerce-wishlist/init.php',
            ),  

        ) );

        // Import Data Content plugins
        add_theme_support( 'import-demo-content', array(

             'hunk-companion' => array(
                'name' => esc_html__( 'Hunk Companion', 'top-store' ),
                'img' => 'icon-128x128.png',
                'active_filename' => 'hunk-companion/hunk-companion.php',
            )
        ));

        // Useful plugins
        add_theme_support( 'useful-plugins', array(
             'themehunk-megamenu-plus' => array(
                'name' => esc_html__( 'Megamenu plugin from Themehunk.', 'top-store' ),
                'active_filename' => 'themehunk-megamenu-plus/themehunk-megamenu.php',
            ),
        ) );

        
        // Add support for Custom Background.
        if(get_theme_mod('top_store_color_scheme')=='opn-dark'){
        $args = array(
        'default-color' => '2f2f2f',
        );
        }else{
        $args = array(
        'default-color' => 'f1f1f1',
        );  
        }
        add_theme_support( 'custom-background',$args );
        
        $GLOBALS['content_width'] = apply_filters( 'top_store_content_width', 640 );
        add_theme_support( 'woocommerce', array(
                                                 'thumbnail_image_width' => 320,
                                             ) );
    }
endif;
add_action( 'after_setup_theme', 'top_store_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 */



