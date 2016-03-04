<?php
  function indielee_custom_general_fields() {

    global $woocommerce, $post;

    echo '<div class="options_group">';

    woocommerce_wp_textarea_input(
      array(
        'id'          => '_ingredients',
        'label'       => __( 'Ingredient list', 'woocommerce' ),
        'placeholder' => '',
        'description' => __( 'Enter the full ingredient list here.', 'woocommerce' )
      )
    );

    woocommerce_wp_textarea_input(
      array(
        'id'          => '_ingredients_eu',
        'label'       => __( 'EU compliant Ingredient list', 'woocommerce' ),
        'placeholder' => '',
        'description' => __( 'Enter the full ingredient list here with EU compliant definitions.', 'woocommerce' )
      )
    );

    woocommerce_wp_textarea_input(
      array(
        'id'          => '_directions',
        'label'       => __( 'Directions of usage', 'woocommerce' ),
        'placeholder' => '',
        'description' => __( 'How to use the product', 'woocommerce' )
      )
    );

    woocommerce_wp_textarea_input(
      array(
        'id'          => '_optional_field',
        'label'       => __( 'Optional field', 'woocommerce' ),
        'placeolder'  => '',
        'description' => __( 'Optional field that could be used for any purpose, should be HTML formatted.', 'woocommerce' )
      )
    );

    woocommerce_wp_textarea_input(
      array(
        'id'          => '_main_ingredient_title',
        'label'       => __( 'Main ingredient title', 'woocommerce' ),
        'placeolder'  => '',
        'description' => __( 'Enter main ingredient title.', 'woocommerce' )
      )
    );

    woocommerce_wp_textarea_input(
      array(
        'id'          => '_main_ingredient_info',
        'label'       => __( 'Main ingredient information', 'woocommerce' ),
        'placeolder'  => '',
        'description' => __( 'Enter information about the main ingredient here.', 'woocommerce' )
      )
    );

    woocommerce_wp_textarea_input(
      array(
        'id'          => '_main_ingredient_image',
        'label'       => __( 'Main ingredient image', 'woocommerce' ),
        'placeolder'  => '',
        'description' => __( 'Enter URL to main ingredient image here.', 'woocommerce' )
      )
    );

    echo '</div>';

  }

  function indielee_custom_general_fields_save( $post_id ) {

    $ingredient_list = $_POST['_ingredients'];
    $eu_ingredient_list = $_POST['_ingredients_eu'];
    $directions = $_POST['_directions'];
    $optional_field = $_POST['_optional_field'];
    $main_ingredient_title = $_POST['_main_ingredient_title'];
    $main_ingredient_info = $_POST['_main_ingredient_info'];
    $main_ingredient_image = $_POST['_main_ingredient_image'];

    if( !empty( $ingredient_list ) )
      update_post_meta( $post_id, '_ingredients', esc_html( $ingredient_list ) );

    if( !empty( $eu_ingredient_list ) )
      update_post_meta( $post_id, '_ingredients_eu', esc_html( $eu_ingredient_list ) );

    if( !empty( $directions ) )
      update_post_meta( $post_id, '_directions', esc_html( $directions ) );

    if( !empty( $optional_field ) )
      update_post_meta( $post_id, '_optional_field', esc_html( $optional_field ) );

    if( !empty( $main_ingredient_info ) )
      update_post_meta( $post_id, '_main_ingredient_title', esc_html( $main_ingredient_title ) );

    if( !empty( $main_ingredient_info ) )
      update_post_meta( $post_id, '_main_ingredient_info', esc_html( $main_ingredient_info ) );

    if( !empty( $main_ingredient_info ) )
      update_post_meta( $post_id, '_main_ingredient_image', esc_html( $main_ingredient_image ) );

  }

  /**
   * Cart Fragments
   * Ensure cart contents update when products are added to the cart via AJAX
   * @param  array $fragments Fragments to refresh via AJAX
   * @return array            Fragments to refresh via AJAX
   */
  if ( ! function_exists( 'indielee_cart_link_fragment' ) ) {
    function indielee_cart_link_fragment( $fragments ) {
      global $woocommerce;

      ob_start();

      indielee_cart_link();

      $fragments['a.cart-contents'] = ob_get_clean();

      return $fragments;
    }
  }

  /**
 * woocommerce_package_rates is a 2.1+ hook
 */
add_filter( 'woocommerce_package_rates', 'hide_shipping_when_free_is_available', 10, 2 );

  /**
   * Hide shipping rates when free shipping is available
   *
   * @param array $rates Array of rates found for the package
   * @param array $package The package array/object being shipped
   * @return array of modified rates
   */
  function hide_shipping_when_free_is_available( $rates, $package ) {

   	// Only modify rates if free_shipping is present
    	if ( isset( $rates['free_shipping'] ) ) {

    		// To unset a single rate/method, do the following. This example unsets flat_rate shipping
    		unset( $rates['flat_rate'] );

    		// To unset all methods except for free_shipping, do the following
    		$free_shipping          = $rates['free_shipping'];
    		$rates                  = array();
    		$rates['free_shipping'] = $free_shipping;
  	}

  	return $rates;
  }

/* Remove INCL VAT label in products in cart */
function indie_lee_change_cart_product_tax_label ( $label ) {
  $label = '';
  return $label;
}
add_filter( 'woocommerce_countries_inc_tax_or_vat', 'indie_lee_change_cart_product_tax_label' );

?>
