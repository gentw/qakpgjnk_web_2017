<?php

function gjnk_post_types () {
	register_post_type('profesori', array(
		'supports' => array('title', 'thumbnail', 'author'),
		'rewrite'  => array('slug' => 'profesorat'),
		'has_archive' => false,
		'public' => true,
		'labels' => array(
			'name' => 'Professors', 
			'add_new_item' => 'Add New Professor',
			'edit_item' => 'Edit Professor',
			'all_items' => 'All Professors',
			'singular_name' => 'Professor'
		),
		'menu_icon' => 'dashicons-welcome-learn-more'
	));
	
	register_post_type('eventi', array(
		'supports' => array('title', 'editor', 'thumbnail', 'author'),
		'rewrite' => array('slug' => 'eventet'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Events',
			'add_new_item' => 'Add New Event',
			'edit_item' => 'Edit Event',
			'all_items' => 'All Events',
			'singular_name' => 'Event'
		),
		'menu_icon' => 'dashicons-calendar'
	));
}

add_action('init', 'gjnk_post_types');