<?php
// add our woocommerce scripts and styles
add_action('wp_enqueue_scripts', 'add_woocommerce_script', 1003);
function add_woocommerce_script() {
    if (is_product() || is_shop() || is_cart() || is_checkout()) {
        wp_register_script('woocommerce-theme-scripts', get_template_directory_uri() . '/woocommerce/js/woocommerce-theme-scripts.js', array('wc-add-to-cart-variation'), false, true);
        wp_enqueue_script('woocommerce-theme-scripts');
        wp_enqueue_style('woocommerce-theme-styles', get_template_directory_uri() . '/woocommerce/css/woocommerce-theme-styles.css', array());
    }
}

// add html for variation price/old price
add_filter( 'woocommerce_available_variation', 'variations_product_price_html' );
function variations_product_price_html( $variations ) {
    $variations['display_price_html'] = wc_price($variations['display_price']);
    $variations['display_regular_price_html'] = $variations['display_regular_price'] === $variations['display_price'] ? '' : wc_price($variations['display_regular_price']);
    return $variations;
}

// add our class to button "view cart"
add_filter( 'wc_add_to_cart_message_html', 'filter_message_add_to_cart', 10, 3 );
function filter_message_add_to_cart( $message ) {
    return $message = preg_replace('/class="/', 'class="u-btn ', $message);
}

// add our class to button "confirm order"
add_filter('woocommerce_order_button_html', 'filter_class_payment_button', 10, 3);
function filter_class_payment_button( $html ) {
    global $checkout_custom_template;
    $checkout_custom_template = isset($checkout_custom_template) ? $checkout_custom_template : get_option('checkout_template');
    $button_with_our_class = get_template_part('woocommerce/template-parts/' . $checkout_custom_template . '/order-button');
    $hidden_original_button = str_replace('button ', 'button u-form-control-hidden ', $html);
    return $html = $button_with_our_class . $hidden_original_button;
}

/**
 * WooCommerce: Change the number of products displayed per page @ shop page
 */
add_filter('loop_shop_per_page', 'product_count_shop_per_page', 99);
function product_count_shop_per_page($default_products_count) {
    $products_count = '{count_products}';
    if (!is_numeric($products_count)) {
        return $default_products_count;
    }
    return $products_count;
}

add_filter('woocommerce_loop_add_to_cart_args', 'np_woocommerce_loop_add_to_cart_args', 5, 2);

/**
 * Add and remove classes depending on cart button.
 *
 * @param array      $args    Default args, see woocommerce_template_loop_add_to_cart().
 * @param WC_Product $product Product object.
 *
 * @return array
 */
function np_woocommerce_loop_add_to_cart_args($args, $product) {
    global $post;
    $classes = isset($post->classProductButton) ? $post->classProductButton : '';
    $args['class'] = str_replace($args['class'], 'button', '') . ' ' . $classes;
    return $args;
}

// Remove not need actions for product template - add to cart button
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );

//Disable woocommerce <select> custom design on checkout template
add_action( 'wp_enqueue_scripts', 'dequeue_select2', 100 );
function dequeue_select2() {
    if ( class_exists( 'woocommerce' ) ) {
        wp_dequeue_style( 'select2' );
        wp_deregister_style( 'select2' );
        wp_dequeue_script( 'select2');
        wp_deregister_script('select2');
    }
}