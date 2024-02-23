<?php
/**
 * Block template file:
 *
 * Features Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'features-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-features';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<?php if ( have_rows( 'features' ) ) : ?>
    <?php while ( have_rows( 'features' ) ) : the_row(); ?>
    <div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
        <div class="row no-padding engagement-column light p-2">
            <div class="container">
                <div class="row no-padding">
                        <div class="col-md-3 m-auto py-1">
                            <span><?php echo get_sub_field( 'feature_1' ); ?></span>
                        </div>
                        <?php $feature_icon_1 = get_sub_field( 'feature_icon_1' ); ?>
                        <?php if ( $feature_icon_1 ) : ?>
                        <div class="col-md-1 m-auto py-1">
                            <img src="<?php echo esc_url( $feature_icon_1['url'] ); ?>" alt="<?php echo esc_attr( $feature_icon_1['alt'] ); ?>" />
                        </div>
                        <?php endif; ?>
                        <div class="col-md-3 m-auto py-1">
                        <span><?php echo get_sub_field( 'feature_2' ); ?></span>
                        </div>
                        <?php $feature_icon_2 = get_sub_field( 'feature_icon_2' ); ?>
                        <?php if ( $feature_icon_2 ) : ?>
                        <div class="col-md-1 m-auto py-1">
                            <img src="<?php echo esc_url( $feature_icon_2['url'] ); ?>" alt="<?php echo esc_attr( $feature_icon_2['alt'] ); ?>" />
                        </div>
                        <?php endif; ?>
                        <div class="col-md-3 m-auto py-1">
                            <span><?php echo get_sub_field( 'feature_3' ); ?></span>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
