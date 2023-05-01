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

function custom_link($link)
{
  return '<a href="/' . $link . '" class="mt-10 w-12 h-12"><div class="hover:bg-main hover:text-white duration-300 transition-all text-2xl bg-secondary w-full h-full flex items-center justify-center">-></div></a>';
}