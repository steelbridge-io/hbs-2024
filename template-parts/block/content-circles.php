<?php
/**
 * Block template file:
 *
 * Circles Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'circles-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-circles';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
    <?php if ( have_rows( 'circles' ) ) : ?>
        <div class="container">
            <div class="row bonus-details mt-5 mb-2">
            <?php while ( have_rows( 'circles' ) ) : the_row(); ?>
                <div class="col-lg-4 mb-3">
                    <div class="circle">
                        <span><?php echo get_sub_field( 'title' ); ?></span>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
	<?php endif; ?>
    <div class="container">
        <div class="row pt-0 pb-5 international">
            <div class="col-sm-12">
            <?php echo get_field( 'subtext' ); ?>
            </div>
        </div>
    </div>
</div>
