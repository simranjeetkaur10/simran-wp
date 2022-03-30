<?php 

// If this file is called directly, abort.
if ( !defined( 'WPINC' )) {
    die;
}

include( plugin_dir_path( __FILE__ ) . 'wp-sim-tic-tac-toe-markup.php' );

function wp_sim_tic_tac_toe_style()
{
    wp_enqueue_style( 'main-tic-tac-toe-style' , plugin_dir_url( __DIR__  ) . 'front/css/style.css' );
}

function wp_sim_tic_tac_toe_script()
{
    wp_enqueue_script( 'main-tic-tac-toe-script' , plugin_dir_url( __DIR__  ) . 'front/js/wp-sim-tic-tac-toe.js' );
}

function wp_sim_tic_tac_toe_add_custom_shortcode() {
    if( !shortcode_exists( 'wp-sim-tic-tac-toe' ) )
    {
        add_shortcode( 'wp-sim-tic-tac-toe' , 'wp_sim_tic_tac_toe_content_shortcode' );

    }
}

function wp_sim_tic_tac_toe_content_shortcode(){

    static $wp_sim_tic_tac_toe_run_counter = 0;
    
    if( $wp_sim_tic_tac_toe_run_counter > 0 ){
        return;
    }

    $wp_sim_tic_tac_toe_markup = wp_sim_tic_tac_toe_markup();
    $wp_sim_tic_tac_toe_run_counter++;
    return wp_kses_post( $wp_sim_tic_tac_toe_markup );

}



function remove_wp_sim_tic_tac_toe(){

    remove_action( 'init', 'wp_sim_tic_tac_toe_add_custom_shortcode' );
    remove_action( 'wp_enqueue_scripts' , 'wp_sim_tic_tac_toe_style' );
    remove_action( 'wp_enqueue_scripts' , 'wp_sim_tic_tac_toe_script' );
    
}

add_action( 'init', 'wp_sim_tic_tac_toe_add_custom_shortcode' );
add_action( 'wp_enqueue_scripts' , 'wp_sim_tic_tac_toe_style' );
add_action( 'wp_enqueue_scripts' , 'wp_sim_tic_tac_toe_script' );


 
register_deactivation_hook( __FILE__, 'remove_wp_sim_tic_tac_toe' );





