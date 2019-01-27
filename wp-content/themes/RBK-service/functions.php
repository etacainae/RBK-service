<?php 
add_action( 'after_setup_theme', function() {
	add_theme_support( 'menus' );
});
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . "/css/bootstrap-grid.min.css" );
wp_enqueue_style( 'variables', get_template_directory_uri() . "/css/variables.css" );
wp_enqueue_style( 'reset', get_template_directory_uri() . "/css/reset.css" );
wp_enqueue_style( 'main', get_template_directory_uri() . "/css/main.css" );
wp_enqueue_style( 'mobil', get_template_directory_uri() . "/css/mobil.css" );

} ?>