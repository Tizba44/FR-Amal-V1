<?php

function remove_admin_bar()
{

    show_admin_bar(false);
}
add_action('after_setup_theme', 'remove_admin_bar');

function liaison_css()
{
    wp_enqueue_style('custome_style', get_stylesheet_uri());
    wp_enqueue_style('navbar', get_template_directory_uri() . '/assets/css/style1_navbar.css');
    wp_enqueue_style('single', get_template_directory_uri() . '/assets/css/style2_single.css');
    wp_enqueue_style('navphone', get_template_directory_uri() . '/assets/css/style4_navphone.css');
    wp_enqueue_style('thumbnail', get_template_directory_uri() . '/assets/css/style6_thumnail.css');
}

add_action('wp_enqueue_scripts', 'liaison_css');

function mon_theme_enqueue_styles()
{
    if (is_tax()) {
        wp_enqueue_style('taxonomy', get_template_directory_uri() . '/assets/css/style7_taxonomy.css');
    }
}
add_action('wp_enqueue_scripts', 'mon_theme_enqueue_styles');

function mon_theme_enqueue_scripts()
{
    if (is_tax()) {
        wp_enqueue_script('tax', get_template_directory_uri() . '/assets/js/tax.js', array(), '0', true);
    }
}
add_action('wp_enqueue_scripts', 'mon_theme_enqueue_scripts');

function liaison_js()
{
    wp_enqueue_script('scriptdarkwhite', get_template_directory_uri() . '/assets/js/lightDark.js', array(), '0', true);
    wp_enqueue_script('scriptmain', get_template_directory_uri() . '/assets/js/main.js', array(), '0', true);
}
add_action('wp_enqueue_scripts', 'liaison_js');


function fn_theme_supports()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'fn_theme_supports');
function montheme_register_conseil()
{
    register_taxonomy('conseil', 'post', [
        'labels' => [
            'name' => 'conseil ',
            'singular_name'     => 'conseil',
            'plural_name'       => 'conseil',
            'search_items'      => 'Rechercher des conseil',
            'all_items'         => 'Tous les conseil',
            'edit_item'         => 'Editer les conseil',
            'update_item'       => 'Mettre à jour les conseil',
            'add_new_item'      => 'Ajouter un nouveau conseil',
            'new_item_name'     => 'Ajouter un nouveau conseil',
            'menu_name'         => 'conseil',
        ],
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
    ]);
}
add_action('init', 'montheme_register_conseil');





function montheme_register_test_produit()
{
    register_taxonomy('test_produit', 'post', [
        'labels' => [
            'name' => 'test_produit',
            'singular_name'     => 'test_produit',
            'plural_name'       => 'test_produit',
            'search_items'      => 'Rechercher des test_produit',
            'all_items'         => 'Tous les test_produit',
            'edit_item'         => 'Editer les test_produit',
            'update_item'       => 'Mettre à jour les test_produit',
            'add_new_item'      => 'Ajouter un nouveau test_produit',
            'new_item_name'     => 'Ajouter un nouveau test_produit',
            'menu_name'         => 'test_produit',
        ],
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
    ]);
}
add_action('init', 'montheme_register_test_produit');



function montheme_register_actu_mode()
{
    register_taxonomy('actu_mode', 'post', [
        'labels' => [
            'name' => 'actu_mode',
            'singular_name'     => 'actu_mode',
            'plural_name'       => 'actu_mode-series',
            'search_items'      => 'Rechercher des actu_mode',
            'all_items'         => 'Tous les actu_mode',
            'edit_item'         => 'Editer les actu_mode',
            'update_item'       => 'Mettre à jour les actu_mode',
            'add_new_item'      => 'Ajouter un nouveau actu_mode',
            'new_item_name'     => 'Ajouter un nouveau actu_mode',
            'menu_name'         => 'actu_mode',
        ],
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
    ]);
}
add_action('init', 'montheme_register_actu_mode');


function wpb_cookies()
{
    // Time of user's visit
    $visit_time = date('F j, Y g:i a');

    // Check if cookie is already set
    if (isset($_COOKIE['wpb_visit_time'])) {

        // Do this if cookie is set
        function visitor_greeting()
        {

            // Use information stored in the cookie
            $lastvisit = $_COOKIE['wpb_visit_time'];

            $string .= 'You last visited our website ' . $lastvisit . '. Check out whats new';

            // Delete the old cookie so that we can set it again with updated time
            unset($_COOKIE['wpb_visit_time']);

            return $string;
        }
        // } else {
        //     // Do this if the cookie doesn't exist
        //     function visitor_greeting()
        //     {
        //         $string .= 'New here? Check out these resources...';
        //         return $string;
        //     }
    }
    // add_shortcode('greet_me', 'visitor_greeting');

    // Set or Reset the cookie
    setcookie('wpb_visit_time',  $visit_time, time() + 31556926);
}
add_action('init', 'wpb_cookies');
