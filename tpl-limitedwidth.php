<?php
/**
 * Template Name: Limited width
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

<div class="row limited-width-wrapper">
    <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>