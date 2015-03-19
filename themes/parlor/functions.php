<?php
  // Import the Twenty Thirteen stylesheet to the parlor theme
	// This will (probably) be deleted from the final build

  // add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
	// function theme_enqueue_styles() {
  //   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	// }
  
  // Remove extra <p> tags and (I think) <br /> tags from page content
  remove_filter('the_content', 'wpautop');

?>
