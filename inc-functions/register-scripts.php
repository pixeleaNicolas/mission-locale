<?php
/**
 * Register Scripts
 */

// Enqueue Scripts
add_action( 'wp_enqueue_scripts', 'mission_locale_scripts' );
function mission_locale_scripts() {

    // If SCRIPT_DEBUG is enable, load unminified JS, if disabled load minified JS
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		wp_enqueue_script('app-scripts', get_template_directory_uri() . '/dist/js/app.js', array( 'jquery' ), false, false);
	} else {
		wp_enqueue_script('app-scripts', get_template_directory_uri() . '/dist/js/app.min.js', array( 'jquery' ), false, false);
	}
}

// Enqueue Block Editor Script
add_action('enqueue_block_editor_assets', 'mission_locale_block_enqueues');
function mission_locale_block_enqueues() {
    wp_enqueue_script('pix-editor-scripts', get_template_directory_uri() . '/editor.js', array('wp-edit-post', 'wp-blocks', 'wp-dom-ready'), '', true);
}