<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package happybrainsciencecom
 */

if ( ! function_exists( 'happybrainsciencecom_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function happybrainsciencecom_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>

	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'happybrainsciencecom' ); ?></h1>
		<div class="nav-links">

			<?php global $wp_query;
			$big = 999999999;
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages
			) ); ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'happybrainsciencecom_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function happybrainsciencecom_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'happybrainsciencecom' ); ?></h1>
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'happybrainsciencecom' ) );
				next_post_link(     '<div class="nav-next">%link</div>',     _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link',     'happybrainsciencecom' ) );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'happybrainsciencecom_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function happybrainsciencecom_posted_on() {
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	// $posted_on = sprintf(
	// 	_x( '%s', 'post date', 'happybrainsciencecom' ),
	// 	'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	// );

	// $byline = sprintf(
	// 	_x( 'by %s', 'post author', 'happybrainsciencecom' ),
	// 	'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	// );

	echo '<span class="posted-on">' . $time_string . '</span>';

}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function happybrainsciencecom_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'happybrainsciencecom_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'happybrainsciencecom_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so happybrainsciencecom_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so happybrainsciencecom_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in happybrainsciencecom_categorized_blog.
 */
function happybrainsciencecom_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'happybrainsciencecom_categories' );
}
add_action( 'edit_category', 'happybrainsciencecom_category_transient_flusher' );
add_action( 'save_post',     'happybrainsciencecom_category_transient_flusher' );