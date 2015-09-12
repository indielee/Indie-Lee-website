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
  /**
   * Display homepage featured Products
   * Hooked into the `homepage` action in the homepage template
   * @since  1.0.0
   * @return void
   */
  function indielee_homepage_bestsellers() {

    if ( is_woocommerce_activated() ) {

      echo '<section class="storefront-product-section storefront-featured-products">';

        echo '<h2 class="section-title">' . 'Bestsellers' . '</h2>';

        echo do_shortcode_func( 'featured_products',
          array(
            'per_page'  => 4,
            'columns' => 4,
            'orderby' => 'date',
            'order'   => 'desc'
            ) );

      echo '</section>';

    }
  }
}

?>