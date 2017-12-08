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

    add_image_size( 'twentyseventeen-featured-image', 2000, 1200, true );

    add_image_size( 'twentyseventeen-thumbnail-avatar', 100, 100, true );

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

    wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Sintony:400,700|Source+Sans+Pro:300,300i,600i,700', false);
    wp_enqueue_style('noru-style', get_template_directory_uri() . '/dist/css/style.css', 'noru-style', null);
}

add_action('wp_enqueue_scripts', 'noru_scripts');

/* Disable WordPress Admin Bar for all users but admins. */
show_admin_bar(false);

/**
 * Add SVG definitions to the footer.
 */
function noru_include_svg_icons()
{
    // Define SVG sprite file.
    $svg_icons = get_parent_theme_file_path('/svg/icons.svg');

    // If it exists, include it.
    if (file_exists($svg_icons)) {
        require_once($svg_icons);
    }
}

add_action('wp_footer', 'noru_include_svg_icons', 9999);

if (!function_exists('twentyseventeen_posted_on')) :
    /**
     * Prints HTML with meta information for the current post-date/time and author.
     */
    function twentyseventeen_posted_on()
    {

        // Get the author name; wrap it in a link.
        $byline = sprintf(
        /* translators: %s: post author */
            __('by %s', 'twentyseventeen'),
            '<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . get_the_author() . '</a></span>'
        );

        // Finally, let's write all of this to the page.
        echo '<span class="posted-on">' . twentyseventeen_time_link() . '</span><span class="byline"> ' . $byline . '</span>';
    }
endif;

if (!function_exists('twentyseventeen_time_link')) :
    /**
     * Gets a nicely formatted string for the published date.
     */
    function twentyseventeen_time_link()
    {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if (get_the_time('U') !== get_the_modified_time('U')) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf($time_string,
            get_the_date(DATE_W3C),
            get_the_date(),
            get_the_modified_date(DATE_W3C),
            get_the_modified_date()
        );

        // Wrap the time string in a link, and preface it with 'Posted on'.
        return sprintf(
        /* translators: %s: post date */
            __('<span class="screen-reader-text">Posted on</span> %s', 'twentyseventeen'),
            '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
        );
    }
endif;

if ( ! function_exists( 'twentyseventeen_entry_footer' ) ) :
    /**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function twentyseventeen_entry_footer() {

        /* translators: used between list items, there is a space after the comma */
        $separate_meta = __( ', ', 'twentyseventeen' );

        // Get Categories for posts.
        $categories_list = get_the_category_list( $separate_meta );

        // Get Tags for posts.
        $tags_list = get_the_tag_list( '', $separate_meta );

        // We don't want to output .entry-footer if it will be empty, so make sure its not.
        if ( ( ( twentyseventeen_categorized_blog() && $categories_list ) || $tags_list ) || get_edit_post_link() ) {

            echo '<footer class="entry-footer">';

            if ( 'post' === get_post_type() ) {
                if ( ( $categories_list && twentyseventeen_categorized_blog() ) || $tags_list ) {
                    echo '<span class="cat-tags-links">';

                    // Make sure there's more than one category before displaying.
                    if ( $categories_list && twentyseventeen_categorized_blog() ) {
                        echo '<span class="cat-links">' . twentyseventeen_get_svg( array( 'icon' => 'folder-open' ) ) . '<span class="screen-reader-text">' . __( 'Categories', 'twentyseventeen' ) . '</span>' . $categories_list . '</span>';
                    }

                    if ( $tags_list ) {
                        echo '<span class="tags-links">' . twentyseventeen_get_svg( array( 'icon' => 'hashtag' ) ) . '<span class="screen-reader-text">' . __( 'Tags', 'twentyseventeen' ) . '</span>' . $tags_list . '</span>';
                    }

                    echo '</span>';
                }
            }

            twentyseventeen_edit_link();

            echo '</footer> <!-- .entry-footer -->';
        }
    }
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function twentyseventeen_categorized_blog() {
    $category_count = get_transient( 'twentyseventeen_categories' );

    if ( false === $category_count ) {
        // Create an array of all the categories that are attached to posts.
        $categories = get_categories( array(
            'fields'     => 'ids',
            'hide_empty' => 1,
            // We only need to know if there is more than one category.
            'number'     => 2,
        ) );

        // Count the number of categories that are attached to the posts.
        $category_count = count( $categories );

        set_transient( 'twentyseventeen_categories', $category_count );
    }

    // Allow viewing case of 0 or 1 categories in post preview.
    if ( is_preview() ) {
        return true;
    }

    return $category_count > 1;
}

if ( ! function_exists( 'twentyseventeen_edit_link' ) ) :
/**
 * Returns an accessibility-friendly link to edit a post or page.
 *
 * This also gives us a little context about what exactly we're editing
 * (post or page?) so that users understand a bit more where they are in terms
 * of the template hierarchy and their content. Helpful when/if the single-page
 * layout with multiple posts/pages shown gets confusing.
 */
function twentyseventeen_edit_link() {
    edit_post_link(
        sprintf(
        /* translators: %s: Name of current post */
            __( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
            get_the_title()
        ),
        '<span class="edit-link">',
        '</span>'
    );
}
endif;
