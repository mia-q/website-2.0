<?php 

function mytheme_files() {
    wp_enqueue_style( 'google fonts', '//fonts.googleapis.com/css2?family=Italiana&family=Lora:ital,wght@0,400..700;1,400..700&display=swap');
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