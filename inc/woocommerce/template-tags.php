<?php

function indielee_template_custom_field_ingredients() {
  $ingredient_list = get_post_meta( get_the_ID(), '_ingredients', true );
  $ingredient_list_eu = get_post_meta( get_the_ID(), '_ingredients_eu', true );

  if ( ! ( $ingredient_list_eu == null || $ingredient_list_eu == '' ) ) {
    echo '<div class="product-detail" id="ingredients-container">
          <h3>Ingredients</h3>
            <p>' . $ingredient_list . ' <span id="eu-ingredients-title">Visa INCI-namn</span>' . '</p>
            <div class="eu-compliant-ingredient-list" id="eu-ingredients-list">
              <p>' . $ingredient_list_eu . '</p>
            </div>
          </div>';
  } else {
    echo '<div class="product-detail" id="ingredients-container">
          <h3>Ingredients</h3>
            <p>' . $ingredient_list . '</p>
          </div>';
  }
}

function indielee_template_custom_field_directions() {
  echo '<div class="product-detail">' . '<h3 id="directions-title">Directions</h3>' . '<div id="directions-content"><p>' . get_post_meta( get_the_ID(), '_directions', true ) . '</p></div></div>';
}

/**
  * Display product description
  */

if ( ! function_exists( 'woocommerce_template_product_description' ) ) {

  function woocommerce_template_product_description() {
    woocommerce_get_template( 'single-product/tabs/description.php' );
  }

}

/**
  * Display product reviews
  */

if ( ! function_exists( 'woocommerce_template_product_review' ) ) {

  function woocommerce_template_product_review() {
    comments_template( 'single-product/review.php' );
  }

}

/**
  * Dispay brand information
  */

if ( ! function_exists( 'indielee_template_optional_field' ) ) {
  $optional_field = html_entity_decode( get_post_meta( get_the_ID(), '_optional_field', true ) );

  if ( ! ( $optional_field == null || $optional_field == '') ) {
    function indielee_template_optional_field() {
      echo '<div class="optional-field-container">' . $optional_field . '</div>';
    }
  }

}

/**
* Dispay ingredient information
* @since  1.0.0
*/

// Information about the main ingredient (black block with image under the product infomration)
if ( ! function_exists( 'indielee_template_main_ingredient_info' ) ) {

  function indielee_template_main_ingredient_info() {
    $ingredient_title = get_post_meta( get_the_ID(), '_main_ingredient_title', true );
    $ingredient_info = get_post_meta( get_the_ID(), '_main_ingredient_info', true );
    $ingredient_image = get_post_meta( get_the_ID(), '_main_ingredient_image', true );

    // if all ingredient inputs are filled, display main ingredient on product page
    if( ! ( $ingredient_title == null || $ingredient_title == '' || $ingredient_info == null || $ingredient_info == '' || $ingredient_image == null || $ingredient_image == '' ) ) {
      echo '<div class="ingredient-info-container">
              <div class="ingredient-info">
                <h2>' . $ingredient_title . '</h2>
                <p>' . $ingredient_info . '</p>
              </div>
              <div class="ingredient-image" style="background-image:url(' . $ingredient_image . ')"></div>
            </div>';
    }
  }

}


/**
 * Cart Link
 * Displayed a link to the cart including the number of items present and the cart total
 * @param  array $settings Settings
 * @return array           Settings
 * @since  1.0.0
 */
if ( ! function_exists( 'indielee_cart_link' ) ) {
  function indielee_cart_link() {
    ?>
      <a class="cart-contents" href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" title="<?php _e( 'View your shopping cart', 'indielee' ); ?>">
        <img class="cart-icon" src="/wp-content/themes/indielee/icons/cart.svg" alt="Cart" />
        <span class="cart-text"><?php _e( 'Your order', 'indielee' ); ?> /&#32;</span><span class="count"><?php echo wp_kses_data( sprintf( _n( ' %d item', ' %d items', WC()->cart->get_cart_contents_count(), 'indielee' ), WC()->cart->get_cart_contents_count() ) );?></span>
      </a>
    <?php
  }
}

/**
 * Display Header Cart
 * @since  1.0.0
 * @return void
 */
if ( ! function_exists( 'indielee_header_cart' ) ) {
  function indielee_header_cart() {
    if ( is_woocommerce_activated() ) {
      if ( is_cart() ) {
        $class = 'current-menu-item';
      } else {
        $class = '';
      }
      ?>
      <ul class="site-header-cart menu">
        <li class="<?php echo esc_attr( $class ); ?>">
          <?php indielee_cart_link(); ?>
        </li>
        <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
      </ul>
    <?php
    }
  }
}

?>
