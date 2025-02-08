<?php
/**
 * Menu Functions
 * @package ThemeHunk
 * @subpackage Top Store
 * @since 1.0.0
 */

/**
 * Add classes to page menu
 */
function top_store_add_classes_to_page_menu( $ulclass ){
  return preg_replace( '/<ul>/', '<ul class="top-store-menu" data-menu-style="horizontal">', $ulclass, 1 );
}
add_filter( 'wp_page_menu', 'top_store_add_classes_to_page_menu' );

/**
 * Register custom menus
 */
function top_store_custom_menu(){
    register_nav_menus(array(
        'top-store-above-menu' => esc_html__( 'Header Above Menu', 'top-store' ),
        'top-store-main-menu'  => esc_html__( 'Main', 'top-store' ),
        'top-store-sticky-menu'=> esc_html__( 'Sticky', 'top-store' ),
        'top-store-footer-menu'=> esc_html__( 'Footer Menu', 'top-store' ),
    ));
}
add_action( 'after_setup_theme', 'top_store_custom_menu' );

/**
 * Display main navigation menu
 */
function top_store_main_nav_menu(){
    wp_nav_menu( array(
        'theme_location' => 'top-store-main-menu', 
        'container'      => false, 
        'link_before'    => '<span class="top-store-menu-link">',
        'link_after'     => '</span>',
        'items_wrap'     => '<ul id="top-store-menu" class="top-store-menu" data-menu-style="horizontal">%3$s</ul>',
    ));
}

/**
 * Display sticky navigation menu
 */
function top_store_stick_nav_menu(){
    wp_nav_menu( array(
        'theme_location' => 'top-store-sticky-menu', 
        'container'      => false, 
        'link_before'    => '<span class="top-store-menu-link">',
        'link_after'     => '</span>',
        'items_wrap'     => '<ul id="top-store-stick-menu" class="top-store-menu" data-menu-style="horizontal">%3$s</ul>',
    ));
}

/**
 * Display header above navigation menu
 */
function top_store_abv_nav_menu(){
    wp_nav_menu( array(
        'theme_location' => 'top-store-above-menu', 
        'container'      => false, 
        'link_before'    => '<span class="top-store-menu-link">',
        'link_after'     => '</span>',
        'items_wrap'     => '<ul id="top-store-above-menu" class="top-store-menu" data-menu-style="horizontal">%3$s</ul>',
    ));
}

/**
 * Display footer navigation menu
 */
function top_store_footer_nav_menu(){
    wp_nav_menu( array(
        'theme_location' => 'top-store-footer-menu', 
        'container'      => false, 
        'link_before'    => '<span class="top-store-menu-link">',
        'link_after'     => '</span>',
        'items_wrap'     => '<ul id="top-store-footer-menu" class="top-store-bottom-menu">%3$s</ul>',
    ));
}

/**
 * Add classes to default page menu
 */
function top_store_add_classes_to_page_menu_default( $ulclass ){
    return preg_replace( '/<ul>/', '<ul class="top-store-menu" data-menu-style="horizontal">', $ulclass, 1 );
}
add_filter( 'wp_page_menu', 'top_store_add_classes_to_page_menu_default' );

// The commented out function for menu item description can be uncommented if needed in the future.
