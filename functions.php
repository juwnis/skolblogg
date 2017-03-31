<?php

function skolblogg_setup() {

    //Visa bara admin-bar om den inloggade användaren får redigera sidor.
    if (current_user_can('edit_posts')){
            show_admin_bar(true);
        }
        else{
            show_admin_bar(false);
        }
}
add_action('after_setup_theme', 'skolblogg_setup');
function skolblogg_widgets_init() {

    register_sidebar( array(
        'name'          => 'Sidebar Area',
        'id'            => 'sidebar_area',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'skolblogg_widgets_init' );

function add_theme_scripts() {
    wp_enqueue_style( 'skolblogg-bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', '4.0.0-alpha.6' );

    wp_enqueue_style( 'skolblogg-jumbotron', get_template_directory_uri() . '/jumbotron.css', array('skolblogg-bootstrap4'), '2017032801');

    wp_enqueue_style( 'skolblogg-style', get_template_directory_uri() . '/style.css', array('skolblogg-bootstrap4', 'skolblogg-jumbotron'), '2017032801');

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.1.1.slim.min.js', array(), '3.1.1', true);

    wp_enqueue_script( 'tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array('jquery'), '1.4.0', true);

    wp_enqueue_script( 'bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array('jquery', 'tether'), '4.0.0', true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
?>