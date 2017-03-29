<?php
function add_theme_scripts() {
    wp_enqueue_style( 'skolblogg-bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', '4.0.0-alpha.6' );

    wp_enqueue_style( 'skolblogg-style', get_template_directory_uri() . '/style.css', array('skolblogg-bootstrap4'), '2017032801');

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