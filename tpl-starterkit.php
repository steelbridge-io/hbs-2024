<?php
/**
 * Template Name: Starter Kit
 */
?>

<?php
// Dequeue Styles

function project_dequeue_unnecessary_styles() {
  wp_dequeue_style( 'happybrainsciencecom-style' );
  wp_deregister_style( 'happybrainsciencecom-style' );
}
add_action( 'wp_print_styles', 'project_dequeue_unnecessary_styles' );
?>

<?php get_header(); ?>

    <?php if ( have_rows( 'newsletter' ) ) : ?>
      <?php while ( have_rows( 'newsletter' ) ) : the_row(); ?>
      <section id="newsletter" class="row h-70 my-auto height-auto-mobile" style="background-image=<?php echo get_sub_field( 'background_image' ); ?>;">
        <div class="container my-auto mt-5">
            <div class="row my-auto">
              <div class="col-12 col-lg-8 offset-lg-2 text-center mb-2">
                <h2 class="mb-4"><?php echo get_sub_field( 'title' ); ?></h2>
                <p><?php echo get_sub_field( 'description' ); ?></p>
              </div>
              <div class="col-12 col-md-6 offset-md-3 col-lg-4 offset-lg-4 text-center newsletter-form">
                <?php echo do_shortcode( get_sub_field( 'form' ) ); ?>
              </div>
            </div>
        </div>
      </section>
      <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>
