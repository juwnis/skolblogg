<?php
// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');
require_once('customize.php');

function skolblogg_setup() {

    //Visa bara admin-bar om den inloggade användaren får redigera sidor.
    if (current_user_can('edit_posts')){
        show_admin_bar(true);
    }
    else{
        show_admin_bar(false);
    }
    //Lägg till stöd för thumbnailzz och images

    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, false );
    add_image_size( 'post-thumb', 825, 9999);
    add_image_size( 'news-thumb', 300, 9999);

    //Registrera våra menyer.
    register_nav_menus(
        array(
            'header-menu' => __( 'Navbar menu' )
            )
        );
    // Sidlogo
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => false,
        'flex-width'  => false,
        'header-text' => array( 'site-title', 'site-description' ),
        ) );

    // Header image
    $args = array(
        'flex-width'    => false,
        'width'         => 1140,
        'flex-height'   => true,
        'height'        => 300,
        'header-text'   => true,
        'default-text-color'     => '#fff',
        );
    add_theme_support( 'custom-header', $args );
}

add_action('after_setup_theme', 'skolblogg_setup');

// stöd för widgets i sidebar och footer
function skolblogg_widgets_init() {

    register_sidebar( array(
        'name'          => 'Sidebar Area',
        'id'            => 'sidebar_area',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
        ) );
    register_sidebar( array(
        'name'          => 'Footer Area',
        'id'            => 'footer_area',
        'before_widget' => '<li class="list-inline-item">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
        ) );
}
add_action( 'widgets_init', 'skolblogg_widgets_init' );

// Read more button
function wpdocs_excerpt_more( $more ) {
    return sprintf( '...<br/><a class="read-more btn btn-info btn-sm" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Läs mer', 'textdomain' )
        );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
// Custom excerpt lenght
function wpdocs_custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Lägg till css och scripts
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