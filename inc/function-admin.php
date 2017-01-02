<?php
	
/*=========================
	ADMIN PAGE - THEME
========================= */

function aman_add_admin_page() {
	//Add admin page menu
	add_menu_page('Theme Settings', 'Theme Settings', 'manage_options', 'aman_settings_page', 'aman_create_page');
	// add_submenu_page( 'aman_settings', 'Theme Settings', 'General', 'manage_options', 'aman_settings', 'aman_create_page' );
}
add_action('admin_menu', 'aman_add_admin_page');


//All the settings that we need for the settings in our portfolio
function aman_custom_settings() {
	register_setting('aman_settings_group', 'left_line_one');
	register_setting('aman_settings_group', 'left_line_two');
	register_setting('aman_settings_group', 'left_line_three');

	register_setting('aman_settings_group', 'mid_line_one');
	register_setting('aman_settings_group', 'mid_line_two');
	register_setting('aman_settings_group', 'mid_line_three');

	register_setting('aman_settings_group', 'right_line_one');
	register_setting('aman_settings_group', 'right_line_two');
	register_setting('aman_settings_group', 'right_line_three');

	register_setting('aman_settings_group', 'footer_left');
	register_setting('aman_settings_group', 'footer_right');
	register_setting('aman_settings_group', 'footer_middle');
	
	add_settings_section('aman_homepage_options_section', 'Homepage Options', 'aman_homepage_options_output', 'aman_settings_page');

	add_settings_field('field_left_line1', 'Left Line 1', 'aman_home_left1', 'aman_settings_page', 'aman_homepage_options_section');
	add_settings_field('field_left_line2', 'Left Line 2', 'aman_home_left2', 'aman_settings_page', 'aman_homepage_options_section');
	add_settings_field('field_left_line3', 'Left Line 3', 'aman_home_left3', 'aman_settings_page', 'aman_homepage_options_section');

	add_settings_field('field_middle_line1', 'Middle Line 1', 'aman_home_middle1', 'aman_settings_page', 'aman_homepage_options_section');
	add_settings_field('field_middle_line2', 'Middle Line 2', 'aman_home_middle2', 'aman_settings_page', 'aman_homepage_options_section');
	add_settings_field('field_middle_line3', 'Middle Line 3', 'aman_home_middle3', 'aman_settings_page', 'aman_homepage_options_section');

	add_settings_field('field_right_line1', 'Right Line 1', 'aman_home_right1', 'aman_settings_page', 'aman_homepage_options_section');
	add_settings_field('field_right_line2', 'Right Line 2', 'aman_home_right2', 'aman_settings_page', 'aman_homepage_options_section');
	add_settings_field('field_right_line3', 'Right Line 3', 'aman_home_right3', 'aman_settings_page', 'aman_homepage_options_section');

	add_settings_section('aman_footer_options_section', 'Footer Options', 'aman_footer_options_output', 'aman_settings_page');

	add_settings_field('left_footer', 'Left Heading', 'aman_footer_left', 'aman_settings_page', 'aman_footer_options_section');
	add_settings_field('mid_footer', 'Middle Heading', 'aman_footer_middle', 'aman_settings_page', 'aman_footer_options_section');
	add_settings_field('right_footer', 'Right Heading', 'aman_footer_right', 'aman_settings_page', 'aman_footer_options_section');
}
add_action('admin_init', 'aman_custom_settings');

//Output description for the homepage section of the settings
function aman_homepage_options_output() {
	echo 'Customize homepage options such as the three columns in the middle of the homepage. ';
}

function aman_footer_options_output() {
	echo 'This section controls the headings for the three footer columns.';
}

//output the actual page for the admin settings sections
//This is in another file for cleanliness.
function aman_create_page() {
	require_once(get_template_directory() . '/inc/templates/aman-admin.php');
}


/*=========================
	LEFT COLUMN HEADINGS
========================= */
function aman_home_left1() {
	$left_l1 = esc_attr( get_option('left_line_one') );
	echo '<input type="text" name="left_line_one" value="' . $left_l1 . '" placeholder="Left Column Line 1" \>';
}
function aman_home_left2() {
	$left_l2 = esc_attr( get_option('left_line_two') );
	echo '<input type="text" name="left_line_two" value="' . $left_l2 . '" placeholder="Left Column Line 2" \>';
}
function aman_home_left3() {
	$left_l3 = esc_attr( get_option('left_line_three') );
	echo '<input type="text" name="left_line_three" value="' . $left_l3 . '" placeholder="Left Column Line 3" \>';
}
/*=========================
	MIDDLE COLUMN HEADINGS
========================= */
function aman_home_middle1() {
	$middle1 = esc_attr( get_option('mid_line_one') );
	echo '<input type="text" name="mid_line_one" value="' . $middle1 . '" placeholder="Middle Column Line 1" \>';
}
function aman_home_middle2() {
	$middle2 = esc_attr( get_option('mid_line_two') );
	echo '<input type="text" name="mid_line_two" value="' . $middle2 . '" placeholder="Middle Column Line 2" \>';
}
function aman_home_middle3() {
	$middle3 = esc_attr( get_option('mid_line_three') );
	echo '<input type="text" name="mid_line_three" value="' . $middle3 . '" placeholder="Middle Column Line 3" \>';
}
/*=========================
	RIGHT COLUMN HEADINGS
========================= */
function aman_home_right1() {
	$right1 = esc_attr( get_option('right_line_one') );
	echo '<input type="text" name="right_line_one" value="' . $right1 . '" placeholder="Right Column Line 1" \>';
}
function aman_home_right2() {
	$right2 = esc_attr( get_option('right_line_two') );
	echo '<input type="text" name="right_line_two" value="' . $right2 . '" placeholder="Right Column Line 2" \>';
}
function aman_home_right3() {
	$right3 = esc_attr( get_option('right_line_three') );
	echo '<input type="text" name="right_line_three" value="' . $right3 . '" placeholder="Right Column Line 3" \>';
}
/*=========================
	FOOTER HEADINGS
========================= */
function aman_footer_left() {
	$footer_left = esc_attr( get_option('footer_left') );
	echo '<input type="text" name="footer_left" value="' . $footer_left . '" placeholder="Left Footer Heading" \>';
}
function aman_footer_middle() {
	$footer_mid = esc_attr( get_option('footer_middle') );
	echo '<input type="text" name="footer_middle" value="' . $footer_mid . '" placeholder="Middle Footer Heading" \>';
}
function aman_footer_right() {
	$footer_right = esc_attr( get_option('footer_right') );
	echo '<input type="text" name="footer_right" value="' . $footer_right . '" placeholder="Right Footer Heading" \>';
}