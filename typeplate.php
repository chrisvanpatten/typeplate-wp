<?php
/**
 * Inline DOcumentation: https://codex.wordpress.org/Inline_Documentation
 * @package typeplate
 * @version 1.0.1
 * @copyright 2013
 * @link  http://typeplate.com
 */
/*
Plugin Name: Typeplate
Plugin URI: http://typeplate.github.com
Description: A Typographic Starter Kit packaged in a tiny WordPress plugin. We don’t make aesthetic design choices, but define proper markup with extensible styling for common typographic patterns. A stripped-down CSS library concerned with the appropriate technical implementation of design patterns—not how they look.
Author: Dennis Gaebel (gryghostvisuals) & Zachary Kain (@zakkain)
Version: 1.0.1
Author URI: http://typeplate.com
License: Creative Commmons 3.0
*/
load_plugin_textdomain('typeplate', false, basename( dirname( __FILE__ ) ) . '/languages' );


	/**
	*
	* hook into Typeplate's CSS from WordPress 'plugins' directory.
	* i.e. /wp-content/plugins/typeplate-unminified.css
	*
	*/
	function typeplate_css() {
		// Register the style like this for a theme:
		// (First the unique name for the style (custom-style) then the src,
		// then dependencies and ver no. and media type)
		wp_register_style( 'typeplate-style', plugins_url( 'typeplate.css' , __FILE__ ), array(), '20130324', 'all' );

		// enqueing:
		wp_enqueue_style( 'typeplate-style' );
	};

	/**
	*
	* Adds the <link> tag in <head> for Typeplate's CSS
	*
	*/
	//add_action('wp_head', 'typeplate_css');
	add_action('wp_enqueue_scripts', 'typeplate_css');
?>