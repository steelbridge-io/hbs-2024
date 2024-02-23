<?php
/**
 * Block template file:
 *
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonial-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-testimonial';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
    <div class="row testimonial-wrapper" style="background-color: <?php echo get_field( 'background_color' ); ?>">
        <div class="container">
            <div class="row testimonials p-3">
            <?php $author_image = get_field( 'author_image' ); ?>
            <?php if ( $author_image ) : ?>
                <div class="col-sm-12 text-center pb-4">
                    <img class="testimonial-headshot" src="<?php echo esc_url( $author_image['url'] ); ?>" alt="<?php echo esc_attr( $author_image['alt'] ); ?>" />
                </div>
            <?php endif; ?>
            <div class="col-sm-12">
                <h3 class="testimonial-text"><?php echo get_field( 'testimonial_text' ); ?></h3>
                <p class="testimonial-author"><?php echo get_field( 'author' ); ?></p>
            </div>
            </div>
        </div>
    </div>
</div>
