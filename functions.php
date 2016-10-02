<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 12.09.2016
 * Time: 23:39
 */

add_action('wp_print_styles', 'add_stylesheet');

function add_stylesheet() {


    $StyleUrl = get_stylesheet_directory_uri() . '/css/index.css';
    $StyleFile = get_stylesheet_directory() . '/css/index.css';

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
include get_stylesheet_directory()."/inc/widgets/images.php";
function header_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Header Widget Area', 'neohech' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your header.', 'neohech' ),
        'before_widget' => '<div class="image-widget">',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '</div>',
    ) );
}
add_action( 'widgets_init', 'header_widgets_init' );