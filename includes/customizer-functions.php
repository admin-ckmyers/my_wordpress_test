<?php
/**
 * Customizer Functions
 * @package ThemeHunk
 * @subpackage Top Store
 * @since 1.0.0
 */

/********************************/
// responsive slider function
/*********************************/
if ( ! function_exists( 'top_store_responsive_slider_funct' ) ) :
function top_store_responsive_slider_funct($control_name,$function_name){
  $custom_css='';
           $control_value = get_theme_mod( $control_name );
           if ( empty( $control_value ) ){
                return '';
             }  
        if ( top_store_is_json( $control_value ) ){
    $control_value = json_decode( $control_value, true );
    if ( ! empty( $control_value ) ) {

      foreach ( $control_value as $key => $value ){
        $custom_css .= call_user_func( $function_name, $value, $key );
      }
    }
    return $custom_css;
  }  
}
endif;
