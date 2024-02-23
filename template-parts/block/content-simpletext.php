<?php
/**
 * Block template file:
 *
 * Simpletext Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'simpletext-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-simpletext';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<div id="<?php echo esc_attr( $id ); ?>" class="row investment <?php echo esc_attr( $classes ); ?>">
    <section class="investment-top">
    <div class="container">
        <div class="col-sm-12">
            <h2><?php echo get_field( 'title' ); ?></h2>
            <p><?php echo get_field( 'description' ); ?></p>
        </div>
    </div>
    </section>
</div>
