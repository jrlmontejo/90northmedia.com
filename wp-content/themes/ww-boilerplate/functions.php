<?php

function wwbp_add_scripts() {
	// list all scripts here
	$scripts = [
		"jquery"     => '//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js',
		"tether"     => "//cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js",
		"bootstrap4" => '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js'
	];

	foreach( $scripts as $scr_handle => $scr_url ) {
		wp_register_script( $scr_handle, $scr_url, null, null, true );
		wp_enqueue_script( $scr_handle );
	}
}
add_action( 'wp_enqueue_scripts', 'wwbp_add_scripts' );

function wwbp_add_styles() {
	// list all CSS files here
	$styles = [
		"bootstrap4" => '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css'
	];

	foreach( $styles as $style_handle => $style_url ) {
		wp_register_style( $style_handle, $style_url, null, null, null );
		wp_enqueue_style( $style_handle );
	}
}
add_action( 'wp_enqueue_scripts', 'wwbp_add_styles' );