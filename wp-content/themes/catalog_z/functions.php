<?php
//Variables
//Includes
include(get_theme_file_path('inc/front/enqueue.php'));
include(get_theme_file_path('inc/front/head.php'));
include(get_theme_file_path('inc/setup.php'));
// include(get_theme_file_path('inc/front/head.php'));
//Hooks
add_action('wp_enqueue_scripts', 'ud_enqueue_scripts');
add_action('wp_head', 'ud_head', 1);
add_action('after_setup_theme', 'ud_setup');
