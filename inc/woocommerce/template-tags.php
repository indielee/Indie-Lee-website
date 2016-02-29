<?php

function indielee_template_custom_field_ingredients() {
  echo '<div class="product-detail">' . '<h3>Ingredients</h3>' . '<p>' . get_post_meta( get_the_ID(), '_ingredients', true ) . '</p></div>';
}

function indielee_template_custom_field_directions() {
  echo '<div class="product-detail">' . '<h3>Directions</h3>' . '<p>' . get_post_meta( get_the_ID(), '_directions', true ) . '</p></div>';
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

if ( ! function_exists( 'indielee_template_brand_info' ) ) {

  function indielee_template_brand_info() {
     echo '<div class="brand-info-container"><div class="brand-info">INDIE LEE is devoted to making all natural beauty products from the WORLD’S FINEST INGREDIENTS. What you put on your body is just as important as what you put in it. We must nurture our soul to let our inner beauty shine through. Live life to its fullest, ONE MOMENT AT A TIME.</div></div>';
  }

}

/**
  * Dispay ingredient information
  */

// Information about the main ingredient (black block with image under the product infomration)
if ( ! function_exists( 'indielee_template_ingredient_info' ) ) {

  function indielee_template_ingredient_info() {
     echo '<div class="ingredient-info-container"><div class="ingredient-info"><h2>Derivated Squalane</h2><p>Our face oil is made of 100% pure, olive derived squalane oil that promotes skin elasticity, diminishes age spots, and boosts cell regeneration and oxgenation. One oil bottle contains the squalane from thousands of olivs. Indie Lee does not use animalic squalane.</p></div><div class="ingredient-image"></div></div>';
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
