<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 12.09.2016
 * Time: 23:39
 */

add_action('wp_print_styles', 'add_stylesheet');

function add_stylesheet() {

    wp_register_style('bootstrap', get_stylesheet_directory_uri() . '/scss/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap');
    $StyleUrl = get_stylesheet_directory_uri() . '/scss/index.css';
    $StyleFile = get_stylesheet_directory() . '/scss/index.css';

    if ( file_exists($StyleFile) ) {
        wp_register_style('StyleSheets', $StyleUrl);
        wp_enqueue_style( 'StyleSheets');
    }


}
if (!current_user_can('administrator')):
    show_admin_bar(false);
endif;
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );