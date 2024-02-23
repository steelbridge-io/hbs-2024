<?php
/**
 * Template Name: Recommended Reading Template
 *
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="rr_wrap">
            <header class="rr_header">
              <div class="rr_header--image_wrap">
                <?php echo acf_image( array(get_field('featured_reading_image'), 'rr_header--image', 'medium') ); ?>
              </div>
              <div class="rr_header--content">
                <div class="rr_header--title">
                  <?php echo get_field('featured_reading_title'); ?>
                </div>
                <div class="rr_header--author">
                  By: <?php echo get_field('featured_reading_author') ?>
                </div>
                <div class="rr_header--synopsis">
                  <?php echo get_field('featured_reading_synopsis') ?>
                </div>
              </div>
            </header><!-- .rr_header -->

            <div class="rr_content">
              <div class="rr_list" id="rr_container">
                <?php
                $readings = get_field('recomended_readings');
                $reading_categories = array();
                foreach ( $readings as $key => $reading ) :
                  $categoryClasses = "rr_item mix_item";
                  $categoryCount = 0;
                  if ( is_countable($reading['categories']) && count($reading['categories']) > 0) {
                    $categoryCount = count($reading['categories']);
                  }
                  $categoryList = ( $categoryCount > 1 ? "Catgories: " : "Category: " );
                  if ( is_array($reading['categories']) ) {
                    foreach ( $reading['categories'] as $key => $category ) :
                      $cat_slug = hbs_slugify($category['category']);
                      $reading_categories[] = $category['category'];
                      $categoryClasses .= " mix_category--" . $cat_slug;
                      $categoryList .= " " . $category['category'];
                      $categoryList .= ( $key+1 >= $categoryCount ? "" : "," );
                    endforeach;
                  }
                ?>
                <div class="<?php echo $categoryClasses; ?>">
                  <?php
                  if ( isset($reading['image']) ) :
                    $itemImage = acf_image( array($reading['image'], 'rr_item--image', 'tinyBook') );
                    if ( strlen($reading['image_link']) > 0 ) :
                      echo acf_link( array($itemImage, $reading['image_link'], 'rr_item--image_wrap') );
                    else :
                      echo $itemImage;
                    endif;
                  endif;
                  ?>
                  <div class="rr_item--title">
                    <?php echo $reading['title']; ?>
                  </div>
                  <div class="rr_item--synopsis">
                    <?php echo $reading['summary']; ?>
                  </div>
                  <div class="rr_item--category">
                    <?php echo $categoryList; ?>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
              <div class="rr_cats">
                <h1 class="rr_cats--title">Categories</h1>
                <ul class="rr_cat--list">
                  <li>
                    <a hred="#" class="rr_cat mix_cat" data-filter="all">All</a>
                  </li>
                <?php
                $reading_categories = array_unique($reading_categories);
                asort($reading_categories);
                foreach ($reading_categories as $key => $cat) :
                  $cat_slug = hbs_slugify($cat);
                  ?>
                  <li>
                    <a hred="#" class="rr_cat mix_cat" data-filter=".mix_category--<?php echo $cat_slug; ?>">
                      <?php echo $cat; ?>
                    </a>
                  </li>
                <?php endforeach; ?>
                </ul>
              </div>
            </div><!-- .rr_content -->
          </div><!-- .rr_wrap -->
        </article><!-- #post-## -->

      <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
