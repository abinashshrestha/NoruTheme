<?php

/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
/**********************************************************************************
 * wpmu_theme_support - adds theme support for post formats, post thumbnails, HTML5 and automatic feed links
 **********************************************************************************/
function noru_theme_support()
{
    load_theme_textdomain('noru-theme');

    /* post formats */
    add_theme_support('post-formats', array('aside', 'quote'));

    /* post thumbnails */
    add_theme_support('post-thumbnails', array('post', 'page'));

    /* HTML5 */
    add_theme_support('html5');

    /* automatic feed links */
    add_theme_support('automatic-feed-links');

    /*
     * Navigation Menu
     */
    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'noru-theme'),
//        'social' => __( 'Social Links Menu', 'noru-theme' ),
    ));

}

add_action('after_setup_theme', 'noru_theme_support');

function noru_scripts()
{
    /*// Add custom fonts, used in the main stylesheet.
    wp_enqueue_style( 'twentyfifteen-fonts', twentyfifteen_fonts_url(), array(), null );

    // Add Genericons, used in the main stylesheet.
    wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

    // Load our main stylesheet.
    wp_enqueue_style( 'twentyfifteen-style', get_stylesheet_uri() );

    // Load the Internet Explorer specific stylesheet.
    wp_enqueue_style( 'twentyfifteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfifteen-style' ), '20141010' );
    wp_style_add_data( 'twentyfifteen-ie', 'conditional', 'lt IE 9' );

    // Load the Internet Explorer 7 specific stylesheet.
    wp_enqueue_style( 'twentyfifteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentyfifteen-style' ), '20141010' );
    wp_style_add_data( 'twentyfifteen-ie7', 'conditional', 'lt IE 8' );

    wp_enqueue_script( 'twentyfifteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141010', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    if ( is_singular() && wp_attachment_is_image() ) {
        wp_enqueue_script( 'twentyfifteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20141010' );
    }

    wp_enqueue_script( 'twentyfifteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );
    wp_localize_script( 'twentyfifteen-script', 'screenReaderText', array(
        'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'twentyfifteen' ) . '</span>',
        'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'twentyfifteen' ) . '</span>',
    ) );*/

    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Sintony:400,700|Source+Sans+Pro:300,300i,600i,700', false );
    wp_enqueue_style('noru-style', get_template_directory_uri() . '/dist/css/style.css', 'noru-style', null);
}

add_action('wp_enqueue_scripts', 'noru_scripts');

/* Disable WordPress Admin Bar for all users but admins. */
show_admin_bar(false);
