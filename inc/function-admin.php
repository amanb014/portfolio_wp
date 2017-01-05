<?php
	
/*=========================
	ADMIN PAGE - THEME
========================= */

function aman_add_admin_page() {
	//Add admin page menu
	add_menu_page('Theme Settings', 'Theme Settings', 'manage_options', 'aman_settings_page', 'aman_create_page');
	add_submenu_page( 'aman_settings_page', 'Theme Settings', 'General', 'manage_options', 'aman_settings_page', 'aman_create_page' );

	add_submenu_page( 'aman_settings_page', 'Social Links', 'Social', 'manage_options', 'social_settings_page', 'social_create_page' );


}
add_action('admin_menu', 'aman_add_admin_page');

//output the actual page for the admin settings sections
//This is in another file for cleanliness.
function aman_create_page() {
	require_once(get_template_directory() . '/inc/templates/aman-admin.php');
}
function social_create_page() {
	require_once(get_template_directory() . '/inc/templates/social-admin.php');
}

/*=========================
	HTML FOR THESE PAGES
========================= */

require get_template_directory() . '/inc/function-general.php';
require get_template_directory() . '/inc/function-social.php';
require get_template_directory() . '/inc/function-content.php';