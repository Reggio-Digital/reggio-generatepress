<?php
/**
 * Theme functions and definitions.
 */

function reggio_generatepress_enqueue_scripts() {
	if ( is_rtl() ) {
		wp_enqueue_style( 'generatepress-rtl', trailingslashit( get_template_directory_uri() ) . 'rtl.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'reggio_generatepress_enqueue_scripts', 100 );