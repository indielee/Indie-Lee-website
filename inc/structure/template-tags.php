<?php

/**
 * Custom template tags for this theme.
 */

if ( ! function_exists( 'indielee_homepage_content' ) ) {
	/**
	 * Display homepage content
	 * Hooked into the `homepage` action in the homepage template
   * @uses indielee_homepage_slider(); indielee_homepage_bestsellers();
	 * @since  1.0.0
	 * @return  void
	 */
	function indielee_homepage_content() {
    global $indielee;
    $layout = $indielee['homepage-blocks']['enabled'];

    if ($layout): foreach ($layout as $key=>$value) {

        switch($key) {

            case 'slider': indielee_homepage_slider();
            break;

            case 'bestsellers': indielee_homepage_bestsellers();
            break;

        }
    }
    endif;
	}
}

/**
 * Display homepage image slider
 * @since  1.0.0
 * @return  void
 */

if ( ! function_exists( 'indielee_homepage_slider' ) ) {

  function indielee_homepage_slider() {
    global $indielee;
    if ( isset( $indielee['homepage-blocks']['enabled']['slider'] ) ) {
      if ( isset( $indielee['opt-slides-frontpage-slider'] ) && !empty( $indielee['opt-slides-frontpage-slider'] ) ) {
          // echo 'Slide 1 Title: '         . $indielee['opt-slides-frontpage-slider'][0]['title'];
          // echo 'Slide 1 Description: '   . $indielee['opt-slides-frontpage-slider'][0]['description'];
          // echo 'Slide 1 URL: '           . $indielee['opt-slides-frontpage-slider'][0]['url'];
          // echo 'Slide 1 Attachment ID: ' . $indielee['opt-slides-frontpage-slider'][0]['attachment_id'];
          // echo 'Slide 1 Thumb: '         . $indielee['opt-slides-frontpage-slider'][0]['thumb'];
          // echo 'Slide 1 Image: '         . $indielee['opt-slides-frontpage-slider'][0]['image'];
          // echo 'Slide 1 Width: '         . $indielee['opt-slides-frontpage-slider'][0]['width'];
          // echo 'Slide 1 Height: '        . $indielee['opt-slides-frontpage-slider'][0]['height'];
        ?>
        <div class="frontpage-slider">
            <?php
            foreach ($indielee['opt-slides-frontpage-slider'] as $slide) { ?>
              <div class="slide" style="background-image: <?php $slide['image'] ?>">
                <?php $slide['title'];
                $slide['description']; ?>
              </div>
            <?php }
            ?>
        </div>
        <?php
      }
    }
  }
}

/**
 * Display inline activation scripts for the frontpage if it's needed.
 * @since  1.0.0
 * @return  void
 */

function homepage_scripts() {
  if ( is_front_page() && isset( $indielee['opt-slides-frontpage-slider'] ) && !empty( $indielee['opt-slides-frontpage-slider'] ) ) { ?>
  <script>
    $(document).ready(function(){
      $('.frontpage-slider').owlCarousel();
    });
  </script>
<?php }
}

/**
 * Display bestsellers
 * Hooked into the `homepage` action in the homepage template
 * @since  1.0.0
 * @return  void
 */

if ( ! function_exists( 'indielee_homepage_bestsellers' ) ) {

  function indielee_homepage_bestsellers() {
    global $indielee;
    if ( isset( $indielee['homepage-blocks']['enabled']['bestsellers'] ) ) {
      echo "Bestsellers is enabled!!!";
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
        <?php _e( 'Your order', 'indielee' ); ?> / <span class="count"><?php echo wp_kses_data( sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'indielee' ), WC()->cart->get_cart_contents_count() ) );?></span>
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