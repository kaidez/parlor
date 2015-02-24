<?php
  // Import the Twenty Fifteen stylesheet to the parlor theme
	// This will (probably) be deleted from the final build
  add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
	function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	}

?>
