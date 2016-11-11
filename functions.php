<?php
    
    if (!is_admin()) {
        //Load the theme CSS
        function theme_styles() { 
            wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');     
            wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css'); 
        }
        //Load the theme JS
        function theme_js() { 
            wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true );
            wp_enqueue_script( 'scripts_js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true );
        }
        add_action( 'wp_enqueue_scripts', 'theme_styles' );
        add_action( 'wp_enqueue_scripts', 'theme_js' );
        
        include( 'tha-theme-hooks.php' );
    }


register_nav_menus(array(
  'header_menu' => 'Меню'
));