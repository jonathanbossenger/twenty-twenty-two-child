<?php

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_child_enqueue_styles' );
function twentytwentytwo_child_enqueue_styles() {
	wp_enqueue_style(
		'twentytwentytwo-child-style',
		get_stylesheet_uri(),
		array( 'twentytwentytwo-style' ),
		wp_get_theme()->get( '1.0.0' )
	);
}

/**
 * Add a custom body class for this theme
 */
add_filter( 'body_class', 'twentytwentytwo_child_body_class' );
function twentytwentytwo_child_body_class( $classes ) {
	$classes[] = 'learn-wordpress';

	return $classes;
}