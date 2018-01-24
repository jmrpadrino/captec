<?php
    
    // Captec S.A. theme functions
    // Requerir los CPTs
    require_once('includes/captecsa-cpt.php');
    require_once('includes/captecsa-meta.php');
    require_once('includes/captecsa-taxonomies.php');

    // Languaje Support
    load_theme_textdomain( 'captec', get_template_directory() . '/languages/' );


    /* Theme components */
    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    add_theme_support( 'post-thumbnails' );


    //Languaje Front-End Support
    if (function_exists('register_nav_menus')) {
        register_nav_menus( array(
            'languages-nav' => __( 'Lenguajes', 'captec' ),
        ) );
    };
    if (function_exists('register_sidebar')) {
        register_sidebar( array(
            'name'          => __( 'Multi Idioma', 'captec' ),
            'id'            => 'translation',
            'description'   => __( 'Uso exclusivo del qTranslate-x', 'captec' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
    };