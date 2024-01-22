<?php 

function load_styles(){
    // wp_register_style('font', get_template_directory_uri() . '/css/fonts/fonts.css', array(), 1, 'all');
    // wp_enqueue_style('font');

    wp_register_style('styles', get_template_directory_uri() . '/css/main.css', array(), 1, 'all');
    wp_enqueue_style('styles');

}

add_action('wp_enqueue_scripts', 'load_styles');


function load_js(){
    wp_register_script('main', get_template_directory_uri() . '/js/main.js', array(),1, 1, 1);
    wp_enqueue_script('main');
}

add_action('wp_enqueue_scripts', 'load_js');


add_theme_support('menus');
register_nav_menus(
    array(
        'main-menu'=> __('Main Menu', 'theme')
    )
    );



    

?>