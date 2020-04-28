<?php 
//javascript niezbędny do lightboxa
function main_javascript() {
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), true );
}
add_action( 'wp_enqueue_scripts', 'main_javascript' );

//domyślne wymiary zdjęć
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'post-thumb'); // 300 pixels wide (and unlimited height)
    add_image_size( 'portfolio-thumb'); // 300 pixels wide (and unlimited height)
}

//widgety
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Tytuł oraz opis witryny',
    'before_widget' => '<div class="header__hero">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="header__hero__title">',
    'after_title' => '</h3>',
  )
);


if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Zdjęcie w stopce strony',
    'before_widget' => '<div class="footer__image">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="footer__image__title">',
    'after_title' => '</h3>',
  )
);

//post typu portfolio
function setup_portfolio_item() {
    $args = array(
        'public'    => true,
        'label'     => __( 'Portfiolo', 'portfolioitem' ),
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array('title', 'thumbnail')
    );
    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'setup_portfolio_item' );




?>
