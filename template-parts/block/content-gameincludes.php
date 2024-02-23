<?php
/**
 * Block template file:
 *
 * Gameincludes Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'gameincludes-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-gameincludes';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
    <div class="row whats-included">
        <section class="investment-bottom">
            <div class="container">
            <div class="col-sm-12">
                <?php echo get_field( 'text' ); ?>
            </div>

            <div class="col-sm-12 text-center">
                <p class="price"><?php echo get_field( 'price' ); ?></p>
                <?php if ( have_rows( 'call_to_action_button' ) ) : ?>
                    <?php while ( have_rows( 'call_to_action_button' ) ) : the_row(); ?>
                        <?php $button = get_sub_field( 'button' ); ?>
                        <?php $theProduct = get_sub_field( 'product' ); ?>
                        <?php if ( $theProduct ) : ?>
                            <?php
                                $_pf = new WC_Product_Factory();
                                $myProduct = $_pf->get_product( $theProduct );
                            ?>
                            <?php if ( $button ) : ?>
                                <div class="col-sm-12 buy-button my-auto text-center pt-0">
                                    <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" rel="nofollow"><?php echo esc_html( $button['title'] ); ?></a>
                                </div>
                            <?php endif; ?>
                        <?php else: ?>
                            <?php if ( $button ) : ?>
                                <div class="col-sm-12 buy-button my-auto text-center pt-0">
                                <a href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>" class="btn btn-primary buy-btn"><?php echo esc_html( $button['title'] ); ?></a>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            </div>
        </section>
        </div>
</div>
