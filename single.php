<?php
/**
 * The Template for displaying all single posts.
 *
 * @package happybrainsciencecom
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="container">
				<article id="post-<?php the_ID(); ?>" <?php post_class('single_content'); ?>>
				<div class="single_header_wrap">
				<header class="single_header">
						<?php the_post_thumbnail( array(764, 400) ); ?>
					<div class="single_header--content">
						<?php the_title( '<h1 class="single_header--title">', '</h1>' ); ?>
						<div class="single_header--meta">
							<?php happybrainsciencecom_posted_on(); ?> by <?php the_author_meta('display_name'); ?>
						</div>
					</div>
				</header><!-- .entry-header -->
			</div>
					<?php the_content(); ?>
					<footer class="single_content--footer">
						<div class="addthis_sharing_toolbox"></div>
						<?php happybrainsciencecom_post_nav(); ?>
						
						
						<div class="tve_orange" tvo_colors_applied="true">
						<div class="tvo-testimonial-display-item tvo-apply-background" data-tve-custom-colour="47154797">
				<div class="tvo-item-grid">
					<div class="tvo-image-wrapper">
						<div class="tvo-testimonial-image-cover tvo-testimonial-real-border">
							<?php echo get_avatar( get_the_author_meta('user_email'), $size = '190'); ?>
						</div>
					</div>
					<div class="tvo-testimonial-content">
						<div class="tvo-testimonial-info">
							<span class="tvo-testimonial-name">
								<?php the_author_meta('display_name'); ?>
							</span>
						</div>
						<div class="tvo-relative">
							<p style="color:#fff;padding-left:180px;"><?php the_author_meta('description'); ?></p>
						</div>
					</div>
				</div>
			</div>
			</div>
			
			
			<br>
						<!-- <div class="fb-comments" data-href="http://www.happybrainscience.com<?php /*the_permalink();*/ ?>" data-width="100%" data-numposts="1"></div> -->
						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() ) :
								comments_template();
							endif;
						?>
					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->
				<?php get_sidebar(); ?>
			</div>

		<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>