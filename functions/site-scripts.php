<?php
if( !function_exists('site_scripts') ):
	function site_scripts() {
		if ( !is_admin() ):

			// Load the CSS file
			wp_register_style( 'main-css', get_bloginfo( 'template_url' ) . '/assets/css/main.css', false, null );
			wp_enqueue_style ( 'main-css' );
		
			// Load JS files
			wp_enqueue_script( 'bootstrap', get_bloginfo( 'template_url' ) . '/assets/js/bootstrap/bootstrap.bundle.min.js', [], null, true );
			wp_enqueue_script( 'jquery' );
			wp_enqueue_script( 'main-js', get_bloginfo( 'template_url' ) . '/assets/js/main/main.min.js?V6', [ 'jquery' ], null, true );
			// Uncomment the below if using Font Awesome and add kit code as the second argument
			wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/4b2a30cf1e.js', [], null, true );

			// Slick Slider
			wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ), '', true );
			wp_enqueue_style( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
		
		endif;
	}
	add_action( 'wp_enqueue_scripts', 'site_scripts' );
endif;