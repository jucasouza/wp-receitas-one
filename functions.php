<?php
/**
 * Receitas functions and definitions
 *
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Receitas
 */

//Cpts
require get_template_directory() . '/inc/cpts.php';
function receita_scripts(){
    //header 
    //wp_enqueue_style( 'fonts.googleapis-css', 'https://fonts.googleapis.com/icon?family=Material+Icons' );
    wp_enqueue_style( 'normalize-css', get_template_directory_uri() . '/assets/css/normalize.css', array(), '8.0.0', 'all' ); 
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', array(), '6.1.0', 'all' ); 
    wp_enqueue_style( 'bootstrap.min-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3', 'all' );
    wp_enqueue_style( 'animate.min-css', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '3.5.1', 'all' ); 
    wp_enqueue_style( 'fontawesome-all.min-css', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), '5.0.6', 'all' );
    wp_enqueue_style( 'flaticon-css', get_template_directory_uri() . '/assets/fonts/flaticon.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl.carousel.min-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl.theme.default.min-css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '1.0.0', 'all' );
    //Style Css
    wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0.0 ', 'all' );
    wp_enqueue_style('style-css', get_stylesheet_directory_uri(), array(), '1.0.0', 'all' ); 
    //Modernizr Js header
    wp_enqueue_script( 'modernizr-3.6.0.min-js', get_template_directory_uri() . '/assets/js/modernizr-3.6.0.min.js', array( 'jquery' ), '3.6.0', 'all' );
    //Footer
    wp_enqueue_script( 'jquery-3.3.1.min-js', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array( 'jquery' ), '3.3.1', true );
    wp_enqueue_script( 'popper.min-js', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'bootstrap.min-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '4.1.3', true );
    wp_enqueue_script( 'plugins-js', get_template_directory_uri() . '/assets/js/plugins.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'owl.carousel.min-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), '2.3.4', true );
    wp_enqueue_script( 'smoothscroll.min-js', get_template_directory_uri() . '/assets/js/smoothscroll.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts',  'receita_scripts' );

function receita_config(){
    //Bootstrap menu
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

    register_nav_menus(
        array(
            'receita_main_menu'   => 'Receita Main Menu',
            'receita_footer_menu' => 'Receita Footer Menu'
        )
        );

    add_theme_support( 'title-tag' );    
       
}
add_action( 'after_setup_theme', 'receita_config', 0 );

//Definir as Miniatura dos posts

add_theme_support( 'post-thumbnails' ); 

set_post_thumbnail_size( 1280, 720, true);
add_image_size('bloghomeone', 530, 572, true);
add_image_size( 'latest', 90, 90, true );
add_image_size( 'blog-single', 1920, 624, true );
add_image_size( 'preview-pgncao', 168, 130, true );
add_image_size( 'recipe-about', 530, 390, true );
add_image_size( 'pages-all', 810, 494, true );

if ( ! isset( $content_width ) ) {
    $content_width = 600;
}

add_theme_support( 'title-tag' );
 
