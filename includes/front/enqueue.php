<?php

function ju_enqueue()
{
    $uri = get_theme_file_uri();

    $ver = JU_DEV_MODE ? time() : false;

    wp_register_style('ju_google_fonts',        'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i', [], $ver);
    wp_register_style('ju_bootstrap',           'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_register_style('ju_style',               $uri . '/assets/css/blog.css', [], $ver);
    wp_register_style('ju_font_icons',          $uri . '/assets/css/font-icons.css', [], $ver);

    wp_enqueue_style('ju_google_fonts');
    wp_enqueue_style('ju_bootstrap');
    wp_enqueue_style('ju_style');
    wp_enqueue_style('ju_font_icons');

    wp_register_script('ju_functions', $uri . '/assets/js/functions.js', [], $ver, false); 

    wp_register_script('ju_popper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" , [], $ver, false);
    wp_register_script('ju_bootstrap_js', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js", [], $ver, false);

    wp_enqueue_script('jquery');
    wp_enqueue_script('ju_functions');
    
    wp_enqueue_script('ju_popper');
    wp_enqueue_script('ju_bootstrap_js');
}
