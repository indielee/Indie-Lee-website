<?php

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_single_excerpt', 90 );

add_action( 'woocommerce_product_options_general_product_data', 'indielee_custom_general_fields' );
add_action( 'woocommerce_process_product_meta', 'indielee_custom_general_fields_save' );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 60 );
add_action( 'woocommerce_single_product_summary', 'indielee_template_custom_field_ingredients', 65 );
add_action( 'woocommerce_single_product_summary', 'indielee_template_custom_field_directions', 70 );

add_action( 'woocommerce_after_single_product_summary', 'indielee_template_brand_info', 5 );
add_action( 'woocommerce_after_single_product_summary', 'indielee_template_ingredient_info', 10 );
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_template_product_review', 15 );

add_filter( 'woocommerce_add_to_cart_fragments', 'indielee_cart_link_fragment' );