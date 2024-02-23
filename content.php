<?php
/**
 * @package happybrainsciencecom
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'loop_post' ); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php happybrainsciencecom_posted_on(); ?> by <?php echo get_the_author_meta('display_name'); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php the_post_thumbnail( 'medium', array( 'class' => 'entry-header--featured_image' ) ); ?>
		<?php
		// echo '<pre>';
		// print_r(get_intermediate_image_sizes());
		// echo '</pre>';
		?>
	</header><!-- .entry-header -->

  <div class="entry-content-wrapper">
  	<div class="entry-content">
  		<?php the_excerpt(); ?>
		<?php if ( 'page' == get_post_type() ) {
			if (isset(get_field('flexible_content')[0]['content']) ) {
				$content = get_field('flexible_content')[0]['content'];
				echo substr( strip_tags( $content ) , 0, 250 ) . '...';
			}
		} ?>
  	</div><!-- .entry-summary -->

  	<footer class="entry-footer">
  		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
  			<?php
  				/* translators: used between list items, there is a space after the comma */
  				$categories_list = get_the_category_list( __( ', ', 'happybrainsciencecom' ) );
  				if ( $categories_list && happybrainsciencecom_categorized_blog() ) :
  			?>
  			<span class="cat-links">
  				<?php printf( __( 'Categories: %1$s', 'happybrainsciencecom' ), $categories_list ); ?>
  			</span>
  			<?php endif; // End if categories ?>

  		<?php endif; // End if 'post' == get_post_type() ?>

  	</footer><!-- .entry-footer -->
  </div>
</article><!-- #post-## -->
