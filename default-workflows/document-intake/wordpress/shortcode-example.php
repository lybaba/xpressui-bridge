<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Example shortcode wrapper for document-intake.
function xpressui_render_document_intake() {
	$output = do_shortcode( '[xpressui id="document-intake"]' );
	if ( function_exists( 'xpressui_get_shell_allowed_html' ) ) {
		return wp_kses( $output, xpressui_get_shell_allowed_html() );
	}
	return wp_kses_post( $output );
}

add_shortcode( 'xpressui_document_intake', 'xpressui_render_document_intake' );
