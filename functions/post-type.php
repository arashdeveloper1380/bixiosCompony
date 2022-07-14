<?php
function create_slider() {
    register_post_type( 'slider',
    array(
        'labels' => array(
        'name' => __( 'اسلایدر' ),
        'singular_name' => __( 'اسلایدر' )
        ),
        'public' => true,
        'supports' => array(
        'title','thumbnail','editor','excerpt'
        ),
    )
    );
}
add_action( 'init', 'create_slider' );




function create_servicce() {
    register_post_type( 'servicce',
    array(
        'labels' => array(
        'name' => __( 'سرویس' ),
        'singular_name' => __( 'سرویس' )
        ),
        'public' => true,
        'supports' => array(
        'title','thumbnail','editor','excerpt'
        ),
    )
    );
}
add_action( 'init', 'create_servicce' );




function create_portfolio() {
    register_post_type( 'portfolio',
    array(
        'labels' => array(
        'name' => __( 'نمونه کار' ),
        'singular_name' => __( 'نمونه کار' )
        ),
        'public' => true,
        'supports' => array(
        'title','thumbnail','editor'
        ),
    )
    );
}
add_action( 'init', 'create_portfolio' );