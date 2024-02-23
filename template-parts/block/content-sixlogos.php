<?php
/**
 * Block template file:
 *
 * Sixlogos Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'sixlogos-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-sixlogos';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
    <?php if ( have_rows( 'feature_in' ) ) : ?>
        <?php while ( have_rows( 'feature_in' ) ) : the_row(); ?>
            <div class="container">
                <div class="row companies-helped">
                    <div class="col-sm-12 text-center">
                        <h2><?php echo get_sub_field( 'title' ); ?></h2>
                    </div>
                    <?php if ( have_rows( 'company_logos' ) ) : ?>
                        <div class="col-sm-12 client-logos">
                            <div class="row no-padding">
                            <?php while ( have_rows( 'company_logos' ) ) : the_row(); ?>
                                <?php $company_url = get_sub_field( 'company_url' ); ?>
                                    <?php $company_logo = get_sub_field( 'company_logo' ); ?>
                                    <?php if ( $company_url ) : ?>
                                        <?php if ( $company_logo ) : ?>
                                            <div class="col-md-2 col-6 my-auto mobile-space-bottom">
                                                <a href="<?php echo esc_url( $company_url['url'] ); ?>" target="<?php echo esc_attr( $company_url['target'] ); ?>">
                                                <img src="<?php echo esc_url( $company_logo['url'] ); ?>" alt="<?php echo esc_attr( $company_logo['alt'] ); ?>">
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php else : ?>
                                        <?php if ( $company_logo ) : ?>
                                            <div class="col-md-2 col-6 my-auto mobile-space-bottom">
                                            <img src="<?php echo esc_url( $company_logo['url'] ); ?>" alt="<?php echo esc_attr( $company_logo['alt'] ); ?>">
                                            </div>
                                        <?php endif; ?>
                                <?php endif; ?>
                            <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
	<?php endif; ?>
</div>
