<?php
	$wp_customize->add_section( 'parallax-1', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Pierwszy parallax', 'adream' ),
		'panel' => 'panel_parallax'
	) );


	$wp_customize->add_setting( 'parallax-1', array(
		'default' => 'Logika zaprowadzi Cię z punktu A do punktu B. Wyobraźnia zaprowadzi Cię wszędzie.',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => 'esc_textarea'
	) );
	$wp_customize->add_setting( 'parallax-1-text', array(
		'default' => 'Albert Einstein',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => 'esc_textarea'
	) );


	$wp_customize->add_control( 'parallax-1', array(
		'type' => 'text',
		'priority' => 10,
		'section' => 'parallax-1',
		'label' => __( 'Tytuł', 'adream' ),
		'description' => ''
	) );
	$wp_customize->add_control( 'parallax-1-text', array(
		'type' => 'text',
		'priority' => 10,
		'section' => 'parallax-1',
		'label' => __( 'Podpis / Podtytuł', 'adream' ),
		'description' => ''
	) );

	$wp_customize->add_setting( 'parallax-1-bg', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => 'esc_textarea',
	) );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'parallax-1-bg',
			array(
			   'label'      => __( 'Zmień tło slidera', 'theme_name' ),
			   'section'    => 'parallax-1',
			   'settings'   => 'parallax-1-bg',
			   'context'    => 'Wybierz plik'
			)
		)
	);

	$wp_customize->selective_refresh->add_partial( 'parallax-1', array(
		'selector' => '#parallax-1',
		'render_callback' => 'adream',
	) );
?>