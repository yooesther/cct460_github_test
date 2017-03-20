<?php 
/**
 * We're going to use $wpda_form_table as global array for our database interactions
 * it is declared as global because local variable will not be 
 * accessible as activation hook to run properly
 *
 * @package WpDevArt Forms
 * @since	1.0
 */
 if ( ! defined( 'ABSPATH' ) ) exit;
// WordPress database's global objects
global $wpdb;

//	Plugin's database table's info
global $wpda_form_table; 

//	Represents forms individually
$wpda_form_table['wpdevart_forms'] = $wpdb->prefix.'wpda_form_forms';

//	Represents form fields
$wpda_form_table['fields'] = $wpdb->prefix.'wpda_form_fields';

//	Represents form fields's subfields
$wpda_form_table['subfields'] = $wpdb->prefix.'wpda_form_subfields';

//	Submission time of the form
$wpda_form_table['submit_time'] = $wpdb->prefix.'wpda_form_submit_time';

//	Contains form submitted values
$wpda_form_table['submissions'] = $wpdb->prefix.'wpda_form_submissions';

?>