<?php

// Custom post type offert

if (!function_exists('create_offert_posttype')) {
	function create_offert_posttype() {
		$labels = array(
			'name' => __( 'Oferty' ),
			'singular_name' => __( 'Oferta' )
		);
		$args = array(
			'labels' 		=> $labels,
			'public' 		=> true,
			'has_archive' 	=> false,
			'hierarchical'	=> true,
			'supports'		=> array('title','editor','page-attributes'),
			'rewrite' 		=> array('slug' => 'oferta'),
		);
		register_post_type( 'offert', $args);
	}
	add_action( 'init', 'create_offert_posttype' );
}
?>