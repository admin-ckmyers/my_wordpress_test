<?php
/**
 * Top Store functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ThemeHunk
 * @subpackage Top Store
 * @since 1.0.0
 */

// Define constants
define( 'TOP_STORE_THEME_VERSION','1.5.5');
define( 'TOP_STORE_THEME_DIR', get_template_directory() . '/' );
define( 'TOP_STORE_THEME_URI', get_template_directory_uri() . '/' );
define( 'TOP_STORE_THEME_SETTINGS', 'top-store-settings' );
define('TOP_STORE_DEV_MODE', false);

// Include function files
$function_files = array(
    'admin-function.php',
    'blog-functions.php',
    'breadcrumbs.php',
    'customizer-functions.php',
    'enqueue-functions.php',
    'footer-functions.php',
    'header-functions.php',
    'menu-functions.php',
    'template-functions.php',
    'top-store-custom-style.php',
    'utility-functions.php',
    'widget-functions.php',
    'woocommerce-functions.php'
);

foreach ($function_files as $file) {
    require_once TOP_STORE_THEME_DIR . 'includes/' . $file;
}

// Include init.php (after all other includes)
require_once TOP_STORE_THEME_DIR . 'includes/init.php';

/**
 * Enqueue editor styles for Gutenberg
 */
function top_store_block_editor_styles() {
    wp_enqueue_style( 'top-store-block-editor-style', get_theme_file_uri( '/style-editor.css' ), false, TOP_STORE_THEME_VERSION, 'all' );
}
add_action( 'enqueue_block_editor_assets', 'top_store_block_editor_styles' );
