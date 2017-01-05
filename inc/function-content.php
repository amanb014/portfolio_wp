<?php 

function wpab_register_content_settings() {
	register_setting('aman_content_settings_group', 'projects_link');
	register_setting('aman_content_settings_group', 'experience_link');

	add_settings_section('aman_content_settings_section', 'Content Options', 'aman_content_settings_output', 'content_settings_page');

	add_settings_field('content_projects_link', 'Projects List Page', 'projects_link_output', 'content_settings_page', 'aman_content_settings_section');
	add_settings_field('content_experience_link', 'Experience List Page', 'experience_link_output', 'content_settings_page', 'aman_content_settings_section');


}
add_action('admin_init', 'wpab_register_content_settings');

function aman_content_settings_output() {
	echo 'This is where you manage the content settings for your website theme.';
}

/*=========================
	LINKS
========================= */

function projects_link_output() {
	$projects_link = esc_attr(get_option('projects_link'));
	echo '<input type="text" name="projects_link" value="' . $projects_link . '" placeholder="Link to your projects list shortcode" \>';
}

function experience_link_output() {
	$experience_link = esc_attr(get_option('experience_link'));
	echo '<input type="text" name="experience_link" value="' . $experience_link . '" placeholder="Link to your projects list shortcode" \>';
}