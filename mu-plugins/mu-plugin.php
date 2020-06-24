<?php

/**
 * Plugin Name: Mu Plugin
 * Plugin URI: https://leemiller.club/
 * Description: Adds custom post types to the Skeleton theme
 * Version: 1.2.12
 * Author: Lee Miller
 * Author URI: https://leemiller.club
 */

function skeleton_post_types() {
  // Portfolio Post type
  register_post_type('portfolio', array(
    'supports' => array ('title', 'editor', 'excerpt', 'thumbnail', 'author', 'attributes', 'comments'),
    'rewrite' => array('slug' => 'portfolio'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Portfolio',
      'add_new_item' => 'Add New',
      'edit_item' => 'Edit Post',
      'all_items' => 'All Posts',
      'singular_name' => 'Portfolio'
    ),
    'menu_icon' => 'dashicons-media-default'
  ));
  // News Post type
  register_post_type('news', array(
    'supports' => array ('title', 'editor', 'excerpt', 'thumbnail', 'author', 'attributes', 'comments'),
    'rewrite' => array('slug' => 'news'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'News',
      'add_new_item' => 'Add New',
      'edit_item' => 'Edit Post',
      'all_items' => 'All Posts',
      'singular_name' => 'News'
    ),
    'menu_icon' => 'dashicons-media-text'
  ));

  // Marketing Post type
  register_post_type('marketing', array(
    'supports' => array ('title', 'editor', 'excerpt', 'thumbnail', 'author', 'attributes', 'comments'),
    'rewrite' => array('slug' => 'marketing'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Marketing',
      'add_new_item' => 'Add New',
      'edit_item' => 'Edit Post',
      'all_items' => 'All Posts',
      'singular_name' => 'News'
    ),
    'menu_icon' => 'dashicons-megaphone'
  ));
  
}

add_action('init', 'skeleton_post_types');
