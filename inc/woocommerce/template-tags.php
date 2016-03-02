<?php

function indielee_template_custom_field_ingredients() {
  echo '<div class="product-detail" id="ingredients-container">' . '<h3>Ingredients</h3>' . '<p>' . get_post_meta( get_the_ID(), '_ingredients', true ) . ' <span id="eu-ingredients-title">Visa INCI-namn</span>' . '</p>'  . '<div class="eu-compliant-ingredient-list" id="eu-ingredients-list">' . '<p>' . get_post_meta( get_the_ID(), '_ingredients_eu', true ) . '</p></div></div>';
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

  function indielee_template_optional_field() {
     echo '<div class="optional-field-container">
            <div class="text-content">' . get_post_meta( get_the_ID(), '_optional_field', true ) . '</div>
          </div>';
  }

}

/**
* Dispay ingredient information
* @since  1.0.0
*/

// Information about the main ingredient (black block with image under the product infomration)
if ( ! function_exists( 'indielee_template_main_ingredient_info' ) ) {

  function indielee_template_main_ingredient_info() {
    echo '<div class="ingredient-info-container">
            <div class="ingredient-info">
              <h2>' . get_post_meta( get_the_ID(), '_main_ingredient_title', true ) . '</h2>
              <p>' . get_post_meta( get_the_ID(), '_main_ingredient_info', true ) . '</p>
            </div>
            <div class="ingredient-image" style="background-image:url(' . get_post_meta( get_the_ID(), '_main_ingredient_image', true ) . ')"></div>
          </div>';
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
        <span class="cart-text"><?php _e( 'Your order', 'indielee' ); ?> /</span><span class="count"><?php echo wp_kses_data( sprintf( _n( ' %d item', ' %d items', WC()->cart->get_cart_contents_count(), 'indielee' ), WC()->cart->get_cart_contents_count() ) );?></span>
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
