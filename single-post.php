<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post, page, product
 */

get_header(); ?>
<div class="container full-height-page-container">
    <?php
    /* Start the Loop */
    while (have_posts()) : the_post();
        get_template_part('template-parts/content', get_post_format());

        /*// If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;*/

    endwhile; // End of the loop.
    ?>
</div>
<?php get_footer() ?>
