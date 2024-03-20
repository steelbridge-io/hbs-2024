<?php
/**
 * Template Name: New Homepage
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

<?php if ( have_rows( 'hero_header' ) ) : ?>
      <?php while ( have_rows( 'hero_header' ) ) : the_row(); ?>
        <?php $background_image = get_sub_field( 'background_image' ); ?>
        <section id="gameHero" class="main-header row no-padding" style="background:url(<?php echo esc_url( $background_image['url'] ); ?>) top left;">
          <div class="container">
            <div class="row no-padding mtb-5vh pt-5 pb-5">
              <div class="hero-content col-lg-6 order-2 order-md-1 pt-5 pb-5 pb-sm-0 pt-md-0">
                <h2><?php echo get_sub_field( 'hero_title' ); ?></h2>
                <h3 class="highlighted"><?php echo get_sub_field( 'highlighted_text' ); ?></h3>
                <h3 class="smaller-heading-mobile"><?php echo get_sub_field( 'description' ); ?></h3>
                <?php if ( have_rows( 'links_list' ) ) : ?>
                  <ul>
                  <?php while ( have_rows( 'links_list' ) ) : the_row(); ?>
                    <?php $list_link = get_sub_field( 'list_link' ); ?>
                    <?php if ( $list_link ) : ?>
                      <li><a href="<?php echo esc_url( $list_link['url'] ); ?>" class="header-link" target="<?php echo esc_attr( $list_link['target'] ); ?>"><?php echo esc_html( $list_link['title'] ); ?></a></li>
                    <?php endif; ?>
                  <?php endwhile; ?>
                  </ul>
                <?php endif; ?>
              </div>
              <div id="hero-video" class="col-lg-6 order-1 order-md-2 pt-md-5 pt-lg-0">
                <div class="video-wrap">
                    <div class="video-btn" data-toggle="modal" data-src="<?php echo get_sub_field( 'popup_video_url' ); ?>" data-target="#myModal">
                      <?php $video_poster = get_sub_field( 'video_poster' ); ?>
                      <video class="html5-main-video" poster="<?php echo esc_url( $video_poster['url'] ); ?>" src="<?php echo get_sub_field( 'video_url' ); ?>" loop autoplay muted playsinline></video>
                    </div>
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
                      <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'benefits' ) ) : ?>
      <?php while ( have_rows( 'benefits' ) ) : the_row(); ?>
        <div class="container">
            <div class="row happier-team">
                <div class="col-sm-12 text-center">
                    <h2><?php echo get_sub_field( 'benefits_title' ); ?></h2>
                </div>
            <?php $call_to_action = get_sub_field( 'call_to_action' ); ?>
            <?php if ( have_rows( 'benefits_column' ) ) : ?>
          <?php while ( have_rows( 'benefits_column' ) ) : the_row(); ?>
                <div class="col-md-4 text-center mobile-space-bottom">
                    <?php if ( get_sub_field( 'icon' ) ) : ?>
                    <a href="<?php echo esc_url( $call_to_action['url'] ); ?>" target="<?php echo esc_attr( $call_to_action['target'] ); ?>">
                        <div class="circle-icon-wrapper center-circle">
                        <span class="circle-icon"><img src="<?php echo get_sub_field( 'icon' ); ?>"></span>
                        </div>
                    </a>
                    <?php endif ?>
                    <strong><?php echo get_sub_field( 'title' ); ?></strong>
                    <p><?php echo get_sub_field( 'description' ); ?></p>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if ( $call_to_action ) : ?>
                <div class="col-sm-12 buy-button my-auto text-center pt-4">
                <a href="<?php echo esc_url( $call_to_action['url'] ); ?>" class="btn btn-primary buy-btn" target="<?php echo esc_attr( $call_to_action['target'] ); ?>"><?php echo esc_html( $call_to_action['title'] ); ?></a>
                </div>
            <?php endif; ?>
            </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'feature_in' ) ) : ?>
      <?php while ( have_rows( 'feature_in' ) ) : the_row(); ?>
      <div class="container-bg light-blue">
        <div class="container">
          <div class="row companies-helped">
            <div class="col-sm-12 text-center">
              <h2 class="mb-5"><?php echo get_sub_field( 'title' ); ?></h2>
            </div>
            <?php if ( have_rows( 'company_logos' ) ) : ?>
              <div class="col-sm-12 client-logos">
                <div class="row no-padding mb-3 mt-3">
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
      </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'features' ) ) : ?>
      <?php while ( have_rows( 'features' ) ) : the_row(); ?>
        <div class="row no-padding engagement-column light p-3">
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
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'research' ) ) : ?>
      <?php while ( have_rows( 'research' ) ) : the_row(); ?>
        <div class="container-bg orange">
          <div class="container">
            <div class="row lifes-too-short">
              <div class="col-sm-12">
                <h2 class="text-white"><?php echo get_sub_field( 'title' ); ?></h2>
              </div>
              <?php $animation = get_sub_field( 'animation' ); ?>
              <?php $animation_link = get_sub_field( 'animation_link' ); ?>
              <?php if ( $animation_link && $animation) : ?>
                <div class="col-lg-6 offset-lg-3">
                  <a href="<?php echo esc_url( $animation_link['url'] ); ?>" target="<?php echo esc_attr( $animation_link['target'] ); ?>">
                    <img class="productivity-animation" src="<?php echo esc_url( $animation['url'] ); ?>" alt="<?php echo esc_attr( $animation['alt'] ); ?>">
                  </a>
                </div>
              <?php else: ?>
                <?php if ( $animation ) : ?>
                <div class="col-lg-6 offset-lg-3">
                  <img class="productivity-animation" src="<?php echo esc_url( $animation['url'] ); ?>" alt="<?php echo esc_attr( $animation['alt'] ); ?>">
                </div>
                <?php endif; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'how_we_help' ) ) : ?>
      <?php while ( have_rows( 'how_we_help' ) ) : the_row(); ?>
      <section id="how-we-help" class="row h-90 height-auto-mobile p-0" style="background-image: url(<?php echo get_sub_field( 'background_image' ); ?>);">
        <div class="container">
            <div class="row h-100 my-auto">
              <div class="col-12 col-lg-7 offset-lg-5 my-auto">
                <h2 class="mb-4"><?php echo get_sub_field( 'title' ); ?></h2>
                <h3><?php echo get_sub_field( 'subtitle' ); ?></h3>
                <?php echo get_sub_field( 'description' ); ?>
                <?php $call_to_action_button = get_sub_field( 'call_to_action_button' ); ?>
                <?php if ( $call_to_action_button ) : ?>
                  <a href="<?php echo esc_url( $call_to_action_button['url'] ); ?>" target="<?php echo esc_attr( $call_to_action_button['target'] ); ?>" class="btn btn-primary buy-btn product_type_simple mt-4"><?php echo esc_html( $call_to_action_button['title'] ); ?></a>
                <?php endif; ?>
              </div>
            </div>
        </div>
      </section>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'clients' ) ) : ?>
      <?php while ( have_rows( 'clients' ) ) : the_row(); ?>
      <div id="clients" class="container-bg light-blue">
        <div class="container">
          <div class="row companies-helped">
            <div class="col-sm-12 text-center">
              <h2><?php echo get_sub_field( 'title' ); ?></h2>
            </div>
            <div class="col-sm-12 client-logos">
              <div class="row no-padding mb-3 mt-3">
              <?php if ( have_rows( 'companies' ) ) : ?>
                <?php $index = 0; ?>
                <?php while ( have_rows( 'companies' ) ) : the_row(); ?>
                  <?php $company1_url = get_sub_field( 'company_url' ); ?>
                  <?php $company1_logo = get_sub_field( 'company1_logo' ); ?>
                  <?php $company2_url = get_sub_field( 'company2_url' ); ?>
                  <?php $company2_logo = get_sub_field( 'company2_logo' ); ?>
                  <?php
                  $addtional_class = "";
                  $mobile_col_class = "col-6";
                  if ( $index === 0 ) {
                    $addtional_class = "offset-lg-1";
                  }
                  if ( $index === 4 ) {
                    $mobile_col_class = "col-12";
                  } ?>
                  <?php if ( $company1_url ) : ?>
                    <?php if ( $company1_logo ) : ?>
                      <div class="col-md-2 <?php echo $mobile_col_class; ?> my-auto mobile-space-bottom companies-block <?php echo $addtional_class; ?>" block-number="<?php echo $index; ?>" block-delay="<?php echo get_sub_field( 'transition_delay' ); ?>">
                        <!-- <a href="<?php echo esc_url( $company1_url['url'] ); ?>" target="<?php echo esc_attr( $company1_url['target'] ); ?>" class="company-logo" alternative="<?php echo esc_url( $company2_url['url'] ); ?>">
                          <img src="<?php echo esc_url( $company1_logo['url'] ); ?>" alt="<?php echo esc_attr( $company1_logo['alt'] ); ?>" alternative="<?php echo esc_url( $company2_logo['url'] ); ?>">
                        </a> -->
                        <a href="<?php echo esc_url( $company1_url['url'] ); ?>" target="<?php echo esc_attr( $company1_url['target'] ); ?>" class="company-logo company-logo-1 active">
                          <img src="<?php echo esc_url( $company1_logo['url'] ); ?>" alt="<?php echo esc_attr( $company1_logo['alt'] ); ?>">
                        </a>
                        <a href="<?php echo esc_url( $company2_url['url'] ); ?>" target="<?php echo esc_attr( $company2_url['target'] ); ?>" class="company-logo company-logo-2">
                          <img src="<?php echo esc_url( $company2_logo['url'] ); ?>" alt="<?php echo esc_attr( $company2_logo['alt'] ); ?>" >
                        </a>
                      </div>
                    <?php endif; ?>
                  <?php else : ?>
                    <?php if ( $company1_logo ) : ?>
                      <div class="col-md-2 <?php echo $mobile_col_class; ?> my-auto mobile-space-bottom companies-block <?php echo $addtional_class; ?>" block-number="<?php echo $index; ?>">
                        <img src="<?php echo esc_url( $company1_logo['url'] ); ?>" alt="<?php echo esc_attr( $company1_logo['alt'] ); ?>" class="company-logo company-logo-1 active">
                        <img src="<?php echo esc_url( $company2_logo['url'] ); ?>" alt="<?php echo esc_attr( $company2_logo['alt'] ); ?>" class="company-logo company-logo-2">
                      </div>
                    <?php endif; ?>
                  <?php endif; ?>
                  <?php $index++; ?>
                <?php endwhile; ?>
              <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'services' ) ) : ?>
      <?php while ( have_rows( 'services' ) ) : the_row(); ?>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2><?php echo get_sub_field( 'title' ); ?></h2>
              <p><?php echo get_sub_field( 'description' ); ?></p>
            </div>
          </div>
        </div>
        <?php if ( have_rows( 'service1' ) ) : ?>
          <?php while ( have_rows( 'service1' ) ) : the_row(); ?>
          <div class="container">
            <div class="row stress-less pt-0">
              <div class="col-lg-6 image-col">
              <?php $service1_image = get_sub_field( 'service1_image' ); ?>
              <?php if ( $service1_image ) : ?>
                <img src="<?php echo esc_url( $service1_image['url'] ); ?>" alt="<?php echo esc_attr( $service1_image['alt'] ); ?>" />
              <?php endif; ?>
              </div>
              <div class="col-xl-6 col-lg-6 my-auto pl-5 service-text">
                <h4 class="mb-3"><?php echo get_sub_field( 'title' ); ?></h4>
                <?php echo get_sub_field( 'description' ); ?>
                <?php $service1_button = get_sub_field( 'service1_button' ); ?>
                <?php if ( $service1_button ) : ?>
                  <a href="<?php echo esc_url( $service1_button['url'] ); ?>" target="<?php echo esc_attr( $service1_button['target'] ); ?>" class="btn btn-primary buy-btn"><?php echo esc_html( $service1_button['title'] ); ?></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php if ( have_rows( 'service2' ) ) : ?>
          <?php while ( have_rows( 'service2' ) ) : the_row(); ?>
          <div class="container">
            <div class="row stress-less pt-0">
              <div class="col-xl-6 col-lg-6 my-auto order-2 order-lg-1 service-text">
                <h4 class="mb-3"><?php echo get_sub_field( 'title' ); ?></h4>
                <?php echo get_sub_field( 'description' ); ?>
                <?php $service2_button = get_sub_field( 'service2_button' ); ?>
                <?php if ( $service2_button ) : ?>
                  <a href="<?php echo esc_url( $service2_button['url'] ); ?>" target="<?php echo esc_attr( $service2_button['target'] ); ?>" class="btn btn-primary buy-btn"><?php echo esc_html( $service2_button['title'] ); ?></a>
                <?php endif; ?>
              </div>
              <div class="col-lg-6 image-col pl-5 order-1 order-lg-2">
                <?php $service2_image = get_sub_field( 'service2_image' ); ?>
                <?php if ( $service2_image ) : ?>
                  <img src="<?php echo esc_url( $service2_image['url'] ); ?>" alt="<?php echo esc_attr( $service2_image['alt'] ); ?>" />
                <?php endif; ?>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php if ( have_rows( 'service3' ) ) : ?>
          <?php while ( have_rows( 'service3' ) ) : the_row(); ?>
            <div class="container">
              <div class="row stress-less pt-0">
                <div class="col-lg-6 image-col">
                  <?php $service3_image = get_sub_field( 'service3_image' ); ?>
                  <?php if ( $service3_image ) : ?>
                    <img src="<?php echo esc_url( $service3_image['url'] ); ?>" alt="<?php echo esc_attr( $service3_image['alt'] ); ?>" />
                  <?php endif; ?>
                </div>
                <div class="col-xl-6 col-lg-6 my-auto pl-5 service-text">
                  <h4 class="mb-3"><?php echo get_sub_field( 'title' ); ?></h4>
                  <?php echo get_sub_field( 'description' ); ?>
                  <?php $service3_button = get_sub_field( 'service3_button' ); ?>
                  <?php if ( $service3_button ) : ?>
                    <a href="<?php echo esc_url( $service3_button['url'] ); ?>" target="<?php echo esc_attr( $service3_button['target'] ); ?>" class="btn btn-primary buy-btn"><?php echo esc_html( $service3_button['title'] ); ?></a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'testimonials_block' ) ) : ?>
      <?php while ( have_rows( 'testimonials_block' ) ) : the_row(); ?>
        <div class="container">
          <div class="row pb-0 testimonials-text-row">
            <div class="col-sm-12 text-center">
              <h2><?php echo get_sub_field( 'title' ); ?></h2>
            </div>
          </div>
        </div>
        <?php if ( have_rows( 'testimonials' ) ) : ?>
          <div id="homepage-slider" class="container-fluid h-100">
            <div class="row h-100 p-0">
              <div class="col-sm-12 text-center h-100">
                <div id="testimonialsCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner h-100">
                  <?php $index = 0; ?>
                  <?php while ( have_rows( 'testimonials' ) ) : the_row(); ?>
                  <?php $activeClass = '';
                  if ( $index === 0 ) {
                    $activeClass = 'active';
                  }
                  ?>
                    <div class="carousel-item h-100 <?php echo $activeClass; ?>" style="height: 100vh !important;" slide-number="<?php echo $index; ?>">
                      <div class="d-block w-100 h-100" style="background-color: <?php echo get_sub_field( 'card_background_color' ); ?>;"></div>
                      <div class="carousel-caption d-flex h-100 text-center justify-content-center align-self-center">
                        <div class="caption-inner my-auto">
                          <?php $image = get_sub_field( 'image' ); ?>
                          <?php if ( $image ) : ?>
                            <div class="col-sm-12 text-center pb-4">
                              <img class="testimonial-headshot" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                            </div>
                          <?php endif; ?>
                          <div class="col-sm-12 text-center">
                            <p class="testimonial-body mx-auto"><?php echo get_sub_field( 'testimonial_body' ); ?></p>
                          </div>
                          <div class="col-sm-12 text-center pt-4">
                            <h4 class="testimonial-signature"><?php echo get_sub_field( 'author_title' ); ?></h4>
                          </div>
                          <?php $call_to_action_button = get_sub_field( 'call_to_action_button' ); ?>
                          <?php if ( $call_to_action_button ) : ?>
                            <div class="col-sm-12 text-center pt-4">
                              <a class="btn btn-primary buy-btn <?php the_sub_field( 'call_to_action_class' ); ?>" href="<?php echo esc_url( $call_to_action_button['url'] ); ?>" target="<?php echo esc_attr( $call_to_action_button['target'] ); ?>"><?php echo esc_html( $call_to_action_button['title'] ); ?></a>
                            </div>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <?php $index++; ?>
                  <?php endwhile; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'newsletter' ) ) : ?>
      <?php while ( have_rows( 'newsletter' ) ) : the_row(); ?>
      <section id="newsletter" class="row h-70 my-auto height-auto-mobile" style="background-image=<?php the_sub_field( 'background_image' ); ?>;">
        <div class="container my-auto mt-5">
            <div class="row my-auto">
              <div class="col-12 col-lg-8 offset-lg-2 text-center mb-2">
                <h2 class="mb-4"><?php the_sub_field( 'title' ); ?></h2>
                <p><?php the_sub_field( 'description' ); ?></p>
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
