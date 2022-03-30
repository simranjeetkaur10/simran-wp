<?php
/*
Plugin Name: Tic Tac Toe Game
Plugin URI: https://wordpress.org/
Description: Insert Tic Tac Toe on page or post using shortcode
Version: 1.0.0
Contributors: Simran
Author: Simran
Author URI: https://wordpress.org/
License: GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wp-sim-tic-tac-toe
Domain Path:  /languages
*/

// If this file is called directly, abort.
if ( !defined( 'WPINC' )) {
    die;
}


include( plugin_dir_path(__FILE__) . 'includes/wp-sim-tic-tac-toe-functions.php' );
