<?php
/**
 * Template Name: Leading for happiness ACF
 *
 */

// Dequeue Styles

function project_dequeue_unnecessary_styles() {
  wp_dequeue_style( 'happybrainsciencecom-style' );
  wp_deregister_style( 'happybrainsciencecom-style' );
}
add_action( 'wp_print_styles', 'project_dequeue_unnecessary_styles' );

$_pf = new WC_Product_Factory();
$myProduct = $_pf->get_product('17741');
?>

<?php get_header(); ?>

<?php if ( have_rows( 'blocks' ) ): ?>
	<?php while ( have_rows( 'blocks' ) ) : the_row(); ?>
		<?php if ( get_row_layout() == 'hero_header' ) : ?>
      <?php
        $background_image = '';
        if ( get_sub_field( 'background_image' ) ) :
				  $background_image = get_sub_field( 'background_image' );
        endif
      ?>
      <section id="leadingHero" class="leading-hero row no-padding" style="background-image: url('<?php echo $background_image; ?>');">
        <div class="container h-100">
          <div class="row no-padding h-50 pt-5 pb-5">
              <div class="hero-content col-lg-6 my-auto text-white">
                  <h1 class="hero-title mb-0"><?php echo get_sub_field( 'title' ); ?></h1>
                  <h2 class="hero-subtitle"><?php echo get_sub_field( 'subtitle' ); ?></h2>
              </div>
              <div id="hero-video" class="col-lg-6 my-auto">
                  <div class="video-wrap">
                      <div class="video-btn" data-toggle="modal" data-src="<?php echo get_sub_field( 'video_url' ); ?>" data-target="#myModal">
                          <?php $thumbnail_image = get_sub_field( 'thumbnail_image' ); ?>
                          <?php if ( $thumbnail_image ) : ?>
                            <img src="<?php echo esc_url( $thumbnail_image['url'] ); ?>" alt="<?php echo esc_attr( $thumbnail_image['alt'] ); ?>" style="width: 100%;"/>
                          <?php endif; ?>
                          <?php $play_button_icon = get_sub_field( 'play_button_icon' ); ?>
                          <?php if ( $play_button_icon ) : ?>
                            <img class="play-btn" src="<?php echo esc_url( $play_button_icon['url'] ); ?>" alt="<?php echo esc_attr( $play_button_icon['alt'] ); ?>" />
                          <?php endif; ?>
                      </div>
                  </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <!-- 16:9 aspect ratio -->
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <?php if ( get_sub_field( 'line_divider' ) ) : ?>
            <div class="separator" style="background-image: url('<?php echo get_sub_field( 'line_divider' ); ?>');"></div>
          <?php endif ?>

          <div class="row no-padding h-50 session-row pt-5 pb-5">
              <div class="session-content my-auto w-100">
                  <h3 class="session-title font-weight-bold text-center w-100 mb-2"><?php echo get_sub_field( 'details_title' ); ?></h3>
                  <h3 class="session-description text-center w-100 mb-3 mx-auto"><?php echo get_sub_field( 'details_description' ); ?></h3>
                  <h3 class="session-date font-weight-bold text-center w-100 text-white mb-0"><?php echo get_sub_field( 'details_date' ); ?></h3>
              </div>
          </div>
        </div>
      </section>
		<?php elseif ( get_row_layout() == 'opportunity' ) : ?>
      <div class="container">
        <div class="row simple-text">
            <div class="col-12 text-center">
                <h2><?php echo removeptags(get_sub_field( 'title' )); ?></h2>
            </div>
            <div class="col-12 mb-4">
              <?php echo get_sub_field( 'first_paragraph' ); ?>
            </div>
            <div class="col-12 light-blue-text mb-4">
              <?php echo get_sub_field( 'second_paragraph' ); ?>
            </div>
            <div class="col-12">
            <?php echo get_sub_field( 'third_paragraph' ); ?>
            </div>
        </div>
      </div>
		<?php elseif ( get_row_layout() == 'institutions' ) : ?>
      <div class="row text-white" style="background-color: #f79424;">
        <div class="container">
            <div class="row pt-0 pb-0">
                <div class="col-sm-12 text-center">
                    <?php echo get_sub_field( 'subtitle' ); ?>
                    <h2><?php echo removeptags(get_sub_field( 'title' )); ?></h2>
                </div>
                <?php if ( have_rows( 'institution_blocks' ) ) : ?>
                  <?php while ( have_rows( 'institution_blocks' ) ) : the_row(); ?>
                    <div class="col-md-4 text-center">
                      <?php $institution_logo = get_sub_field( 'institution_logo' ); ?>
                      <?php if ( $institution_logo ) : ?>
                        <div class="circle-icon-wrapper center-circle mb-3">
                            <span class="circle-icon"> <img src="<?php echo esc_url( $institution_logo['url'] ); ?>" alt="<?php echo esc_attr( $institution_logo['alt'] ); ?>"></span>
                        </div>
                      <?php endif; ?>
                        <p><?php echo get_sub_field( 'institution_title' ); ?></p>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
      </div>
		<?php elseif ( get_row_layout() == 'testimonial' ) : ?>
      <div class="row testimonial-wrapper static-testimonial" style="background-color: <?php echo get_sub_field( 'background_color' ); ?>">
        <div class="container">
            <div class="row testimonials p-3">
              <?php $author_image = get_sub_field( 'author_image' ); ?>
              <?php if ( $author_image ) : ?>
                <div class="col-sm-12 text-center pb-4">
                    <img class="testimonial-headshot" src="<?php echo esc_url( $author_image['url'] ); ?>" alt="<?php echo esc_attr( $author_image['alt'] ); ?>">
                </div>
              <?php endif; ?>
              <div class="col-sm-12">
                <?php if ( have_rows( 'testimonials_paragraphs' ) ) : ?>
                  <?php while ( have_rows( 'testimonials_paragraphs' ) ) : the_row(); ?>
                    <h3 class="testimonial-text"><?php echo removeptags( get_sub_field( 'testimonial_paragraph' )); ?></h3>
                  <?php endwhile; ?>
                <?php endif; ?>
                <p class="testimonial-author"><?php echo get_sub_field( 'author_name_and_title' ); ?></p>
              </div>
            </div>
        </div>
      </div>
		<?php elseif ( get_row_layout() == 'call_to_action_row' ) : ?>
      <div class="container">
        <div class="row happier-team">
          <div class="col-sm-12 text-center">
            <h2 class="mb-0"><?php echo removeptags(get_sub_field( 'title' )); ?></h2>
          </div>
          <?php if ( have_rows( 'call_to_action_button' ) ) : ?>
            <?php while ( have_rows( 'call_to_action_button' ) ) : the_row(); ?>
                <?php $button = get_sub_field( 'button' ); ?>
                <?php $theProduct = get_sub_field( 'add_to_cart_product' ); ?>
                <?php if ( $theProduct ) : ?>
                    <?php
                        $_pf = new WC_Product_Factory();
                        $myProduct = $_pf->get_product( $theProduct );
                    ?>
                    <?php if ( $button ) : ?>
                        <div class="col-sm-12 buy-button my-auto text-center pt-4">
                            <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn mt-0 product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" rel="nofollow"><?php echo esc_html( $button['title'] ); ?></a>
                        </div>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if ( $button ) : ?>
                        <div class="col-sm-12 buy-button my-auto text-center pt-4">
                        <a href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>" class="btn btn-primary buy-btn mt-0"><?php echo esc_html( $button['title'] ); ?></a>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
		<?php elseif ( get_row_layout() == 'program_information' ) : ?>
      <?php if ( get_sub_field( 'separator' ) ) : ?>
        <div class="row round-separator" style="background-image: url('<?php echo get_sub_field( 'separator' ); ?>');">
        </div>
			<?php endif ?>
      <div class="row simple-text light-blue pt-0">
          <div class="container">
              <div class="row pt-0 pb-0">
                <div class="col-sm-12">
                  <h2 class="mb-5 text-center"><?php echo get_sub_field( 'information_title' ); ?></h2>
                  <?php echo get_sub_field( 'information' ); ?>
                </div>
                <div class="col-sm-12 mt-4 text-center">
                  <?php $information_image = get_sub_field( 'information_image' ); ?>
                  <?php if ( $information_image ) : ?>
                    <img class="w-100 information-image" src="<?php echo esc_url( $information_image['url'] ); ?>" alt="<?php echo esc_attr( $information_image['alt'] ); ?>" />
                  <?php endif; ?>
                  <h3 class="orange-text mt-4 text-center"><?php echo get_sub_field( 'information_image_description' ); ?></h3>
                </div>
              </div>
          </div>
      </div>
		<?php elseif ( get_row_layout() == 'coaches' ) : ?>
      <div class="row simple-text">
        <div class="container">
            <div class="row pt-0 pb-0">
              <div class="col-sm-12">
                <h3 class="text-center"><?php echo removeptags(get_sub_field( 'title' )); ?></h3>
                <?php echo get_sub_field( 'subtitle' ); ?>
              </div>
              <?php $coach_1 = get_sub_field( 'coach_1' ); ?>
              <?php if ( $coach_1 ) : ?>
                <div class="col-md-6 mt-4 coach-col">
                  <img class="w-100" src="<?php echo esc_url( $coach_1['url'] ); ?>" alt="<?php echo esc_attr( $coach_1['alt'] ); ?>">
                </div>
              <?php endif; ?>

              <?php $coach_2 = get_sub_field( 'coach_2' ); ?>
              <?php if ( $coach_2 ) : ?>
                <div class="col-md-6 mt-4 coach-col">
                  <img class="w-100" src="<?php echo esc_url( $coach_2['url'] ); ?>" alt="<?php echo esc_attr( $coach_2['alt'] ); ?>">
                </div>
              <?php endif; ?>
              <div class="mt-4 col-sm-12">
                <?php echo get_sub_field( 'description' ); ?>
              </div>
            </div>
        </div>
      </div>
		<?php elseif ( get_row_layout() == 'meeting' ) : ?>
      <div class="row simple-text light-blue">
        <div class="container">
          <div class="row pt-0 pb-0">
            <div class="col-sm-12">
              <h3 class="text-center"><?php echo removeptags(get_sub_field( 'title' )); ?></h3>
              <?php echo get_sub_field( 'description' ); ?>
            </div>
            <div class="col-md-6 mt-4 my-auto">
              <?php echo get_sub_field( 'program' ); ?>
            </div>
            <div class="col-md-6 mt-4 my-auto">
              <?php $meeting_image = get_sub_field( 'meeting_image' ); ?>
              <?php if ( $meeting_image ) : ?>
                <img class="w-100" src="<?php echo esc_url( $meeting_image['url'] ); ?>" alt="<?php echo esc_attr( $meeting_image['alt'] ); ?>" />
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
		<?php elseif ( get_row_layout() == 'course_feature' ) : ?>
      <div class="row simple-text" style="background-color: <?php echo get_sub_field( 'background_color' ); ?>;">
        <div class="container">
            <div class="row pt-0 pb-0">
              <?php $icon = get_sub_field( 'icon' ); ?>
              <?php if ( $icon ) : ?>
                <div class="col-12 text-center mb-4">
                  <img class="section-logo" src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>">
                </div>
              <?php endif; ?>
              <div class="col-sm-12">
                <h3 class="text-center"><?php echo get_sub_field( 'title' ); ?></h3>
                <?php echo get_sub_field( 'description' ); ?>
              </div>
            </div>
        </div>
      </div>
		<?php elseif ( get_row_layout() == 'how_we_meet' ) : ?>
      <div class="row simple-text">
        <div class="container">
            <div class="row pt-0 pb-0">
              <?php $icon = get_sub_field( 'icon' ); ?>
              <?php if ( $icon ) : ?>
                <div class="col-12 text-center mb-4">
                  <img class="section-logo" src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>">
                </div>
              <?php endif; ?>
              <div class="col-sm-12">
                <h3 class="text-center"><?php echo removeptags(get_sub_field( 'title' )); ?></h3>
              </div>
              <div class="col-md-6 mt-4">
                <?php echo get_sub_field( 'description' ); ?>
              </div>
              <div class="col-md-6 mt-4 my-auto pl-0 pr-0">
                <?php $meeting_image = get_sub_field( 'meeting_image' ); ?>
                <?php if ( $meeting_image ) : ?>
                  <img class="w-100" src="<?php echo esc_url( $meeting_image['url'] ); ?>" alt="<?php echo esc_attr( $meeting_image['alt'] ); ?>" />
                <?php endif; ?>
              </div>
            </div>
        </div>
      </div>
		<?php elseif ( get_row_layout() == 'offer' ) : ?>
      <?php
        $background_image = '';
        if ( get_sub_field( 'background_image' ) ) :
				  $background_image = get_sub_field( 'background_image' );
        endif
      ?>
      <div class="row simple-text pattern-background" style="background-image: url('<?php echo $background_image; ?>');">
        <div class="container">
          <div class="row pt-0 pb-0">
            <div class="col-sm-12 text-center">
              <h3><?php echo removeptags(get_sub_field( 'title' )); ?></h3>
              <?php echo get_sub_field( 'subtitle' ); ?>
            </div>
            <?php if ( have_rows( 'box' ) ) : ?>
              <div class="col-12 col-lg-10 offset-lg-1 p-5 text-center orange-box text-white" style="background-color: rgba(247,148,36,.75);">
                <?php while ( have_rows( 'box' ) ) : the_row(); ?>
                  <h2><?php echo get_sub_field( 'title' ); ?></h2>
                  <h3 class="mb-0"><?php echo get_sub_field( 'subtitle' ); ?></h3>
                  <?php echo get_sub_field( 'description' ); ?>

                  <?php if ( have_rows( 'call_to_action_button' ) ) : ?>
                    <?php while ( have_rows( 'call_to_action_button' ) ) : the_row(); ?>
                        <?php $button = get_sub_field( 'button' ); ?>
                        <?php $theProduct = get_sub_field( 'add_to_cart_product' ); ?>
                        <?php if ( $theProduct ) : ?>
                            <?php
                                $_pf = new WC_Product_Factory();
                                $myProduct = $_pf->get_product( $theProduct );
                            ?>
                            <?php if ( $button ) : ?>
                              <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn mt-4 blue-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" rel="nofollow"><?php echo esc_html( $button['title'] ); ?></a>
                            <?php endif; ?>
                        <?php else: ?>
                            <?php if ( $button ) : ?>
                              <a href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>" class="btn btn-primary buy-btn mt-4"><?php echo esc_html( $button['title'] ); ?></a>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                  <?php endif; ?>

                <?php endwhile; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
		<?php elseif ( get_row_layout() == 'animation_section' ) : ?>
      <div class="row simple-text text-white" style="background-color: #48A9AC;">
        <div class="container">
          <div class="row pt-0 pb-0 text-center">
            <div class="col-sm-12">
              <h2 class="text-white"><?php echo removeptags(get_sub_field( 'title' )); ?></h2>
              <?php echo get_sub_field( 'subtitle' ); ?>
            </div>
            <?php if ( get_sub_field( 'animation_image' ) ) : ?>
              <div class="col-lg-6 offset-lg-3">
                <img class="productivity-animation" src="<?php echo get_sub_field( 'animation_image' ); ?>" alt="">
              </div>
            <?php endif ?>
            <?php if ( have_rows( 'call_to_action_button' ) ) : ?>
              <?php while ( have_rows( 'call_to_action_button' ) ) : the_row(); ?>
                  <?php $button = get_sub_field( 'button' ); ?>
                  <?php $theProduct = get_sub_field( 'add_to_cart_product' ); ?>
                  <?php if ( $theProduct ) : ?>
                      <?php
                          $_pf = new WC_Product_Factory();
                          $myProduct = $_pf->get_product( $theProduct );
                      ?>
                      <?php if ( $button ) : ?>
                          <div class="col-sm-12 buy-button my-auto text-center pt-4">
                              <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn mt-0 product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" rel="nofollow"><?php echo esc_html( $button['title'] ); ?></a>
                          </div>
                      <?php endif; ?>
                  <?php else: ?>
                      <?php if ( $button ) : ?>
                          <div class="col-sm-12 buy-button my-auto text-center pt-4">
                          <a href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>" class="btn btn-primary buy-btn mt-0"><?php echo esc_html( $button['title'] ); ?></a>
                          </div>
                      <?php endif; ?>
                  <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
		<?php elseif ( get_row_layout() == 'simple_text' ) : ?>
      <div class="row simple-text" style="background-color: <?php the_sub_field( 'background_color' ); ?>">
        <div class="container">
          <div class="row pt-0 pb-0">
            <div class="col-sm-12">
              <h2 class="text-center"><?php echo removeptags(get_sub_field( 'title' )); ?></h2>
              <?php the_sub_field( 'description' ); ?>
              <?php if ( get_sub_field( 'call_to_action_paragraph' )) : ?>
                <p>
                  <?php the_sub_field( 'call_to_action_paragraph' ); ?>
                  <?php if ( have_rows( 'call_to_action_button' ) ) : ?>
                    <?php while ( have_rows( 'call_to_action_button' ) ) : the_row(); ?>
                        <?php $button = get_sub_field( 'button' ); ?>
                        <?php $theProduct = get_sub_field( 'add_to_cart_product' ); ?>
                        <?php if ( $theProduct ) : ?>
                            <?php
                                $_pf = new WC_Product_Factory();
                                $myProduct = $_pf->get_product( $theProduct );
                            ?>
                            <?php if ( $button ) : ?>
                              <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" rel="nofollow"><?php echo esc_html( $button['title'] ); ?></a>
                            <?php endif; ?>
                        <?php else: ?>
                            <?php if ( $button ) : ?>
                              <a href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>" class="product_type_simple add_to_cart_button ajax_add_to_cart"><?php echo esc_html( $button['title'] ); ?></a>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
		<?php elseif ( get_row_layout() == 'register' ) : ?>
      <?php
        $background_image = '';
        if ( get_sub_field( 'background_image' ) ) :
				  $background_image = get_sub_field( 'background_image' );
        endif
      ?>
      <div class="row simple-text pattern-background text-white" style="background-image: url('<?php echo $background_image; ?>');">
        <div class="container">
            <div class="row pt-0 pb-0">
              <div class="col-sm-12 text-center">
                <h2><?php echo removeptags(get_sub_field( 'title' )); ?></h2>
                <h3 class="mb-0"><?php the_sub_field( 'subtitle' ); ?></h3>
                <?php the_sub_field( 'description' ); ?>
              </div>
              <?php if ( have_rows( 'call_to_action_button' ) ) : ?>
                <?php while ( have_rows( 'call_to_action_button' ) ) : the_row(); ?>
                    <?php $button = get_sub_field( 'button' ); ?>
                    <?php $theProduct = get_sub_field( 'add_to_cart_product' ); ?>
                    <?php if ( $theProduct ) : ?>
                        <?php
                            $_pf = new WC_Product_Factory();
                            $myProduct = $_pf->get_product( $theProduct );
                        ?>
                        <?php if ( $button ) : ?>
                            <div class="col-12 text-center">
                                <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn mt-4 blue-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" rel="nofollow"><?php echo esc_html( $button['title'] ); ?></a>
                            </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if ( $button ) : ?>
                            <div class="col-12 text-center">
                            <a href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>" class="btn btn-primary buy-btn mt-4 blue-btn"><?php echo esc_html( $button['title'] ); ?></a>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
        </div>
      </div>
		<?php endif; ?>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
