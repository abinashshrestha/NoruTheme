<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article class="py-7" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    if (is_sticky() && is_home()) :
        echo twentyseventeen_get_svg(array('icon' => 'thumb-tack'));
    endif;
    ?>
    <div class="row">
        <div class="col-12 col-md-4">
            <?php if (has_post_thumbnail()) { ?>
                <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>"
                     alt="<?php echo the_title(); ?>">
            <?php } ?>

            <div class="my-3">
                <?php echo do_shortcode(get_field('foogallery_shortcode')); ?>
            </div>
        </div>
        <div class="col-12 col-md-7 ml-auto">
            <header class="entry-header">
                <?php
                /*if ('post' === get_post_type()) {
                    echo '<div class="entry-meta">';
                    if (is_single()) {
                        twentyseventeen_posted_on();
                    } else {
                        echo twentyseventeen_time_link();
                        twentyseventeen_edit_link();
                    };
                    echo '</div><!-- .entry-meta -->';
                };*/

                if (is_single()) {
                    the_title('<h1 class="stroke-header stroke-header--top text-uppercase">', '</h1>');
                } elseif (is_front_page() && is_home()) {
                    the_title('<h3 class="stroke-header stroke-header--top text-uppercase"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
                } else {
                    the_title('<h2 class="stroke-header stroke-header--top text-uppercase"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                }
                ?>
            </header><!-- .entry-header -->
            <div class="entry-content">
                <?php
                /* translators: %s: Name of current post */
                the_content(sprintf(
                    __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen'),
                    get_the_title()
                ));

                wp_link_pages(array(
                    'before' => '<div class="page-links">' . __('Pages:', 'twentyseventeen'),
                    'after' => '</div>',
                    'link_before' => '<span class="page-number">',
                    'link_after' => '</span>',
                ));
                ?>
            </div><!-- .entry-content -->
        </div>
    </div>
    <?php
    if (is_single()) {
        twentyseventeen_entry_footer();
    }
    ?>

</article><!-- #post-## -->
