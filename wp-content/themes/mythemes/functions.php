
<?php
function mortal_theme() {
wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'styletest', get_template_directory_uri() . '/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'mortal_theme' );


