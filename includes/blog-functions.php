<?php 
/**
 * Blog Functions
 * @package ThemeHunk
 * @subpackage Top Store
 * @since 1.0.0
 */

function top_store_excerpt_length( $length ){
    if(is_admin()){
        return $length;
    }
    $excerpt_length = (string) get_theme_mod( 'top_store_blog_expt_length' );

    if ( '' != $excerpt_length ) {
       $length = $excerpt_length;
    }
    return $length;
}
add_filter( 'excerpt_length','top_store_excerpt_length', 999 );

function top_store_the_excerpt(){
    // Function content remains the same
}

function top_store_read_more_text( $text ) {
    $read_more = get_theme_mod( 'top_store_blog_read_more_txt' );

    if ( '' != $read_more ) {
        $text = $read_more;
    }

    return $text;
}
add_filter( 'top_store_post_read_more', 'top_store_read_more_text');

function top_store_post_link( $output_filter = '' ){
    // Function content remains the same
}
add_filter( 'excerpt_more', 'top_store_post_link', 1 );

function top_store_post_loader(){
    // Function content remains the same
}
