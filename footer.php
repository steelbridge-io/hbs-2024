<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package happybrainsciencecom
 */
?>

	</div><!-- #content -->

	<footer>
    <div class="container text-light">
      <div class="row my-auto pb-0">
          <?php $footer_logo = get_field( 'footer_logo', 'option' ); ?>
          <?php if ( $footer_logo ) : ?>
            <div class="col-12 col-lg-5 text-right">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img class="footer-logo mb-4" src="<?php echo esc_url( $footer_logo['url'] ); ?>" alt="<?php echo esc_attr( $footer_logo['alt'] ); ?>" />
              </a>
            </div>
          <?php endif; ?>
          <div class="col-12 col-lg-7 pl-5 text-left">
            <div class="footer-menu-wrapper mt-3">
                <?php
                  wp_nav_menu( array(
                  'theme_location'  => 'footer',
                  'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                  'container'       => 'ul',
                  // 'container_class' => 'collapse navbar-collapse',
                  // 'container_id'    => 'bs-example-navbar-collapse-1',
                  'menu_id'   		=> 'footer-menu',
                  'menu_class'      => 'navbar-nav ml-auto',
                  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'          => new WP_Bootstrap_Navwalker(),
                  ) );
              ?>
            </div>
          </div>
      </div>
      <div class="row my-auto pb-0 pt-4">
          <div class="col-12 col-lg-5 text-right">
            <p class="footer-description"><?php echo get_field( 'footer_description', 'option' ); ?></p>
          </div>
          <div class="col-12 col-lg-7 pl-5 text-left">
            <?php $footer_phone = get_field( 'footer_phone', 'option' ); ?>
            <?php if ( $footer_phone ) : ?>
              <a class="d-block" href="<?php echo esc_url( $footer_phone['url'] ); ?>" target="<?php echo esc_attr( $footer_phone['target'] ); ?>"><?php echo esc_html( $footer_phone['title'] ); ?></a>
            <?php endif; ?>
            <?php $footer_email = get_field( 'footer_email', 'option' ); ?>
            <?php if ( $footer_email ) : ?>
              <a class="d-block" href="<?php echo esc_url( $footer_email['url'] ); ?>" target="<?php echo esc_attr( $footer_email['target'] ); ?>"><?php echo esc_html( $footer_email['title'] ); ?></a>
            <?php endif; ?>
            <?php if ( have_rows( 'social_media_icons', 'option' ) ): ?>
              <div class="social-icons mt-3">
              <?php while ( have_rows( 'social_media_icons', 'option' ) ) : the_row(); ?>
                <?php if ( get_row_layout() == 'social_icon' ) : ?>
                  <?php $social_media_image = get_sub_field( 'social_media_image' ); ?>
                  <?php if ( $social_media_image ) : ?>
                    <a href="<?php echo get_sub_field( 'social_media_url' ); ?>"
                       target="_blank" class="social-link d-inline-block mr-2">
                      <img class="social-icon" src="<?php echo esc_url( $social_media_image['url'] ); ?>" alt="<?php echo esc_attr( $social_media_image['alt'] ); ?>">
                    </a>
                  <?php endif; ?>
                <?php endif; ?>
              <?php endwhile; ?>
              </div>
            <?php endif; ?>
          </div>
      </div>
      <div class="row my-auto mb-5 copyright-row">
        <div class="col-12 text-center">
          <p class="copyright"><?php echo do_shortcode( get_field( 'footer_copyright', 'option' ) ); ?></p>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

</body>
</html>
