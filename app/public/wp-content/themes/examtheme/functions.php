<?php
function rar_load_resources(){
     // Load Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0-beta3', 'all');
    
    // Load custom CSS
    wp_enqueue_style('website-css', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
} 
add_action('wp_enqueue_scripts', 'rar_load_resources');