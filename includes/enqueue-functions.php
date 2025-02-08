<?php
/**
 * Enqueue Functions
 * @package ThemeHunk
 * @subpackage Top Store
 * @since 1.0.0
 */

/**
 * Enqueue scripts and styles.
 */
function top_store_scripts(){
    // enqueue css
    wp_enqueue_style( 'font-awesome', TOP_STORE_THEME_URI . '/third-party/fonts/font-awesome/css/font-awesome.css', '', TOP_STORE_THEME_VERSION );
    wp_enqueue_style( 'th-icon', TOP_STORE_THEME_URI . '/third-party/fonts/th-icon/style.css', '', TOP_STORE_THEME_VERSION );
    wp_enqueue_style( 'animate', TOP_STORE_THEME_URI . '/css/animate.css','',TOP_STORE_THEME_VERSION);
    wp_enqueue_style( 'top-store-menu', TOP_STORE_THEME_URI . '/css/top-store-menu.css','',TOP_STORE_THEME_VERSION);
    wp_enqueue_style( 'top-store-style', get_stylesheet_uri(), array(), TOP_STORE_THEME_VERSION );
    wp_enqueue_style( 'dashicons' );
    wp_add_inline_style('top-store-style', top_store_custom_style());
    //enqueue js
    wp_enqueue_script("jquery-effects-core",array( 'jquery' ));
    wp_enqueue_script( 'jquery-ui-autocomplete',array( 'jquery' ),'1.0.0',true );
    wp_enqueue_script('imagesloaded');
    wp_enqueue_script('top-store-menu-js', TOP_STORE_THEME_URI .'/js/top-store-menu.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script('sticky-sidebar-js', TOP_STORE_THEME_URI .'/js/sticky-sidebar.js', array( 'jquery' ), TOP_STORE_THEME_VERSION , true );
    wp_enqueue_script('top-store-accordian-menu-js', TOP_STORE_THEME_URI .'/js/top-store-accordian-menu.js', array( 'jquery' ), TOP_STORE_THEME_VERSION , true );
    wp_enqueue_script( 'top-store-custom-js', TOP_STORE_THEME_URI .'/js/top-store-custom.js', array( 'jquery' ), TOP_STORE_THEME_VERSION , true );
    $topstorelocalize = array(
                'top_store_move_to_top_optn' => (bool) get_theme_mod('top_store_move_to_top',false),
            );
    wp_localize_script( 'top-store-custom-js', 'top_store',  $topstorelocalize);
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ){
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'top_store_scripts' );

/**
 * Enqueue editor styles for Gutenberg
 */
function top_store_block_editor_styles() {
    // Load the theme styles within Gutenberg.
    wp_enqueue_style( 'top-store-block-editor-style', get_theme_file_uri( '/style-editor.css' ), false, '1.0', 'all' );
}
add_action( 'enqueue_block_editor_assets', 'top_store_block_editor_styles' );