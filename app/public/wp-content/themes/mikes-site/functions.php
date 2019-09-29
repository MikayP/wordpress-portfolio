<?php


function mikes_files(){
    wp_enqueue_style('main_style', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js', NULL, microtime() );
}

add_action('wp_enqueue_scripts', 'mikes_files', 999);
/// 999 to say do function last
function site_title(){
add_theme_support('title-tag');
}

add_action('title_update', 'site_title');