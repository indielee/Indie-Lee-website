<?php

add_action( 'homepage', 'indielee_homepage_jumbotron', 10 );
add_action( 'homepage', 'indielee_homepage_bestsellers', 20 );
add_action( 'homepage', 'indielee_homepage_about', 30 );
add_action( 'indielee_cart', 'indielee_header_cart', 10 );

// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );

add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_single_excerpt', 90 );

add_action( 'woocommerce_product_options_general_product_data', 'indielee_custom_general_fields' );
add_action( 'woocommerce_process_product_meta', 'indielee_custom_general_fields_save' );

add_action( 'woocommerce_single_product_summary', 'indielee_template_custom_field_ingredients', 65 );
add_action( 'woocommerce_single_product_summary', 'indielee_template_custom_field_directions', 70 );


add_filter( 'woocommerce_add_to_cart_fragments', 'indielee_cart_link_fragment' );



remove_action( 'woocommerce_product_tabs', 'woocommerce_product_reviews_tab', 30);
remove_action( 'woocommerce_product_tab_panels', 'woocommerce_product_reviews_panel', 30);