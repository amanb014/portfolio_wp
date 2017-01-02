<?php

function aman_social_settings() {
	register_setting('social_settings_group', 'facebook_url');
	register_setting('social_settings_group', 'linkedin_url');
	register_setting('social_settings_group', 'twitter_url');
	register_setting('social_settings_group', 'github_url');
	register_setting('social_settings_group', 'instagram_url');
	register_setting('social_settings_group', 'youtube_url');

	add_settings_section('aman_social_links', 'Social Links', 'display_social_settings', 'social_settings_page');

	add_settings_field('facebook_url', 'Facebook', 'facebook_field', 'social_settings_page', 'aman_social_links');
	add_settings_field('linkedin_url', 'LinkedIn', 'linkedin_field', 'social_settings_page', 'aman_social_links');
	add_settings_field('twitter_url', 'Twitter', 'twitter_field', 'social_settings_page', 'aman_social_links');
	add_settings_field('github_url', 'Github', 'github_field', 'social_settings_page', 'aman_social_links');
	add_settings_field('instagram_url', 'Instagram', 'instagram_field', 'social_settings_page', 'aman_social_links');
	add_settings_field('youtube_url', 'YouTube', 'youtube_field', 'social_settings_page', 'aman_social_links');
}
add_action('admin_init', 'aman_social_settings');

function display_social_settings() {
	echo 'These social links will be displayed on the footer section of the website. Five links are recommended, but more can fit snugly. Leave boxes blank if you do not want the image to show up.';
}

function facebook_field() {
	$facebook = esc_attr(get_option('facebook_url'));
	echo '<input size="50" type="text" placeholder="http://facebook.com/..." name="facebook_url" value="' . $facebook .'"\>';
}

function linkedin_field() {
	$linkedin = esc_attr(get_option('linkedin_url'));
	echo '<input size="50" type="text" placeholder="http://linkedin.com/..." name="linkedin_url" value="' . $linkedin .'"\>';
}

function twitter_field() {
	$twitter = esc_attr(get_option('twitter_url'));
	echo '<input size="50" type="text" placeholder="http://twitter.com/..." name="twitter_url" value="' . $twitter .'"\>';
}

function github_field() {
	$github = esc_attr(get_option('github_url'));
	echo '<input size="50" type="text" placeholder="http://github.com/..." name="github_url" value="' . $github .'"\>';
}

function instagram_field() {
	$instagram = esc_attr(get_option('instagram_url'));
	echo '<input size="50" type="text" placeholder="http://instagram.com/..." name="instagram_url" value="' . $instagram .'"\>';
}

function youtube_field() {
	$youtube = esc_attr(get_option('youtube_url'));
	echo '<input size="50" type="text" placeholder="http://youtube.com/..." name="youtube_url" value="' . $youtube .'"\>';
}