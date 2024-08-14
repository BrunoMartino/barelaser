<?php
// Add Theme Style on website
function bare_css() {
  wp_register_style('bare-style', get_stylesheet_directory_uri() . '/style.css', [], '1.0.0', false);
  wp_register_style('bare-tailwind', get_stylesheet_directory_uri() . '/dist/css/tailwind.css', [], '1.0.0', false);
  wp_enqueue_style('bare-style');
  wp_enqueue_style('bare-tailwind');
}
add_action('wp_enqueue_scripts', 'bare_css');

?>
