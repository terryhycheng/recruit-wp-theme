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
}

add_action('wp_enqueue_scripts', 'recruit_add_scripts');