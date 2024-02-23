<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package happybrainsciencecom
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
		<div class="blog_wrap">
			<div class="blog_loop">
			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'happybrainsciencecom' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content' ); ?>

			<?php endwhile; ?>

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
	</section><!-- #primary -->

<?php get_footer(); ?>
