<?php

//Define constants:
define('SYSTEM_ROOT', get_template_directory_uri());

function portfolio_style_method() {
	wp_enqueue_style("bootstrap", SYSTEM_ROOT."/css/bootstrap.css");
	wp_enqueue_style("portfolio_style", SYSTEM_ROOT."/css/stylish-portfolio.css");
}

function portfolio_font_method() {
	wp_enqueue_style("font_awesome", SYSTEM_ROOT."/fonts/font-awesome/css/font-awesome.min.css");
}

function portfolio_scripts_method() {
	wp_enqueue_script('jquery');

	wp_enqueue_script("bootstrap", SYSTEM_ROOT."/js/bootstrap.js");	
	wp_enqueue_script("custom", SYSTEM_ROOT."/js/custom.js");
}

add_action('wp_enqueue_scripts', 'portfolio_style_method');
add_action('wp_enqueue_scripts', 'portfolio_font_method');
add_action('wp_enqueue_scripts', 'portfolio_scripts_method');

?>