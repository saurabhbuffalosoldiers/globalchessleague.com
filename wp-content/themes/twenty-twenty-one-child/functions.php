<?php
// style and scripts
add_action('wp_enqueue_scripts', 'gcl_child_enqueue_styles', 999);
function gcl_child_enqueue_styles() {

	 // child styles
	 wp_enqueue_style('bootstrap-style', get_stylesheet_directory_uri() . '/assets/bootstrap_5_2_3/css/bootstrap.min.css');
	 wp_enqueue_style('gcl-child-style', get_stylesheet_directory_uri() . '/styles.css');
	 wp_enqueue_script('jquery');
}
add_filter('use_block_editor_for_post', '__return_false', 10);
function example_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'example_theme_support' );