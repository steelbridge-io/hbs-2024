<?php
/**
 * Block template file:
 *
 * Gamevideo Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'gamevideo-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-gamevideo';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<div id="<?php echo esc_attr( $id ); ?>" >
    <div class="row video-wrapper p-0 <?php echo esc_attr( $classes ); ?>">
        <div class="container">
            <div id="video-container" class="row easy-to-use">
            <div class="col-sm-12 text-center">
                <h2 class="mb-0"><?php echo get_field( 'title' ); ?></h2>
            </div>
            <div class="col-lg-5 pt-5">
                <h4><?php echo get_field( 'subtitle' ); ?></h4>
                <?php if ( have_rows( 'features' ) ) : ?>
                    <ul>
                    <?php while ( have_rows( 'features' ) ) : the_row(); ?>

                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/checkbox-new.png"><?php echo get_sub_field( 'feature_text' ); ?></li>
                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                </ul>
            </div>
            <div id="game-video" class="offset-lg-1 col-lg-6 pt-5">
                <div class="video-wrap">
                    <iframe id="ytplayer" type="text/html" width="720" height="405" src="<?php echo get_field( 'video' ); ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-sm-12 pt-5">
                <p><strong><?php echo get_field( 'bottom_text' ); ?></strong></p>
            </div>
            </div>
        </div>
    </div>
</div>
