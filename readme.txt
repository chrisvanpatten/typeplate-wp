=== Plugin Name ===
Contributors: @gryghostvisuals, @zakkain
Donate link: http://typeplate.com
Tags: css, typography, style
Requires at least: 3.5.1
Tested up to: 3.5.1
Stable tag: 1.0.1
License: Creative Commons Attribution 3.0 Unported

== Description ==

Adds typographic flair without the asthetic choices. Typeplate is "A Typographic Starter Kit" encouraging better type on the web. Use the standard out of the box styles or customize further using our custom typeplate classes.
Utilizes `wp_head` instead of `ob_start()` for styles to ensure they remain intact during a cached environment.

== Installation ==

1. Upload `typeplate` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Drink a beer and celebrate.

== Frequently Asked Questions ==

== Upgrade Notice ==

== Screenshots ==

== Changelog ==

function typeplate_css() { ?>
	<link href="<?php bloginfo('wpurl'); ?>/wp-content/plugins/typeplate/typeplate.css" rel="stylesheet">
<?php
}; ?>