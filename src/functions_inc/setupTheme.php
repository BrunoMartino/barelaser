<?php
function bare_enqueue_styles() {
    
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    
    wp_enqueue_style( 'bare-tailwind', get_stylesheet_directory_uri() . '/dist/css/tailwind.css', array('parent-style'), '1.0.0' );

    wp_enqueue_style( 'bare-style', get_stylesheet_uri(), array('parent-style'), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'bare_enqueue_styles' );

function bare_enqueue_elementor_styles() {
  if ( did_action( 'elementor/loaded' ) ) {
      wp_enqueue_style( 'elementor-frontend' );
      wp_enqueue_style( 'elementor-post-'.get_the_ID() );
      wp_enqueue_style( 'elementor-global' );
  }
}
add_action( 'wp_enqueue_scripts', 'bare_enqueue_elementor_styles', 20 );


