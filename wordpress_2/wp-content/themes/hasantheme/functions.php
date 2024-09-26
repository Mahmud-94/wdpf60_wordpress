<?php

function register_hasan_menu() {
  register_nav_menu( 'primary', __( 'Main location', 'hasantheme' ) );
//   register_nav_menu( 'secondary', __( 'footer Menu location', 'hasantheme' ) );
}


add_action( 'after_setup_theme', 'register_hasan_menu' );
?>