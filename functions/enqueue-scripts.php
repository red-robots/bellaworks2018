<?php
 // Enqueueing all the java script in a no conflict mode
 function ineedmyjava() {

 	wp_enqueue_style( 'acstarter-style', get_template_directory_uri() . '/style.min.css' );


	if (!is_admin()) {
 
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, '1.10.2', true);
		wp_enqueue_script('jquery');

	
	// wp_enqueue_style( 
	// 		'acstarter-fontawesome', 
	// 		get_template_directory_uri() . '/assets/sass/web-fonts-with-css/css/fontawesome-all.css', 
	// 		array(), '20120206', 
	// 		true 
	// 	);

	wp_enqueue_script( 
			'acstarter-blocks', 
			get_template_directory_uri() . '/assets/js/vendors.min.js', 
			array(), '20120206', 
			true 
		);

	wp_enqueue_script( 
			'acstarter-custom', 
			get_template_directory_uri() . '/assets/js/custom.min.js', 
			array(), '20120206', 
			true 
		);
		
	}
}
 
add_action('wp_enqueue_scripts', 'ineedmyjava');
