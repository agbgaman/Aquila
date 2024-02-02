<?php
/**
 * Theme Functions.
 * 
 * @package Aquila
 */

 function aquila_enqueue_scripts() {
   // register style
    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() .'/style.css'),'all');
    wp_register_style('bootstrap-css', get_template_directory_uri(). '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

   // register script
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js',[], filemtime(get_template_directory() .'/assets/main.js'),true);
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js',['jquery'], false ,true);

   // enqueue style
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');

   // enque script
    wp_enqueue_script('main-jss');
    wp_enqueue_script('bootstrap-js');

   
 }
 add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');

 ?>
 