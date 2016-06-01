<?php

add_action( 'after_setup_theme', 'add_logo_image_size' );
function add_logo_image_size() {
    add_image_size( 'logo-image-size', 300 ); // 300 pixels wide (and unlimited height)
}
