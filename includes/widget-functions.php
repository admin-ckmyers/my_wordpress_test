<?php
/**
 * Widget Functions
 * @package ThemeHunk
 * @subpackage Top Store
 * @since 1.0.0
 */

/**
 * Register widget area.
 */
function top_store_widgets_init(){
    // Primary Sidebar
    register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'top-store' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here to appear in your primary sidebar.', 'top-store' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="top-store-widget-content">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    // Secondary Sidebar
    register_sidebar( array(
        'name'          => esc_html__( 'Secondary Sidebar', 'top-store' ),
        'id'            => 'sidebar-2',
        'description'   => esc_html__( 'Add widgets here to appear in your secondary sidebar.', 'top-store' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="top-store-widget-content">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    
    // Above Header Widgets
    $above_header_widgets = array(
        'top-header-widget-col1' => 'Above Header First Widget',
        'top-header-widget-col2' => 'Above Header Second Widget',
        'top-header-widget-col3' => 'Above Header Third Widget',
    );

    foreach ($above_header_widgets as $id => $name) {
        register_sidebar(array(
            'name'          => esc_html__( $name, 'top-store' ),
            'id'            => $id,
            'description'   => esc_html__( 'Add widgets here to appear in top header.', 'top-store' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ));
    }

    // Main Header Widget
    register_sidebar(array(
        'name'          => esc_html__( 'Main Header Widget', 'top-store' ),
        'id'            => 'main-header-widget',
        'description'   => esc_html__( 'Add widgets here to appear in main header.', 'top-store' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    // Footer Widgets
    $footer_widgets = array(
        'footer-top-first'   => 'Footer Top First Widget',
        'footer-top-second'  => 'Footer Top Second Widget',
        'footer-top-third'   => 'Footer Top Third Widget',
        'footer-below-first' => 'Footer Below First Widget',
        'footer-below-second'=> 'Footer Below Second Widget',
        'footer-below-third' => 'Footer Below Third Widget',
    );

    foreach ($footer_widgets as $id => $name) {
        register_sidebar(array(
            'name'          => esc_html__( $name, 'top-store' ),
            'id'            => $id,
            'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'top-store' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ));
    }

    // Footer Widget Areas
    for ( $i = 1; $i <= 4; $i++ ){
        register_sidebar( array(
            'name'          => sprintf( esc_html__( 'Footer Widget Area %d', 'top-store' ), $i ),
            'id'            => 'footer-' . $i,
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );
    }
}
add_action( 'widgets_init', 'top_store_widgets_init' );
