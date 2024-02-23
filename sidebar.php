<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package happybrainsciencecom
 */
?>
	<div id="secondary" class="blog_sidebar widget-area" role="complementary">
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'happybrainsciencecom' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'happybrainsciencecom' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>


		<?php endif; // end sidebar widget area ?>
		<aside id="meta" class="widget">
			<p>
				<a href="https://happybrainscience.activehosted.com/archive/1" target="_blank">Newsletter Archive</a>
			</p>
		</aside>
	</div><!-- #secondary -->
