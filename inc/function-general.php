<?php

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

	register_setting('aman_settings_group', 'copyright_info');
	
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

	add_settings_field('copyright_info', 'Copyright Info', 'copyright_field', 'aman_settings_page', 'aman_homepage_options_section');

}
add_action('admin_init', 'aman_custom_settings');

//Output description for the homepage section of the settings
function aman_homepage_options_output() {
	echo 'Customize homepage options such as the three columns in the middle of the homepage. ';
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

function copyright_field() {
	$copyright = esc_attr( get_option('copyright_info') );
	echo '<input type="text" name="copyright_info" value="' . $copyright . '" placeholder="Copyright C ..." \>';
}