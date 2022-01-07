<?php


// This adds dynamic title tag support
function  archifolio_theme_support(){
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

add_action( 'after_setup_theme', 'archifolio_theme_support');

function archifolio_menus(){
  $locations = array(
    'primary' => 'Desktop Primary Left Sidebar',
    'footer' => 'Footer Menu Items'
  );

  register_nav_menus($locations);
}

add_action('init','archifolio_menus');


function  archifolio_register_styles(){

  $version = wp_get_theme()->get('Version');

  wp_enqueue_style('archifolio-style', get_template_directory_uri() . "/style.css", array('archifolio-bootstrap'), $version, 'all');

  wp_enqueue_style('archifolio-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js". "/style.css", array(), '4.4.1', 'all');

  wp_enqueue_style('archifolio-font-awesome', "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css". "/style.css", array(), '4.7.0', 'all');

 }

add_action( 'wp_enqueue_scripts', 'archifolio_register_styles');

function register_scripts(){

  wp_enqueue_script('archifolio-jquery', 'https://code.jquery.com/jquery-3.5.0.min.js', array(), '3.5.0', true);

  wp_enqueue_script('archifolio-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);

  wp_enqueue_script('archifolio-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);

  wp_enqueue_script('archifolio-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);

}

add_action('wp_enqueue_scripts', 'register_scripts');





 ?>
