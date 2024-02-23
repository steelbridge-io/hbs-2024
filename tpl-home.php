<?php
/**
 * Template Name: Home Page Template
 *
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <!-- Slider -->
        <div class="home_slider_wrap" id="home_slider_wrap_id">
          <div class="home_slider">
            <?php $home_slider = get_field('home_page_slider'); ?>
            <ul class="home_slider--list" id="home_slider_id" >
              <?php
              foreach ( $home_slider as $key => $slide ) :
              ?>
              <li class="home_slider--item_wrap" data-backgroundColor="<?php echo $slide['slide_background_color']; ?>">
                <a class="home_slider--item" href="<?php echo $slide['link_destination']; ?>">
                  <?php echo acf_image( array($slide['image'], 'home_slider--image', '') ); ?>
                  <div class="home_slider--caption">
                    <div class="home_slider--caption_title text_color--<?php echo $slide['title_color']; ?>">
                      <?php echo $slide['title']; ?>
                    </div>
                    <div class="home_slider--caption_call_to_action text_color--<?php echo $slide['call_to_action_color']; ?>">
                      <?php echo $slide['call_to_action']; ?>
                    </div>
                  </div>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <!-- Under Slider -->
        <div class="home_under_slider_wrap">
          <div class="home_under_slider">
            <div class="home_under_slider--text">
              <?php echo get_field('blurb_under_slider'); ?>
            </div>
            <?php
            echo acf_link( array(
              get_field('call_to_action_text'),
              get_field('call_to_action_destination'),
              'home_under_slider--cta'
              ) );
            ?>
          </div>
        </div>
        <!-- Sales Funnels -->
        <div class="sales_funnel_boxes_wrap">
          <div class="sales_funnel_boxes">
            <?php
            $sales_funnel_boxes = get_field( 'sales_funnel_boxes' );
            foreach ( $sales_funnel_boxes as $key => $box ) :
              $boxClass = 'sales_funnel_box';
              $boxClass .= ( $key % 2 == 0 ? ' odd' : '' );
            ?>
              <div class="<?php echo $boxClass; ?>">
                <?php echo acf_image( array( $box['graphic'], 'sales_funnel_box--image', '' ) ); ?>
                <div class="sales_funnel_box--title">
                  <?php echo $box['title']; ?>
                </div>
                <div class="sales_funnel_box--content">
                  <?php echo $box['content']; ?>
                </div>
                <?php echo acf_link( array( $box['action_text'], $box['action_destination'], 'sales_funnel_box--cta' ) ); ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <!-- Meet Scott -->
        <div class="meet_wrap">
          <div class="meet">
            <div class="meet--image_wrap">
              <?php echo acf_image( array( get_field('meet_scott_image'), 'meet--image', '' ) ); ?>
            </div>
            <div class="meet--content">
              <?php echo get_field('meet_scott_content'); ?>
              <?php echo acf_link( array( get_field('meet_scott_cta_text'), get_field('meet_scott_cta_destination'), 'meet--cta' ) ); ?>
            </div>
          </div>
        </div>
        <!-- Happy Clients -->
        <div class="happy_clients_wrap">
          <div class="happy_clients">
            <div class="happy_clients--text"><?php echo get_field( 'happy_clients_text' ); ?>
            <?php echo acf_link( array( get_field('happy_clients_cta_text'), get_field('happy_clients_cta_destination'), 'happy_clients--cta' ) ); ?>
          </div>

            <div class="happy_clients--client_list">
              <?php
              $happy_client_logos = get_field( 'happy_client_logos' );
              foreach ( $happy_client_logos as $key => $client_logo ) :
                echo acf_image( array( $client_logo['logo'], 'happy_clients--client_logo', '' ) );
              endforeach;
              ?>
            </div>
            <div class="happy_clients--as_seen_in">
              <h3 class="happy_clients--as_seen_in--title">As Seen In:</h3>
              <?php
              $as_seen_in_logos = get_field( 'as_seen_in_logos' );
              foreach ( $as_seen_in_logos as $key => $logo_info ) :
                $logo_image = acf_image( array($logo_info['logo'], '', '') );
                echo acf_link( array($logo_image, $logo_info['link_destination'], 'happy_clients--as_seen_in--logo') );
              endforeach; ?>
            </div>
          </div>
        </div>

        <?php
        $feedback_content = get_field( 'feedback_form' );
        if ( $feedback_content != '' ) :
        ?>
          <div class="feedback_wrap">
            <div class="feedback">
              <?php echo $feedback_content; ?>
            </div>
          </div>
        <?php
        endif;
        ?>

      <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
