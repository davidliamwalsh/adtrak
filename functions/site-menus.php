<?php
// Register menus
if ( !function_exists('site_menus') ) :
	function site_menus() {
		register_nav_menus(
			[
				'main-menu' => 'Main Menu',
				'main-categories' => 'Main Categories',
				'mobile-menu' => 'Mobile Menu'
			]
		);
	}
	add_action( 'init', 'site_menus' );
endif;