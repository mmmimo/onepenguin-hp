<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function imagepassshort($arg) {
$content = str_replace('"images/', '"' . get_bloginfo('stylesheet_directory') . '/images/', $arg);
return $content;
}
add_action('the_content', 'imagepassshort');
?>