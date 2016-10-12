<?php

/**
 * @since             1.0
 * @package           Remove_Yoast_Microdata
 *
 * @wordpress-plugin
 * Plugin Name:       Remove Yoast Microdata
 * Description:       The plugin removes JSON+LD Schema from the homepage.
 * Version:           1.0
 * Author:            Yuriy Vasilyev
 * Author URI:        http://yuriyvasilyev.me/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Removes "potentialAction" object
 */
add_filter( 'disable_wpseo_json_ld_search', '__return_true' );


/**
 * Removes the rest: @type, url, name
 */
add_filter( 'wpseo_json_ld_output', 'yv_rym_remove_json_ld_output' );
function yv_rym_remove_json_ld_output( $data ) {

	// Empty the data array
	$data = array();

	// Return it
	return $data;
}