<?php

function university_post_types() {
  register_post_type('event', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'events'),
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

  register_post_type('program', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'programs'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'programs',
      'add_new_item' => 'Add New program',
      'edit_item' => 'Edit program',
      'all_items' => 'All programs',
      'singular_name' => 'program'
    ),
    'menu_icon' => 'dashicons-awards'
  ));
}

add_action('init', 'university_post_types');