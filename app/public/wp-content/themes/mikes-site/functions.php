<?php

register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );
function mikes_files(){
    wp_enqueue_style('main_style', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js', NULL, microtime() );
}

add_action('wp_enqueue_scripts', 'mikes_files', 999);
/// 999 to say do function last
function site_title(){
add_theme_support('title-tag');
}


function add_featured_image_support_to_your_wordpress_theme() {
    add_theme_support( 'post-thumbnails' );
}
 
add_action( 'after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme' );
add_action('title_update', 'site_title');