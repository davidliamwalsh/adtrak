<?php
// Disable Gutenberg block editor
add_filter('use_block_editor_for_post', '__return_false');

// Set Wysiwyg colours
function colours_mce_options($init) {

  $custom_colours = '
    "FB6C55", "Orange",
    "000000", "Black",
    "FFFFFF", "White",
    "F2F2F2", "Off-White",
    "151515", "Off-Black",
    "D6D6D6", "Grey",
    "949494", "Dark-Grey",
  ';

  // build colour grid default+custom colors
  $init['textcolor_map'] = '['.$custom_colours.']';

  // change the number of rows in the grid if the number of colors changes
  // 8 swatches per row
  $init['textcolor_rows'] = 2;

  return $init;

}
add_filter('tiny_mce_before_init', 'colours_mce_options');

// Add Thumbnail Theme Support
add_theme_support( 'post-thumbnails' );