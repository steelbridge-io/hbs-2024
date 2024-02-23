<?php get_header();
/**
 * Template Name: Meet The Team Template
 *
 */

?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php
          $header_toggle = get_field( 'header_type' );
          if ( $header_toggle !== 'none' ) :
          ?>
          <div class="entry_header_wrap entry_header_wrap--<?php echo $header_toggle; ?>">
            <header class="entry_header entry_header--<?php echo $header_toggle; ?>">
              <?php
              $image_video_toggle = get_field('header_image_or_video'); ?>
              <div class="header--video_image_wrap">
              <?php
              if ( $image_video_toggle == 'video' ) : ?>
                <div class="header--video_image">
                  <?php echo get_field('header_video_html'); ?>
                </div>
              <?php elseif ( $image_video_toggle == 'image' ) :
                echo acf_image( array( get_field('header_image'), 'header--video_image', 'medium' ) );
              endif;
              ?>
              </div>
              <div class="header--content_wrap">
                <div class="header--title">
                  <?php echo get_field('header_title'); ?>
                </div>
                <div class="header--content">
                  <?php echo get_field('header_content'); ?>
                </div>
              </div>
            </header><!-- .entry_header -->
          </div><!-- .entry_header_wrap -->
          <?php endif; ?>
          <div class="entry_content">
          <?php
          $team_members = get_field('team_members');
          foreach ($team_members as $key => $member) : ?>
            <div class="team_member">
              <div class="team_member--header_wrap">
                <div class="team_member--header">
                  <div class="team_member--image_wrap">
                    <?php echo acf_image( array($member['headshot'], 'team_member--image', '') ); ?>
                  </div>
                  <div class="team_member--name_title_wrap">
                    <div class="team_member--name"><?php echo $member['name']; ?>,</div>
                    <div class="team_member--title"><?php echo $member['title']; ?></div>
                  </div>
                </div>
              </div>
              <div class="team_member--desc_wrap">
                <div class="team_member--desc"><?php echo $member['description']; ?></div>
              </div>
            </div>
          <?php endforeach; ?>
            <?php
            $flexible_content = get_field('flexible_content');
            if ( is_array($flexible_content) ) :
              foreach ( $flexible_content as $key => $block ) : ?>
                <div class="fc_block fc_block--<?php echo $block['acf_fc_layout']; ?>">
                <?php
                switch ($block['acf_fc_layout']) {
                  case 'large_font_block':
                    echo $block['content'];
                    break;
                  case 'three_columns_block':
                    if ( $block['header_for_all_three'] !== '' ) : ?>
                      <div class="three_cols--heading">
                        <?php echo $block['header_for_all_three']; ?>
                      </div>
                    <?php endif; ?>
                    <div class="three_cols">
                    <?php foreach ( $block['columns'] as $key => $column ) : ?>
                      <div class="three_cols--col">
                        <h4 class="three_cols--col--heading">
                          <?php echo $column['heading']; ?>
                        </h4>
                        <div class="three_cols--col--content">
                          <?php echo $column['content']; ?>
                        </div>
                        <?php echo acf_link( array($column['cta_text'], $column['cta_destination'], 'three_cols--col--cta') ); ?>
                      </div>
                    <?php endforeach; ?>
                    </div><!-- .three_cols -->
                    <?php if ( $block['cta_below_all_three'] !== '' ) : ?>
                      <div class="three_cols--cta">
                        <?php echo $block['cta_below_all_three']; ?>
                      </div>
                    <?php endif; ?>
                    <?php
                    break;
                  case 'featured_content':
                    if ( $block['image'] !== '' ) :
                      echo acf_image( array( $block['image'], 'featured_content--image', '' ) );
                    endif; ?>
                    <div class="featured_content--content">
                      <?php echo $block['text_content']; ?>
                    </div>
                    <?php if ( $block['attribution'] !== '' ) : ?>
                      <div class="featured_content--attribution">
                        - <?php echo $block['attribution']; ?>
                      </div>
                    <?php endif;
                    echo acf_link( array( $block['cta_text'], $block['cta_destination'], 'featured_content--cta' ) );
                    break;
                  case 'text_block':
                    echo $block['content'];
                    break;
                  default:
                    # code...
                    break;
                }
                ?>
                </div><!-- .fc_block -->
              <?php
              endforeach;
            endif;
            ?>
          </div><!-- .entry_content -->



        </article><!-- #post-## -->

      <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
