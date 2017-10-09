<?php
// Declare Woocommerce Support, Can be removed if woocommerce is not necessary
add_action( 'after_setup_theme', 'woocommerce_support' );
if ( !function_exists( 'woocommerce_support' ) ) {
  function woocommerce_support() {
      add_theme_support( 'woocommerce' );
  }
}

// Nav locations
register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'maxcanvas' ),
) );

// ACFPro options page setup
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
  acf_add_options_sub_page('Site settings');
}


//Custom Post Types
require_once('inc/init.php');

// SCRIPTS/STYLES
require_once('inc/wp_enqueue.php');

// WIDGETS
require_once('inc/widgets.php');

// EXTRAS
require_once('inc/extras.php');

