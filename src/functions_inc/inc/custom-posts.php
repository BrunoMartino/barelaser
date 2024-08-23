<?php 
add_action( 'init', 'ppm_quickstart_theme_custom_post' );
function ppm_quickstart_theme_custom_post() {
	register_post_type( 'testimonial',
		array(
			'labels' => array(
				'name' => __( 'Testimonials' ),
				'singular_name' => __( 'Testimonial' ),
				'add_new_item' => __( 'Add New Testimonial' )
			),
			'public' => false,
			'show_ui' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
		)
	);
	
    
//	register_taxonomy(
//		'cpt_cat',
//		'cpt',
//		array(
//			'hierarchical'          => true,
//			'label'                 => 'CPT Category',
//			'query_var'             => true,
//			'show_admin_column'     => true,
//			'rewrite'               => array(
//				'slug'              => 'event-category',
//				'with_front'        => true
//				)
//			)
//	);
}