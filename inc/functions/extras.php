<?php
/**
 * Query WooCommerce activation
 */
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
  function is_woocommerce_activated() {
    return class_exists( 'woocommerce' ) ? true : false;
  }
}

/**
 * Call a shortcode function by tag name.
 *
 * @since  1.0.0
 *
 * @param string $tag     The shortcode whose function to call.
 * @param array  $atts    The attributes to pass to the shortcode function. Optional.
 * @param array  $content The shortcode's content. Default is null (none).
 *
 * @return string|bool False on failure, the result of the shortcode on success.
 */
function do_shortcode_func( $tag, array $atts = array(), $content = null ) {

  global $shortcode_tags;

  if ( ! isset( $shortcode_tags[ $tag ] ) ) {
    return false;
  }

  return call_user_func( $shortcode_tags[ $tag ], $atts, $content, $tag );
}

?>

