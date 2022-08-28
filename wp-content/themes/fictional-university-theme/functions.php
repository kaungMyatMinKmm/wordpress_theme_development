<?php

function university_files(){

    wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL , '1.0', true);

    wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i" rel="stylesheet"');

    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');

    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'university_files');

function university_features(){
    // register_nav_menu('headerMenuLocation', 'Header Menu Location');
    // register_nav_menu('footerMenuLoctionOne', 'Footer Menu Location One');
    // register_nav_menu('footerMenuLoctionTwo', 'Footer Menu Location Two');
    add_theme_support('title-tag');
}

add_action('after_setup_theme','university_features');