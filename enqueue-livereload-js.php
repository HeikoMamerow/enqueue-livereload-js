<?php
/*
Plugin Name: Enqueue LiveReload.js
Plugin URI: https://github.com/HeikoMamerow/enqueue-livereload-js
Description: This plugin is usefull for your local development environment, if you work with a task manager like <a href="http://gruntjs.com/">Grunt</a> and want to <a href="https://github.com/gruntjs/grunt-contrib-watch/blob/master/docs/watch-examples.md#enabling-live-reload-in-your-html">enabling LiveReload in your HTML</a>.
Version: 0.1
Author: Heiko Mamerow
Author URI: http://heikomamerow.de
License: GPL2
*/


function enqueue_livereload(){
	// Adjust the path to your livereload.js.
	// Of course you have to donload it first from here: https://github.com/livereload/livereload-js/blob/master/dist/livereload.js
	wp_enqueue_script( 'livereload', 'http://' . $_SERVER['SERVER_NAME'] . '/livereload.js', null );
}
add_action( 'wp_enqueue_scripts', 'enqueue_livereload' );