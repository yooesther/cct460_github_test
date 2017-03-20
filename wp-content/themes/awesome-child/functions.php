<?php

function the_destination_home( $query ) {
	if( !is_admin() && $query->is_main_query() ) {
		if( $query->is_home() ) {
			$query->set( 'post_type', array( 'post', 'destinations') );
		}
	}
}
add_action( 'pre_get_posts', 'the_destination_home' );