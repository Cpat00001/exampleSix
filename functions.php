<?php

function wpdocs_theme_scripts(){
    // styling css
    wp_enqueue_style('mainstyle.css', get_stylesheet_directory_uri() . './css/mainstyles.css',array(), '1.0.0','all');
    //add javascript file
    wp_enqueue_script('one.js', get_template_directory_uri() . './js/one.js',array(),1.0,true);
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_scripts' );

?>