<?php

/**
 * Custom template tags for this theme.
 */

if ( ! function_exists( 'indielee_homepage_jumbotron' ) ) {
	/**
	 * Display homepage jumbotron
	 * Hooked into the `homepage` action in the homepage template
	 * @since  1.0.0
	 * @return  void
	 */
	function indielee_homepage_jumbotron() {
    global $indielee;
    $product_img = $indielee['opt-media-jumbotron-product']['thumbnail'];
    $secondary_img = $indielee['opt-media-jumbotron-secondary-image']['thumbnail'];
    $product_header = $indielee['opt-text-jumbotron-header'];
    $product_description = $indielee['opt-textarea-jumbotron-description'];
    ?>

    <section class="jumbotron">

      <?php var_dump($secondary_img) ?>

      <div class="jumbotron-product">
        <?php if( !empty($product_img) ): ?>
            <img src="<?php echo $product_img; ?>" class="attachment-shop_catalog wp-post-image" alt="brighteningcleanser_1">
        <?php endif; ?>

        <?php if( !empty($product_header) ): ?>
            <h3><?php echo "$product_header"; ?></h3>
        <?php endif; ?>   

        <?php if( !empty($product_description) ): ?>
            <p><?php echo "$product_description"; ?></p>
        <?php endif; ?>  

        <a href="#" class="button inverted">Explore</a>
      </div>

      <?php if( isset($_POST['secondary_img']) && !empty($secondary_img) ): ?>
        <div class="jumbotron-image">
          <img src="<?php echo $secondary_img; ?>">
        </div>
      <?php endif; ?>  

    </section>
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

/**
 * Display about section
 * Hooked into the `homepage` action in the homepage template
 * @since  1.0.0
 * @return  void
 */

if ( ! function_exists( 'indielee_homepage_about' ) ) {

  function indielee_homepage_about() { ?>

      <section class="about-section" style="background-image:url('http://indielee.dev/wp-content/uploads/2015/12/natural.jpg');">
        
        <div class="about-text">
          <h3>Devoted to making all natural beauty products</h3>
          <h1>Finest natural ingredients</h1>
          <p>What you put on your body is just as important as what you put in it. Indie Lee uses all natural ingredients, carefully selected for it's proven effect.</p>
        </div>

      </section>

  <?php }
}

?>