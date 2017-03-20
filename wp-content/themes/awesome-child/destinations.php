<?php

/*
 * Display 3 random listings at the top of the page
 */
 
$args = array(
	'post_type' =>			'destinations',
	'posts_per_page' =>		3,
	'orderby' =>			'rand',
);
 
$destinations = new WP_Query( $args );
echo '<aside id="destination" class="clear">';
while( $destinations->have_posts() ) : $destinations->the_post();
	echo '<div class="location">';
	echo '<a href="'. post_permalink( $ID ) .'"><figure class="destination-thumb">';
	the_post_thumbnail();
	echo '</figure></a>';
	echo '<a href="'. post_permalink( $ID ) .'"><h1 class="entry-title">' . get_the_title() . '</h1></a>';
	echo '</div>';
endwhile;
echo '</aside>';
 
 wp_reset_query();