<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Simone
 */

 if( is_singular( 'destinations' ) && is_active_sidebar( 'sidebar-1' ) ) { ?>

	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<?php simone_post_nav(); ?>
	</div>
 

<?php } else {
	if( is_active_sidebar( 'sidebar-1' ) ) { ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	<?php } 
} ?>