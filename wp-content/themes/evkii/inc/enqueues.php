<?php
add_action( 'wp_enqueue_scripts', 'evkii_scripts' );
function evkii_scripts() {
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/dist/css/style.min.css', '', 'v1.1.2' );
	wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,900', false, null);
	wp_enqueue_style('google-fonts');

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/dist/js/main.js', array('jquery'), '1.0', true );
}