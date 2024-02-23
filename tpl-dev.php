<?php
/**
 * Template Name: Development
 *
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          var_dump( get_theme_mod( 'custom_logo' ) );
          $logo = wp_get_attachment_url( $custom_logo_id , 'full' );
          var_dump( $logo );
          if ( has_custom_logo() ) {
                  echo '<div class="logo_image_wrap"><img class="logo_image" src="' . esc_url( $logo ) . '" alt="' . get_bloginfo( 'name' ) . '"></div>';
          } else { ?>
                  <h1 class="site-title">Happy Brain Science</h1>
              <h2 class="site-tagline--first_line">Fostering productivity, creativity &amp; happiness through</h2>
              <h2 class="site-tagline--second_line">the application of cutting-edge brain science.</h2>
          <?php } ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
