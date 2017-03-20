<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package simone
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            <?php get_sidebar( 'footer' ); ?>
		<div class="site-info">
			<?php do_action( 'simone_credits' ); ?>
			<?php
			printf(
				/* translators: %s = text link: Travel Agency, URL: http://phoenix.sheridanc.on.ca/~ccit4071 */
				__( '&copy; %s', 'simone' ),
				'<a href="http://phoenix.sheridanc.on.ca/~ccit4071" rel="generator">' . esc_attr__( 'Travel Agency', 'simone' ) . '</a>'
				); ?>
			
			<?php
			printf(
				/* translators: %1$s = text link: Simone, URL: http://wordpress.org/themes/simone/, %2$s = text link: mor10.com, URL: http://mor10.com/ */
				__( '2017. All rights reserved.', 'simone' ),
                                '<a href="http://wordpress.org/themes/simone/" rel="nofollow">' . esc_attr( 'Simone', 'simone' ) . '</a>',
				'<a href="http://mor10.com/" rel="designer nofollow">' . esc_attr__( 'mor10.com', 'simone' ) . '</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>