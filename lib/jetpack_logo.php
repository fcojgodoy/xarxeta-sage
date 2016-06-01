<?php
// Add site logo support with Jetpack
function add_logo() {
  $args = array(
    'header-text' => array(
        'site-title',
        'site-description',
    ),
    'size' => '(50, 50)',
);
  add_theme_support( 'site-logo' );
}
add_action( 'after_setup_theme', 'add_logo' );
