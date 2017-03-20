<?php
/**
 * @package yuuta
 */
 
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
	<?php if( is_page( 'contact' ) ) : ?>
	
		<?php get_template_part( 'template-parts/content', 'contact' ); ?>
		
	<?php else : ?>
	
		<?php while ( have_posts() ) : the_post(); ?>

				<?php	get_template_part( 'template-parts/content', 'single' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
	