<?php get_header();
/**
 * Template Name: About Us
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
					<?php get_template_part('flexible_content'); ?>

					<?php
					$client_quotes = get_field('client_quotes');
					if (is_array($client_quotes)) :
						$quote_categories = array();
						?>
						<div class="client_quotes_wrap">
							<div class="client_quotes" id="client_quotes_id">
								<?php
								foreach ($client_quotes as $key => $quote_array) :
									$categoryList = "";
									$categoryClasses = "client_quote mix_item";
									$categoryCount = count($quote_array['categories']);
									foreach ( $quote_array['categories'] as $key => $quote ) :
									  $cat_slug = hbs_slugify($quote['category']);
									  $quote_categories[] = $quote['category'];
									  $categoryClasses .= " mix_category--" . $cat_slug;
									  $categoryList .= " " . $quote['category'];
									  $categoryList .= ( $key+1 >= $categoryCount ? "" : "," );
									endforeach;
									?>
									<div class="<?php echo $categoryClasses; ?>">
										<?php echo $quote_array['quote']; ?>
										<!-- <div class="client_quote--categories">Categories: <?php echo $categoryList; ?></div> -->
									</div>
								<?php endforeach; ?>
							</div>
							<div class="client_quotes_categories_wrap">
								<h1 class="client_quotes_categories_wrap--title">Categories</h1>
								<ul class="client_quotes_categories">
									<li>
									  <a hred="#" class="quote_cat mix_cat" data-filter="all">All</a>
									</li>
									<?php
									$quote_categories = array_unique($quote_categories);
									asort($quote_categories);
									foreach ($quote_categories as $key => $cat) :
									  $cat_slug = hbs_slugify($cat);
									  ?>
									  <li>
									    <a hred="#" class="quote_cat mix_cat" data-filter=".mix_category--<?php echo $cat_slug; ?>">
									      <?php echo $cat; ?>
									    </a>
									  </li>
									<?php endforeach; ?>
								</ul><!-- .client_quotes_categories -->
							</div>
						</div><!-- .client_quotes_wrap -->
					<?php endif; ?>
          <?php
          $team_members = get_field('team_members'); ?>
          <div class="container">
            <?php
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
          </div>
          </div><!-- .entry_content -->



        </article><!-- #post-## -->

      <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
