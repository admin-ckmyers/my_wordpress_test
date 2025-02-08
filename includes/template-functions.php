<?php
// template-functions.php

/**
 * Get Page Title
 */
function top_store_get_page_title() {
    if (is_search()) {
        printf('<h2 class="thunk-page-top-title entry-title">%s</h2>', 
            sprintf(__('Search Results for: %s', 'top-store'), '<span>' . esc_html(get_search_query()) . '</span>')
        );
    } elseif (top_store_is_blog() && !is_single() && !is_archive()) {
        if (!is_front_page()) {
            $our_title = get_the_title(get_option('page_for_posts', true));
            printf('<h1 class="thunk-page-top-title entry-title">%s</h1>', esc_html($our_title));
        } else {
            echo '<h1 class="thunk-page-top-title entry-title">' . esc_html__('Blog', 'top-store') . '</h1>';
        }
    } elseif (is_archive()) {
        the_archive_title('<h1 class="thunk-page-top-title entry-title">', '</h1>');
    } elseif (class_exists('WooCommerce') && is_shop()) {
        echo '<h1 class="thunk-page-top-title entry-title">';
        woocommerce_page_title();
        echo '</h1>';
    } elseif (is_page()) {
        the_title('<h1 class="thunk-page-top-title entry-title">', '</h1>');
    }
}
