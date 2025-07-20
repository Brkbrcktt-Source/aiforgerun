<?php
function aiforgerun_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menus([
    'primary' => __('Main Navigation'),
  ]);
}
add_action('after_setup_theme', 'aiforgerun_theme_setup');