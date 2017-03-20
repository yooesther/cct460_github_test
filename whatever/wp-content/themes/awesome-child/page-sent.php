<?php
/**
 * @package yuuta
 */
 
get_header(); ?>
<?php   
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$website = $_POST['website'];
	$message = $_POST['message'];
	$to = 'cheryl.almojuela@mail.utoronto.ca';
	$submit = $_POST['submit'];
	
	$body = "$website<br />$message";
	
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		// LECTURE SLIDES :)
	$headers .= "From: " . $fname . " <" . $email . ">\r\n";
		// PHP.net is a wonderful tool. It helped me understand how to make this work
		// so I wouldn't need to have the email say it came from 'Nobody'
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
		<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('single-template'); ?>>

	<?php if ( ( has_post_thumbnail() && ! post_password_required() ) ) : ?>
	<?php $yuuka_article_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'yuuta_thumb_large' ); ?>
	<div class="intro-image" style="background-image: url('<?php echo esc_url($yuuka_article_image[0]); ?>')">
	<?php else : ?>
	<div class="intro-image">
	<?php endif; ?>

		<div class="intro-image__inside">
			<header class="entry-header">
				<?php if ( is_sticky() ) { ?>
				<span class="sticky-tag">
					<?php echo esc_html_e( 'Featured', 'yuuta' ); ?>
				</span>
				<?php } ?>			
				<?php
					if( isset( $submit ) ) {
						if( $fname == '' || $email == ''|| $message == '' ) {
							// PHP.net because I always confuse || and && Logic Operator
							echo '<h1>Something is missing. Go back and try again</h1>';
							
						} else {
							echo '<h1>Your message has been sent!</h1>';;
						}
					}
				?>
				<?php if ( ! is_page() ) {
					yuuta_posted_on();
				} ?>
				<hr>
			</header><!-- .entry-header -->
		</div>	
		
		<div class="overlay light-dark is-single"></div>

	</div>

	<div class="hentry__inside">		

		<div class="entry-content">
			<?php the_content(); ?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'yuuta' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php yuuta_entry_footer(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</footer><!-- .entry-footer -->

	</div>

</article><!-- #post-## -->

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
	