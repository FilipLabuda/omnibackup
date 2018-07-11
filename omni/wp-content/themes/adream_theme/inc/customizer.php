<?php
/**
 * Adream Theme Customizer
 *
 * @package Adream
 */

function adream_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
}
add_action( 'customize_register', 'adream_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function adream_customize_preview_js() {
	wp_enqueue_script( 'adream_customizer', get_template_directory_uri() . '/assets/scripts/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'adream_customize_preview_js' );



function prefix_customizer_register( $wp_customize ) {
	require ('customizer/customizer-args.php');
	foreach ($panels as $panel_name => $panel) {
		$wp_customize->add_panel( $panel_name, array(
			'priority' => $panel['priority'],
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => $panel['title'],
			'description' => $panel['description'],
		) );
	}

	foreach ($sections as $section_name => $section) {
		$wp_customize->add_section($section_name, array(
			'priority' => $section['priority'],
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => $section['title'],
			'description' => $section['description'],
			'panel' => $section['panel'],
		) );
	}
	foreach ($settingsAndControls as $name => $value) {
		$wp_customize->add_setting( $name, array(
			'default' => $value['default'],
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'sanitize_callback' => ''
		) );
		if( $value['type']=='image' ){
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					$name,
					array(
						'label' =>  $value['label'],
						'section' =>  $value['section'],
						'settings'   => $name,
						'context'    => 'Wybierz plik'
					)
				)
			);
		}else{
			$wp_customize->add_control( $name, array(
				'type' 		=> $value['type'],
				'section' 	=> $value['section'],
				'label' 	=> $value['label'],
			) );
		}
		if( isset( $value['selector']) ){
			$wp_customize->selective_refresh->add_partial( $name, array(
				'selector' => $value['selector'],
				'render_callback' => 'adream',
			) );
		}
	}
	
}
add_action( 'customize_register', 'prefix_customizer_register' );