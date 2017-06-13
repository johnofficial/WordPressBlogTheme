<?php 
	
	function novis_theme_support(){
		//Add FeaturedImage Support
		add_theme_support('post-thumbnails');
	}
	add_action( 'after_setup_theme', 'novis_theme_support' );
	add_image_size( 'slider-thumbnail', 320, 420, true );
	add_image_size( 'single-post-thumbnail', 500, 400, true );
	add_image_size( 'small-post-thumbnail', 230, 230, true );
	add_image_size( 'big-post-thumbnail', 400, 400, true );
	add_image_size( 'mobile-post-thumbnail', 300, 200, true );
 ?>