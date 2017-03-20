<?php
/**
 * @package yuuta
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<article id="post-<?php the_ID(); ?>" <?php post_class('single-template'); ?>>

	<header class="entry-header">		
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<?php if ( ! is_page() ) {
			yuuta_posted_on();
		} ?>
		<hr>
	</header><!-- .entry-header -->

		<?php include ("contact.php") ?>

		<footer class="entry-footer">
			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php yuuta_entry_footer(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</footer><!-- .entry-footer -->

	</div>

</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
	