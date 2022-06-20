<?php
/**
 * Variable product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/variable.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.5.5
 */
global $product_custom_template;
$product_custom_template = $product_custom_template ? $product_custom_template : 'productTemplate';
include_once get_template_directory() . '/woocommerce/template-parts/' . $product_custom_template . '/single-product/add-to-cart/variable.php';
?>