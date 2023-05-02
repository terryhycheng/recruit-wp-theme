<?php

function recruit_init()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
}

add_action('after_setup_theme', 'recruit_init');

function recruit_add_scripts()
{
  wp_enqueue_style('recruit_style_css', get_template_directory_uri() . "/style.css", array());
  wp_enqueue_script('recruit_script_js', get_template_directory_uri() . "/assets/js/main.js", array(), 1, true);
}

add_action('wp_enqueue_scripts', 'recruit_add_scripts');

// Custom Link Button Component
function custom_link($link)
{
  return '<a href="' . $link . '" class="w-12 h-12"><div class="hover:bg-main hover:text-white duration-300 transition-all text-2xl bg-secondary w-full h-full flex items-center justify-center">-></div></a>';
}


// Register `Job` post type
function jobs_post_type()
{
  $args = array(
    'hierarchical' => true,
    'public' => true,
    'has_archive' => true,
    'labels' => array(
      'name' => 'Jobs',
      'singular_name' => 'Job'
    ),
    'menu_icon' => 'dashicons-list-view',
    'supports' => array('title', 'editor', 'excerpt')
  );
  register_post_type('Jobs', $args);
}

add_action('init', 'jobs_post_type');

// Register `Job` post type
function people_post_type()
{
  $args = array(
    'hierarchical' => true,
    'public' => true,
    'has_archive' => true,
    'labels' => array(
      'name' => 'People',
      'singular_name' => 'Person'
    ),
    'menu_icon' => 'dashicons-admin-users',
    'supports' => array('title')
  );
  register_post_type('People', $args);
}

add_action('init', 'people_post_type');
