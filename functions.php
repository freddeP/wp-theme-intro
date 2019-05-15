<?php


function add_theme_scripts()
{
    
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css',false,'1.1','all');


}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

//add_theme_support("menus");   ?? vet inte riktigt vad denna gör


// registera navigation
register_nav_menus(

    array(
        "top-menu"=> __("Topppp Menu", "theme"),
        "footer-menu"=> __("Footer Menu", "theme")
    )
);
?>