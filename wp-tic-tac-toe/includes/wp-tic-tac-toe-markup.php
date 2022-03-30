<?php 

// If this file is called directly, abort.
if ( !defined( 'WPINC' )) {
   die;
}


function wp_tic_tac_toe_markup()
{
   

   $wp_tic_tac_toe_markup='<div id="wp-tic-tac-toe-game">
                              <div class="wp-tic-tac-toe-grid-cell" data-value="0"></div>
                              <div class="wp-tic-tac-toe-grid-cell" data-value="1"></div>
                              <div class="wp-tic-tac-toe-grid-cell" data-value="2"></div>
                              <div class="wp-tic-tac-toe-grid-cell" data-value="3"></div>
                              <div class="wp-tic-tac-toe-grid-cell" data-value="4"></div>
                              <div class="wp-tic-tac-toe-grid-cell" data-value="5"></div>
                              <div class="wp-tic-tac-toe-grid-cell" data-value="6"></div>
                              <div class="wp-tic-tac-toe-grid-cell" data-value="7"></div>
                              <div class="wp-tic-tac-toe-grid-cell" data-value="8"></div>
                           </div>
                           <div class="wp-tic-tac-toe-game-over">
                              <span class="wp-tic-tac-toe-game-over-text"></span>
                              <button class="wp-tic-tac-toe-restart">Restart</button>
                           </div>';
   return $wp_tic_tac_toe_markup;

}
?>
