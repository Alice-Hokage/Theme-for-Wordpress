<?php
add_action( 'wp_enqueue_scripts', 'digital_social_styles' );
add_action( 'wp_enqueue_scripts', 'jquery_lib' );
function jquery_lib(){
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
function digital_social_styles() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css' );
}
add_theme_support('custom-logo');

