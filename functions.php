<?php

function portfolio_style_method() {
	wp_enqueue_style("default_stylesheet", SYSTEM_ROOT."/css/style.css");
	wp_enqueue_style("style", SYSTEM_ROOT."/css/style.css");
	wp_enqueue_style("bootstrap", SYSTEM_ROOT."/css/bootstrap.css");
}

function portfolio_scripts_method() {
	wp_enqueue_script('jquery');

	wp_enqueue_script("bootstrap", SYSTEM_ROOT."/js/bootstrap.js");	
	wp_enqueue_script("custom", SYSTEM_ROOT."/js/custom.js");
}

add_action('wp_enqueue_scripts', 'portfolio_scripts_method');
add_action('wp_enqueue_style', 'portfolio_style_method');

?>