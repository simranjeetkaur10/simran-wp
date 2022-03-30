<?php 

// If this file is called directly, abort.
if ( !defined( 'WPINC' )) {
    die;
}

include( plugin_dir_path( __FILE__ ) . 'wp-tic-tac-toe-markup.php' );

function wp_tic_tac_toe_style()
{
    wp_enqueue_style( 'main-snake-style' , plugin_dir_url( __DIR__  ) . 'front/css/style.css' );
}

function wp_tic_tac_toe_script()
{
    wp_enqueue_script( 'main-snake-script' , plugin_dir_url( __DIR__  ) . 'front/js/wp-tic-tac-toe.js' );
}

function wp_tic_tac_toe_add_custom_shortcode() {
    if( !shortcode_exists( 'wp-tic-tac-toe' ) )
    {
        add_shortcode( 'wp-tic-tac-toe' , 'wp_tic_tac_toe_content_shortcode' );

    }
}

function wp_tic_tac_toe_content_shortcode(){

    static $wp_tic_tac_toe_run_counter = 0;
    
    if( $wp_tic_tac_toe_run_counter > 0 ){
        return;
    }

    $wp_tic_tac_toe_markup = wp_tic_tac_toe_markup();
    $wp_tic_tac_toe_run_counter++;
    return wp_kses_post( $wp_tic_tac_toe_markup );

}



function remove_wp_tic_tac_toe(){

    remove_action( 'init', 'wp_tic_tac_toe_add_custom_shortcode' );
    remove_action( 'wp_enqueue_scripts' , 'wp_tic_tac_toe_style' );
    remove_action( 'wp_enqueue_scripts' , 'wp_tic_tac_toe_script' );
    
}

add_action( 'init', 'wp_tic_tac_toe_add_custom_shortcode' );
add_action( 'wp_enqueue_scripts' , 'wp_tic_tac_toe_style' );
add_action( 'wp_enqueue_scripts' , 'wp_tic_tac_toe_script' );


 
register_deactivation_hook( __FILE__, 'remove_wp_tic_tac_toe' );





