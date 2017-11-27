<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package bootstrapcore1
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function bootstrapcore1_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'bootstrapcore1_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function bootstrapcore1_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'bootstrapcore1_pingback_header' );
