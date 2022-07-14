<?php

function setup_bixios(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus(array(
        'main'=>'منوی اصلی'
    ));
}
add_action('after_setup_theme', 'setup_bixios');


function setup_bixios_script_style(){
    // Styles
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css' );
    wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css' );
    wp_enqueue_style( 'shortcodes', get_template_directory_uri() . '/assets/css/shortcodes.css' );
    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // Scripts
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'countto', get_template_directory_uri() . '/assets/js/countto.js', array(), '1.0.0', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
    wp_enqueue_script( 'shortcodes.js', get_template_directory_uri() . '/assets/js/shortcodes.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery.easing', get_template_directory_uri() . '/assets/js/jquery.easing.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery.fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', array(), '1.0.0', true );
    wp_enqueue_script( 'plugin', get_template_directory_uri() . '/assets/js/plugin.js', array(), '1.0.0', true );
    wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'swiper.js', get_template_directory_uri() . '/assets/js/swiper.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery-validate', get_template_directory_uri() . '/assets/js/jquery-validate.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'setup_bixios_script_style' );


function bixios_widget(){
    register_sidebar(array(
        'name' => 'ساید بار فوتر',
        'id' => 'widget_footer',
        'before_widget' =>'<div class="menu-1">',
        'after_widget' =>'</div>',
        'before_title' =>'<h3 class="widget-title-link-wrap text-color-1">',
        'after_title' =>'</h3>',
    ));
} 
add_action('widgets_init', 'bixios_widget');


require_once dirname( __FILE__ ) . '/functions/taxonomy.php';
require_once 'functions/post-type.php';


// CMB2
require_once dirname( __FILE__ ) . '/cmb2/init.php';
require_once dirname( __FILE__ ) . '/functions/meta-box.php';
require_once dirname( __FILE__ ) . '/functions/settings.php';