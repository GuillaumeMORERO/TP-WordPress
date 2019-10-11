<?php

if (!function_exists('onews_scripts')) :

    function onews_scripts()
    {
        // https://github.com/O-clock-Alumni/fiches-recap/blob/master/wordpress/themes/setup-theme.md#wp_enqueue_style
        // J'ajoute à WordPress mes fichiers de css
        wp_enqueue_style( 'style', get_theme_file_uri('assets/css/style.css'), ['reset'], '1.0.0');
        wp_enqueue_style( 'reset', get_theme_file_uri('assets/css/reset.css'), [], '4.0.0');
    }
    
endif;
add_action('wp_enqueue_scripts', 'onews_scripts');

// https://github.com/O-clock-Alumni/fiches-recap/blob/master/wordpress/themes/setup-theme.md#fonctionnalit%C3%A9s-de-th%C3%A8me
// Je vérifie si la fonction n'existe pas déjà
// peut sembler superflux mais indispensable en cas de child-thème ;)
if (!function_exists('onews_setup')) :
    // Je déclare ma fonction.
    // la bonne pratique consiste à préfixer
    // les noms de nos fonction par le nom du thème
    function onews_setup() {
        // https://github.com/O-clock-Alumni/fiches-recap/blob/master/wordpress/themes/setup-theme.md#title-tag
        // Je demande à WordPress de gérer tout seul les titres de mes pages
        add_theme_support( 'title-tag' );
        // https://github.com/O-clock-Alumni/fiches-recap/blob/master/wordpress/themes/setup-theme.md#menus-de-navigation
        add_theme_support( 'menus' ); // Facultatif car induit par un register_nav_menus
        register_nav_menus([
            'footer' => 'Menu de liens dans le footer'
        ]);

        /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 200, 500 );
        
    }
endif;
// Ajout d'une action au Hook 'after_setup_theme'
add_action( 'after_setup_theme', 'onews_setup' );