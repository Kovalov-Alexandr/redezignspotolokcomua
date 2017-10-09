<?php
/**
 * SCRIPTS/STYLES
 */
if ( ! function_exists( 'maxcanvas_child_scripts_styles' ) ):

  function maxcanvas_child_scripts_styles() {
    // SLICK SLIDER
    wp_enqueue_script( 'slick-script', get_stylesheet_directory_uri() . '/js/slick/slick.min.js', array(), false, true );
    wp_enqueue_style( 'slick-style', get_stylesheet_directory_uri() . '/js/slick/slick.css' );
    wp_enqueue_style( 'slick-theme-style', get_stylesheet_directory_uri() . '/js/slick/slick-theme.css' );

    //Sidr Menu
    wp_enqueue_script('sidr-script', get_stylesheet_directory_uri()  . '/js/sidr/jquery.sidr.min.js', array(), false, true);
    wp_enqueue_style('sidr-style', get_stylesheet_directory_uri()  . '/js/sidr/stylesheets/jquery.sidr.light.css');

    // Common extension bootstrap styles
    wp_enqueue_style( 'bootstrap3-extended', get_stylesheet_directory_uri() . '/styles/bootstrap3-ext.css');

    // Core styles
    wp_enqueue_style( 'global-style', get_stylesheet_directory_uri() . '/styles/global.css' );
    wp_enqueue_style( 'rnd-colors', get_stylesheet_directory_uri() . '/styles/rnd-color.css' );
    wp_enqueue_style( 'responsive-style', get_stylesheet_directory_uri() . '/styles/responsive.css' );

    wp_enqueue_style( 'custom-navigation-style', get_stylesheet_directory_uri() . '/styles/menu/navigation.css' );
    wp_enqueue_script( 'custom-navigation-js', get_stylesheet_directory_uri() . '/js/navigation.js', array(), false, true  );

    wp_enqueue_script( 'matchbox', get_stylesheet_directory_uri() . '/js/matchbox.js', array(), false, true  );
    wp_enqueue_script( 'modernizr-custom', get_stylesheet_directory_uri() . '/js/modernizr.custom.min.js', array(), false, true  );

    // Core styles
    if (is_front_page()):
        wp_enqueue_style('home', get_stylesheet_directory_uri() . '/styles/home.css');
    elseif (is_home() || is_single() || is_archive()):
        wp_enqueue_style('blog', get_stylesheet_directory_uri() . '/styles/blog.css');
    endif;

  }

endif;
add_action( 'wp_enqueue_scripts', 'maxcanvas_child_scripts_styles' , 20 );
