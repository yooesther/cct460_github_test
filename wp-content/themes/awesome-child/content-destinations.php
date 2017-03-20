<?php
/**
 * @package Simone
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php
    if (has_post_thumbnail()) {
        echo '<div class="single-post-thumbnail clear">';
        echo '<div class="image-shifter">';
        the_post_thumbnail();
        echo '</div>';
        echo '</div>';
    }
    ?>
	<header class="entry-header clear">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
	</header><!-- .entry-header -->
    <div id="destination">
    	<div class="taxonomies">
			<?php echo get_the_term_list( $post->ID, 'ratings', '<span class="post-meta-key">Rating:</span> ', ', ', '<br />' ); ?>
            <?php echo get_the_term_list( $post->ID, 'locations', '<span class="post-meta-key">Location:</span> ', ', ', '<br />' ); ?>
			
            <?php the_meta(); ?>
		</div>
        <div class="entry-content">
            <?php the_content(); ?>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'simone' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
	</div><!-- #destination -->
	<footer class="entry-footer">
		<?php
			echo get_the_tag_list( '<ul><li><i class="fa fa-tag"></i>', '</li><li><i class="fa fa-tag"></i>', '</li></ul>' );
		?>
		<div class="entry-meta">
                    <?php
                    if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) {
                        echo '<span class="comments-link">';
                        comments_popup_link( __( '', 'simone' ), __( '', 'simone' ), __( '', 'simone' ) );
                        echo '</span>';
                    }
                    ?>
                    <?php edit_post_link( __( 'Edit', 'simone' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-meta -->
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
<div class="clear"></div>

