<?php

function remove_dashboard_meta() {
	if ( current_user_can( 'manage_options' ) ) {
		remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
	}
}
// add_action( 'admin_init', 'remove_dashboard_meta' ); 


/**
 * Remove menu items
 */
function remove_menus(){
	if ( current_user_can( 'manage_options' ) ) {
		remove_menu_page( 'plugins.php' );
		remove_menu_page( 'users.php' );
		remove_menu_page( 'tools.php' );
		remove_menu_page( 'options-general.php' );
		remove_menu_page( 'edit.php?post_type=acf-field-group' );
		remove_menu_page( 'edit-comments.php' );
	}
}
// add_action( 'admin_menu', 'remove_menus' );

/**
 * Change dashboard footer note
 */
function change_admin_footer(){
	echo '<span id="footer-note">Designed and developed by <a href="http://www.zensite.pl/" target="_blank">zensite</a></span> based on <a href="https://wordpress.org" target="_blank">Wordpress</a>.</span>';
}
add_filter('admin_footer_text', 'change_admin_footer');

/**
 * Add cudtom login css
 */

function my_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/assets/styles/dashboard.css" />';
}
add_action('login_head', 'my_custom_login');