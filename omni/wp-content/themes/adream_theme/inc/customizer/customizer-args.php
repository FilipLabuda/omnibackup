<?php
	$panels		= [
		'front_page_baner_panel' => [
			'priority' => 1,
			'title' => __( 'Strona Główna Banery'),
			'description' => __( ''),
		],
	];
	$sections 	= [
		'first_baner_section' 	=> [
			'priority' 		=> 1,
			'title' 		=> __( 'Pierwszy Baner' ),
			'description' 	=> '',
			'panel' 		=> 'front_page_baner_panel',
		],
	];
	$settingsAndControls = [
		'first_baner_title' 	=> [
			'default'		=> 'LOREM IPSUM',
			'type' 			=> 'text',
			'section' 		=> 'first_baner_section',
			'label' 		=> __( 'Tytuł banera' ),
			'selector' 		=> '#baner1',
		],
		'first_baner_sub_title' 	=> [
			'default'		=> 'LOREM IPSUM',
			'type' 			=> 'text',
			'section' 		=> 'first_baner_section',
			'label' 		=> __( 'Pod tytuł banera' ),
		],
		'first_baner_href' 	=> [
			'default'		=> '#',
			'type' 			=> 'url',
			'section' 		=> 'first_baner_section',
			'label' 		=> __( 'Adres banera' ),
		],
		'first_baner_image' 	=> [
			'default'		=> '#',
			'type' 			=> 'image',
			'section' 		=> 'first_baner_section',
			'label' 		=> __( 'Tło banera' ),
		],
	];
?>