<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'options_framework_theme'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	$options = array();

	$options[] = array(
		'name' => __('Basic Settings', 'woordpress-bootsrap'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Facebook Comments', 'woordpress-bootsrap'),
		'desc' => __('Check if you want to use Facebook for commenting. If you want to use built-in WordPress comments, uncheck this box.', 'woordpress-bootsrap'),
		'id' => 'use_facebook_comments',
		'std' => '1',
		'type' => 'checkbox');

	$options[] = array(
		'name' => __('Advanced Settings', 'woordpress-bootsrap'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Fluid Layout', 'woordpress-bootsrap'),
		'desc' => __('If you select fluid layout your site will be completely fluid (ie full screen width) based on the width of the viewport', 'woordpress-bootsrap'),
		'id' => 'responsive_theme',
		'std' => '0',
		'type' => 'checkbox');

	$options[] = array(
		'name' => __('Layout Settings', 'allaboutpaws'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Twitter Account', 'allaboutpaws'),
		'desc' => __('Enter a twitter username to use in the header and footer (no "@")', 'allaboutpaws'),
		'id' => 'twitter_username',
		'type' => 'text');

	$options[] = array(
		'name' => __('Facebook Account', 'allaboutpaws'),
		'desc' => __('Enter a facebook username to use in the header and footer', 'allaboutpaws'),
		'id' => 'facebook_username',
		'type' => 'text');

	$options[] = array(
		'name' => __('Company Address', 'allaboutpaws'),
		'desc' => __('Enter an address to use in the header', 'allaboutpaws'),
		'id' => 'company_address',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('Company Telephone', 'allaboutpaws'),
		'desc' => __('Enter a phone number to use in the header', 'allaboutpaws'),
		'id' => 'company_telephone',
		'type' => 'text');

	$options[] = array(
		'name' => __('Copyright Notice', 'allaboutpaws'),
		'desc' => __('Enter a copyright notice to use in the footer', 'allaboutpaws'),
		'id' => 'copyright_notice',
		'type' => 'text');

	return $options;
}