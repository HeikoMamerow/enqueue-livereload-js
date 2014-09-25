<?php
/*
Plugin Name: Enqueue LiveReload.js
Plugin URI: https://github.com/HeikoMamerow/enqueue-livereload-js
Description: Enqueue LiveReload.js to WordPress.
Version: 0.1
Author: Heiko Mamerow
Author URI: http://heikomamerow.de
License: GPL2
*/


add_action( 'wp_enqueue_scripts', 'enqueue_livereload' );
function enqueue_livereload(){
	// Adjust the path to your livereload.js.
	wp_enqueue_script( 'livereload', 'http://' . $_SERVER['SERVER_NAME'] . '/livereload.js', null );
}