<?php 
if ( !defined( 'WP_UNINSTALL_PLUGIN' )) {
    die;
}
 

remove_action( 'init', 'wp_tic_tac_toe_add_custom_shortcode' );
remove_action( 'wp_enqueue_scripts' , 'wp_tic_tac_toe_style' );
remove_action( 'wp_enqueue_scripts' , 'wp_tic_tac_toe_script' );
?>