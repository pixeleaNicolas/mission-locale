<?php
/**
 * Register nav menus locations
 */

 if ( ! function_exists( 'mission_locale_register_nav_menu' ) ) {

	function mission_locale_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'mission-locale' ),
	    	'footer_menu'  => __( 'Footer Menu', 'mission-locale' ),
		) );
	}
	add_action( 'after_setup_theme', 'mission_locale_register_nav_menu', 0 );
}