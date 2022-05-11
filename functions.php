<?php
    function nasa_tema_setup(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'Menu' ),
            'secondary' => __( 'Secondary Menu', 'Socail Menu' ),
        ) );
    }
 
add_action('after_setup_theme', 'nasa_tema_setup');

function theme_styles(){
    wp_enqueue_style('style.css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css');
}
add_action('wp_enqueue_scripts', 'theme_styles');

function theme_js(){
    wp_enqueue_script('jquery-cdn','https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js');
    wp_enqueue_script('bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script( 'owl_carousel_js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true  );
    wp_enqueue_script('owl_js', get_template_directory_uri() . '/js/index.js', array('jquery'), '', true  );
}
add_action('wp_enqueue_scripts', 'theme_js');

function widget(){
    register_sidebar(array(
        'name' => 'contact-form',
        'id' => 'contact-form',
        'before_widget' =>'<article>',
        'after_widget' => '</article>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'footer-1',
        'id' => 'footer-1',
        'before_widget' =>'<div class="col kategorije">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'footer-2',
        'id' => 'footer-2',
        'before_widget' =>'<div class="col latestBlogs">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'footer-3',
        'id' => 'footer-3',
        'before_widget' =>'<div class="col socials">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

add_action('widgets_init', 'widget');



add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);
// Display fontawesome search icon in menus and toggle search form 

function add_search_form($items, $args) {
if( $args->theme_location == 'secondary' )
       $items .= '<li class="search"><a class="search_icon"><i class="fa fa-search"></i></a><div style="display:none;" class="spicewpsearchform">'. get_search_form(false) .'</div></li>';
       return $items;
}