<?php
// functions.php pulls all our functions together
// We require files here rather than writing the functions directly in this file
// Some of these files start empty or are not in use by default and are therfore commented out
// Remember to uncomment any files you wish to start using

// Enqueue scripts and styles
require_once('functions/site-scripts.php');

// Setup WP menus
require_once('functions/site-menus.php');

// Register custom post types
// require_once('functions/site-post_types.php');

// Add site image sizes
// require_once('functions/site-images.php');

// Include general functions
require_once('functions/site-functions.php');

// Include WooCommerce specific functions (remove if site is not using WooCommerce)
require_once('functions/site-woo.php');