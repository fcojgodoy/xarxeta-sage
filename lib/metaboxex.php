<?php
add_filter( 'rwmb_meta_boxes', 'xarxeta_register_meta_boxes' );
function xarxeta_register_meta_boxes( $meta_boxes ) {
    $prefix = 'rw_';
    // 1st meta box
    $meta_boxes[] = array(
        'id'         => 'title-caption',
        'title'      => __( 'Title caption', 'textdomain' ),
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'  => __( 'Title caption', 'textdomain' ),
                'desc'  => 'Add a second title to the page',
                'id'    => $prefix . 'title-caption',
                'type'  => 'text',
                'placeholder'   => 'Add title-caption',
                'class' => 'add-title-caption',
            ),
        )
    );
    return $meta_boxes;
}
