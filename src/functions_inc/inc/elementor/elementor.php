<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function registering_ppm_addons_reloaded( $widgets_manager ) {

    require_once( __DIR__ . '/addons.php' );

    $widgets_manager->register( new \PPM_Testimonials_Widget() );

}
add_action( 'elementor/widgets/register', 'registering_ppm_addons_reloaded' );