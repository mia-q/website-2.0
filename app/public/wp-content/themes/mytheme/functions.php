<?php 

function mytheme_files() {
    wp_enqueue_style( 'google fonts', '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), true, true);
    wp_enqueue_style( 'main-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'mytheme_files' );


function my_features() {
    add_theme_support('title-tag');
    
}
add_action('after_setup_theme', 'my_features');

?>