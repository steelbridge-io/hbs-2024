<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

echo wc_get_stock_html( $product ); // WPCS: XSS ok.

if ( $product->is_in_stock() ) : ?>

    <p class="price"><?php echo $product->get_price_html(); ?></p>

	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

    <a id="add-to-cart" href="<?php echo $product->add_to_cart_url(); ?>" data-quantity="1" class="button button-atc product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $product->get_id(); ?>" data-product_sku="<?php echo $product->get_sku(); ?>" aria-label="Add “Purchase Choose Happiness @ Work” to your cart" rel="nofollow">Add to cart</a>

	<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>


<?php endif; ?>
