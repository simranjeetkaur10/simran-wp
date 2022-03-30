<?php 

// If this file is called directly, abort.
if ( !defined( 'WPINC' )) {
   die;
}


function wp_sim_tic_tac_toe_markup()
{
   

   $wp_sim_tic_tac_toe_markup='<div id="wp-sim-tic-tac-toe-game">
                              <div class="wp-sim-tic-tac-toe-grid-cell" data-value="0"></div>
                              <div class="wp-sim-tic-tac-toe-grid-cell" data-value="1"></div>
                              <div class="wp-sim-tic-tac-toe-grid-cell" data-value="2"></div>
                              <div class="wp-sim-tic-tac-toe-grid-cell" data-value="3"></div>
                              <div class="wp-sim-tic-tac-toe-grid-cell" data-value="4"></div>
                              <div class="wp-sim-tic-tac-toe-grid-cell" data-value="5"></div>
                              <div class="wp-sim-tic-tac-toe-grid-cell" data-value="6"></div>
                              <div class="wp-sim-tic-tac-toe-grid-cell" data-value="7"></div>
                              <div class="wp-sim-tic-tac-toe-grid-cell" data-value="8"></div>
                           </div>
                           <div class="wp-sim-tic-tac-toe-game-over">
                              <span class="wp-sim-tic-tac-toe-game-over-text"></span>
                              <button class="wp-sim-tic-tac-toe-restart">Restart</button>
                           </div>';
   return $wp_sim_tic_tac_toe_markup;

}
?>
