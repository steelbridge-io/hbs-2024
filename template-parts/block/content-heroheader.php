<?php
/**
 * Block template file:
 *
 * Heroheader Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'heroheader-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-heroheader';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
    <section id="gameHero" class="main-header row no-padding h-100" style="background-image: url('<?php echo get_field( 'background_image' ); ?>');">
        <div class="container h-100">
        <div class="row no-padding h-100">
            <div class="col-sm-12 my-auto">
            <div class="main-header-content">
                <h1 class="title"><?php echo get_field( 'title' ); ?></h1>
                <h2 class="subtitle"><?php echo get_field( 'subtitle' ); ?></h2>
                <?php $button = get_field( 'button' ); ?>
                <?php if ( $button ) : ?>
                    <a href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>" class="btn btn-primary watch-btn"><?php echo esc_html( $button['title'] ); ?></a>
                <?php endif; ?>

            </div>
            </div>
        </div>
        </div>
    </section>
</div>
