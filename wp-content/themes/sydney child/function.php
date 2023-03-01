<?php
function enqueue_parent_styles(){
    wp_enqueue_style('parent_style', 
    get_template_directory_uri(). '/style.css');

    wp_enqueue_style('index_style', 
    get_stylesheet_directory_uri(). '/index.css');

    wp_registor_style('inner_style', 
    get_stylesheet_directory_uri(). '/inner.css');

    wp_enqueue_style("inner_style");

    wp_enqueue_script('custom_script', 
    get_stylesheet_directory_uri(). '/custom.js');
}

add_action('wp_enqueue_scripts',
'enqueue_parent_styles')


?>