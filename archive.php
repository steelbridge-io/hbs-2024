<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'happybrainsciencecom' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'happybrainsciencecom' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'happybrainsciencecom' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'happybrainsciencecom' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'happybrainsciencecom' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'happybrainsciencecom' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'happybrainsciencecom' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'happybrainsciencecom');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'happybrainsciencecom');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'happybrainsciencecom' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'happybrainsciencecom' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'happybrainsciencecom' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'happybrainsciencecom' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'happybrainsciencecom' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'happybrainsciencecom' );

						else :
							_e( 'Archives', 'happybrainsciencecom' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
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
