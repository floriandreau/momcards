<?php

if ( function_exists('register_sidebar') ) register_sidebar(2); 

add_action('wp_enqueue_scripts', 'style_theme_enfant', 1);
function style_theme_enfant() {
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ());
  
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.1', 'all');
}


// action avec priorité 20. 
function style_theme_mobil() {
  wp_enqueue_style( 'mobil', get_template_directory_uri() . '/css/mobil.css', array(), '1.1', 'all');
}
add_action('wp_enqueue_scripts', 'style_theme_mobil', 2000);