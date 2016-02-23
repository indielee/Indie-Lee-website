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
        'id'          => '_directions',
        'label'       => __( 'Directions of usage', 'woocommerce' ),
        'placeholder' => '',
        'description' => __( 'How to use the product', 'woocommerce' )
      )
    );

    echo '</div>';

  }

  function indielee_custom_general_fields_save( $post_id ) {

    $ingredient_list = $_POST['_ingredients'];
    $directions = $_POST['_directions'];

    if( !empty( $ingredient_list ) )
      update_post_meta( $post_id, '_ingredients', esc_html( $ingredient_list ) );

    if( !empty( $directions ) )
      update_post_meta( $post_id, '_directions', esc_html( $directions ) );

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

?>
