<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php get_template_part('page_header'); ?>

					<div class="entry_content">

						<?php
						$client_logos = get_field('clients');
						if (is_array($client_logos)) : ?>
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
											<div class="col-md-2 <?php echo $mobile_col_class; ?> my-auto mobile-space-bottom <?php echo $addtional_class; ?>" block-number="<?php echo $index; ?>">
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
						<?php endif; ?>

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
										$categoryCount = 0;
										if ( is_countable($quote_array['categories']) && count($quote_array['categories']) > 0) {
											$categoryCount = sizeof($quote_array['categories']);
										}
										if(is_array($quote_array['categories'])) {

											foreach ( $quote_array['categories'] as $key => $quote ) :
												$cat_slug = hbs_slugify($quote['category']);
												$quote_categories[] = $quote['category'];
												$categoryClasses .= " mix_category--" . $cat_slug;
												$categoryList .= " " . $quote['category'];
												$categoryList .= ( $key+1 >= $categoryCount ? "" : "," );
											endforeach;

										}
										/*foreach ( $quote_array['categories']
                                        as $key => $quote ) :
										  $cat_slug = hbs_slugify($quote['category']);
										  $quote_categories[] = $quote['category'];
										  $categoryClasses .= " mix_category--" . $cat_slug;
										  $categoryList .= " " . $quote['category'];
										  $categoryList .= ( $key+1 >= $categoryCount ? "" : "," );
										endforeach;*/
										?>
										<div class="<?php echo $categoryClasses; ?>">
											<?php echo $quote_array['quote']; ?>
											<!-- <div class="client_quote--categories">Categories: <?php echo $categoryList; ?></div> -->
										</div>
									<?php endforeach; ?>
								</div>
                <?php if (is_page(36)) { ?>
                <div class="client_quotes_categories_wrap">
                  <a href="http://www.marginalia.online/winners-announced-for-the-lotus-awards-2017/"><img src="/wp-content/uploads/2017/06/lotus-aware-winner-image-1.jpg" alt="Lotus Aware Winner" style="display: block; max-width: 80%;"></a>
                </div>
                <?php } ?>
								<div class="client_quotes_categories_wrap">
									<h1 class="client_quotes_categories_wrap--title">Categories</h1>
									<ul class="client_quotes_categories">
										<li>
										  <a href="#" class="quote_cat mix_cat" data-filter="all">All</a>
										</li>
										<?php
										$quote_categories = array_unique($quote_categories);
										asort($quote_categories);
										foreach ($quote_categories as $key => $cat) :
										  $cat_slug = hbs_slugify($cat);
										  ?>
										  <li>
										    <a href="#" class="quote_cat mix_cat" data-filter=".mix_category--<?php echo $cat_slug; ?>">
										      <?php echo $cat; ?>
										    </a>
										  </li>
										<?php endforeach; ?>
									</ul><!-- .client_quotes_categories -->
								</div>
							</div><!-- .client_quotes_wrap -->
						<?php endif; ?>

					</div><!-- .entry_content -->



				</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
