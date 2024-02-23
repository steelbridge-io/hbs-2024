<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package happybrainsciencecom
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php if ( have_posts() ) : ?>


<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
if ($paged == 1) :
	$recent_post_args = array(
		'numberposts' => 1
		);
	$recent_posts = wp_get_recent_posts($recent_post_args);
	$recent_post = $recent_posts[0];
	global $post;
	setup_postdata( $post );
?>
	<div class="featured_post_wrap">
		<div class="featured_post">
			<div class="featured_post--featured_image_wrap">
				<?php the_post_thumbnail( 'medium', array( 'class' => 'featured_post--featured_image' ) ); ?>
			</div>
			<div class="featured_post--content">
				<a class="featured_post--title" href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
				<div class="featured_post--meta">
					<?php happybrainsciencecom_posted_on(); ?> by <?php the_author_meta('display_name'); ?>
				</div>
				<?php the_excerpt(); ?>
				<?php
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( __( ', ', 'happybrainsciencecom' ) );
					if ( $categories_list && happybrainsciencecom_categorized_blog() ) :
				?>
				<span class="cat-links">
					<?php printf( __( 'Categories: %1$s', 'happybrainsciencecom' ), $categories_list ); ?>
				</span>
				<?php endif; // End if categories ?>
			</div>
		</div>
	</div>
<?php
	wp_reset_postdata();
endif;
?>
<div class="blog_wrap">
	<div class="blog_loop">
			<?php
			$loop_post_count = 0;
			while ( have_posts() ) : the_post();
				$loop_post_count++;

				if ( $loop_post_count > 1 ) :
					get_template_part( 'content' );
				elseif ( $paged !== 1 ) :
					get_template_part( 'content' );
				endif;

			endwhile; ?>

			<?php happybrainsciencecom_paging_nav(); ?>

		<?php else : ?>
<div class="blog_wrap">
	<div class="blog_loop">

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</div><!-- .blog_loop -->
	<?php get_sidebar(); ?>
</div><!-- .blog_wrap -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
