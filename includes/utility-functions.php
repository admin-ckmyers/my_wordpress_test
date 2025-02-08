<?php
/**
 * Utility Functions
 * @package ThemeHunk
 * @subpackage Top Store
 * @since 1.0.0
 */

*/
if (!function_exists('top_store_is_json')) {
function top_store_is_json( $string ){ 
    return is_string( $string ) && is_array( json_decode( $string, true ) ) ? true : false;
}
}

 if ( ! function_exists( 'top_store_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 * Does nothing if the custom logo is not available.
 */
function top_store_custom_logo(){
    if ( function_exists( 'the_custom_logo' ) ){?>
    	<div class="thunk-logo">
        <?php the_custom_logo();?>
      </div>
   <?php  }
}
endif;

/*********************/
/**
 * Function to check if it is Internet Explorer
 */
if ( ! function_exists( 'top_store_check_is_ie' ) ) :
	/**
	 * Function to check if it is Internet Explorer.
	 *
	 * @return true | false boolean
	 */
	function top_store_check_is_ie() {

		$is_ie = false;

		$ua = htmlentities( $_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8' );
		if ( strpos( $ua, 'Trident/7.0' ) !== false ) {
			$is_ie = true;
		}

		return apply_filters( 'top_store_check_is_ie', $is_ie );
	}

endif;

// responsive slider function add media query
/********************************/
if ( ! function_exists( 'top_store_add_media_query' ) ) :
    function top_store_add_media_query( $dimension, $custom_css ){
      switch ($dimension){
          case 'desktop':
          $custom_css = '@media (min-width: 769px){' . $custom_css . '}';
          break;
          break;
          case 'tablet':
          $custom_css = '@media (max-width: 768px){' . $custom_css . '}';
          break;
          case 'mobile':
          $custom_css = '@media (max-width: 550px){' . $custom_css . '}';
          break;
      }
    
          return $custom_css;
    }
    endif;
    
    /*************************/



//custom function conditional check for blog page
function top_store_is_blog (){
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}

if ( ! function_exists( 'wp_body_open' ) ) {
    /**
     * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
     */
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}

if (!is_array( get_option( 'theme_mods_top-store-pro')) ) {
    function top_store_theme_switch() {
        update_option( 'theme_mods_top-store-pro', get_option( 'theme_mods_top-store') );
    }
    add_action('switch_theme', 'top_store_theme_switch');
}

/**************************/
// Dynamic Social Link
/**************************/
function top_store_social_links(){
    $social='';
    $original_color = get_theme_mod('top_store_social_original_color',false);
    if($original_color==true){
    $class_original='original-social-icon';
    }else{
    $class_original='';	
    }
    $social.='<ul class="social-icon ' .esc_attr($class_original). ' ">';
    if($f_link = get_theme_mod('top_store_social_link_facebook','#')) :
        $social.='<li><a target="_blank" href="'.esc_url($f_link).'"><i class="fa fa-facebook"></i></a></li>';
    endif;
    if($l_link = get_theme_mod('top_store_social_link_linkedin','#')) :
        $social.='<li><a target="_blank" href="'.esc_url($l_link).'"><i class="fa fa-linkedin"></i></a></li>';
    endif;
    if($p_link = get_theme_mod('top_store_social_link_pintrest','#')) :
        $social.='<li><a target="_blank" href="'.esc_url($p_link).'"><i class="fa fa-pinterest"></i></a></li>';
    endif;
    if($t_link = get_theme_mod('top_store_social_link_twitter','#')) :
        $social.='<li><a target="_blank" href="'.esc_url($t_link).'"><i class="fa fa-twitter"></i></a></li>';
    endif;
    if($insta_link = get_theme_mod('top_store_social_link_insta','#')) :
        $social.='<li><a target="_blank" href="'.esc_url($insta_link).'"><i class="fa fa-instagram"></i></a></li>';
    endif;
    if($tum_link = get_theme_mod('top_store_social_link_tumblr','#')) :
        $social.='<li><a target="_blank" href="'.esc_url($tum_link).'"><i class="fa fa-tumblr"></i></a></li>';
    endif;
    if($y_link = get_theme_mod('top_store_social_link_youtube','#')) :
        $social.='<li><a target="_blank" href="'.esc_url($y_link).'"><i class="fa fa-youtube-play"></i></a></li>';
    endif;
    if($stumb_link = get_theme_mod('top_store_social_link_stumbleupon','#')):
        $social.='<li><a target="_blank" href="'.esc_url($stumb_link).'">
         <i class="fa fa-stumbleupon"></i></a></li>';
    endif;
    if($dribble_link = get_theme_mod('top_store_social_link_dribble','#')):
        $social.='<li><a target="_blank" href="'.esc_url($dribble_link).'">
         <i class="fa fa-dribbble"></i></a></li>';
    endif;
    $social.='</ul>';
    return $social;
    }

/******************************/
//Sticky sidebar function
/******************************/
function top_store_stick_sidebar($class){
    $top_store_sticky_sidebar = get_theme_mod( 'top_store_sticky_sidebar');
    if ($top_store_sticky_sidebar){
        $class = 'topstore-sticky-sidebar';
    }
    return $class;
}
add_filter( 'top_store_stick_sidebar_class','top_store_stick_sidebar', 999 );

/*****************************/
//add class active
function top_store_body_classes( $classes ){
    if(class_exists( 'WooCommerce' )):
    $classes[] = 'woocommerce';
    endif;
    $top_store_color_scheme = esc_html(get_theme_mod( 'top_store_color_scheme','opn-light' ));
             if ( $top_store_color_scheme == 'opn-dark' ){
    
                     $classes[] = 'top-store-dark';
    
             }
             if ( $top_store_color_scheme == 'opn-light' ){
    
                     $classes[] = 'top-store-light';
             }
    return $classes;
    }
    add_filter( 'body_class', 'top_store_body_classes' );
    
    // sideabr function for internal pages
    function top_store_pages_sidebar(){
    $top_store_sidebar_ineternal_option = get_theme_mod('top_store_sidebar_ineternal_option','active-sidebar');
    return $top_store_sidebar_ineternal_option;
    }
    
    // default size in upload image
    function top_store_attachment_display_settings(){
        update_option( 'image_default_size', 'large' );
    }
    add_action( 'after_setup_theme', 'top_store_attachment_display_settings' );
    