<?php

function fpro_assets(){

    wp_enqueue_style("estilos", get_template_directory_uri()."/assets/css/main.css");

    wp_enqueue_script("fpro-jquery", get_template_directory_uri()."/assets/js/jquery.min.js");
    wp_enqueue_script("fpro-drop", get_template_directory_uri()."/assets/js/jquery.dropotron.min.js");
    wp_enqueue_script("fpro-browser", get_template_directory_uri()."/assets/js/browser.min.js");
    wp_enqueue_script("fpro-break", get_template_directory_uri()."/assets/js/breakpoints.min.js");
    wp_enqueue_script("fpro-util", get_template_directory_uri()."/assets/js/util.js");
    wp_enqueue_script("fpro-main", get_template_directory_uri()."/assets/js/main.js");
    
}

add_action("wp_enqueue_scripts", "fpro_assets");

function fpro_theme_supports(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo',
    array(
        "width" => 135,
        "height" => 70,
        "flex-width" => true,
        "flex-height" => true,
    )
    );
}

add_action("after_setup_theme", "fpro_theme_supports");

function fpro_add_menus(){
    register_nav_menus(
        array(
            'menu-principal' => "Menu principal",
            'menu-responsive' => "Menu responsive"
        )
    );
}

add_action("after_setup_theme", "fpro_add_menus");