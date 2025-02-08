<?php 
/**
 * All file includes
 * @package ThemeHunk
 * @subpackage Top Store
 * @since 1.0.0
 */

if ( ! function_exists( 'is_plugin_active' ) ){
    require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}

// Include function files
$function_files = array(
    'admin-function.php',
    'blog-functions.php',
    'breadcrumbs.php',
    'customizer-functions.php',
    'enqueue-functions.php',
    'footer-functions.php',
    'header-function.php',
    'menu-functions.php',
    'template-functions.php',
    'top-store-custom-style.php',
    'utility-functions.php',
    'widget-functions.php',
    'woocommerce-functions.php'
);

foreach ($function_files as $file) {
    require_once get_template_directory() . '/includes/' . $file;
}

// Customizer files
if (is_customize_preview()) {
    require_once get_template_directory() . '/customizer/customizer-constant.php';
    require_once get_template_directory() . '/customizer/extend-customizer/class-top-store-wp-customize-panel.php';
    require_once get_template_directory() . '/customizer/extend-customizer/class-top-store-wp-customize-section.php';
    require_once get_template_directory() . '/customizer/customizer-radio-image/class/class-top-store-customize-control-radio-image.php';
    require_once get_template_directory() . '/customizer/customizer-range-value/class/class-top-store-customizer-range-value-control.php';
    require_once get_template_directory() . '/customizer/customizer-scroll/class/class-top-store-customize-control-scroll.php';
    require_once get_template_directory() . '/customizer/color/class-control-color.php';
    require_once get_template_directory() . '/customizer/customize-buttonset/class-control-buttonset.php';
    require_once get_template_directory() . '/customizer/customizer-toggle/class-top-store-toggle-control.php';
    require_once get_template_directory() . '/customizer/custom-customizer.php';
    require_once get_template_directory() . '/customizer/customizer.php';
    
    if ( !is_plugin_active('hunk-companion/hunk-companion.php') ) {
        require_once get_template_directory() . '/customizer/customizer-notification/thsm-custom-section.php';
    }
}

// WooCommerce
if ( class_exists( 'WooCommerce' ) ) {
    require_once get_template_directory() . '/woocommerce/woo-core.php';
    require_once get_template_directory() . '/woocommerce/woo-function.php';
    require_once get_template_directory() . '/woocommerce/woocommerce-ajax.php';
}

// Th Option
require_once get_template_directory() . '/lib/th-option/th-option.php';

// Pro button
require_once get_template_directory() . '/customizer/pro-button/class-customize.php';

// Plugin Activation
require_once get_template_directory() . '/includes/admin/notify.php';
