<?php
function rar_load_resources(){
     // Load Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0-beta3', 'all');
    
    // Load custom CSS
    wp_enqueue_style('website-css', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'rar_load_resources');

function rar_setup_theme() {
    add_theme_support('post-thumbnails');
    register_nav_menu('primary', __('Primary Menu', 'examtheme'));
}
add_action('after_setup_theme', 'rar_setup_theme');

function examtheme_register_contact_form_answers_cpt() {
    $labels = array(
        'name'                  => __('Contact Form Answers', 'examtheme'),
        'singular_name'         => __('Contact Form Answer', 'examtheme'),
        'menu_name'             => __('Contact Form Answers', 'examtheme'),
        'name_admin_bar'        => __('Contact Form Answer', 'examtheme'),
        'add_new'               => __('Add New', 'examtheme'),
        'add_new_item'          => __('Add New Contact Form Answer', 'examtheme'),
        'new_item'              => __('New Contact Form Answer', 'examtheme'),
        'edit_item'             => __('Edit Contact Form Answer', 'examtheme'),
        'view_item'             => __('View Contact Form Answer', 'examtheme'),
        'all_items'             => __('All Contact Form Answers', 'examtheme'),
        'search_items'          => __('Search Contact Form Answers', 'examtheme'),
        'parent_item_colon'     => __('Parent Contact Form Answers:', 'examtheme'),
        'not_found'             => __('No contact form answers found.', 'examtheme'),
        'not_found_in_trash'    => __('No contact form answers found in Trash.', 'examtheme'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'exclude_from_search'=> true,
        'supports'           => array('title', 'editor', 'custom-fields'),
        'rewrite'            => false,
    );

    register_post_type('contact_form_answers', $args);
}
add_action('init', 'examtheme_register_contact_form_answers_cpt');