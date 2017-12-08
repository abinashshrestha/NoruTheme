<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<footer class="footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <a href="#" class="navbar-brand text-white">Noru Pharma</a>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#">
                            <svg title="globe" class="svg-icon svg-icon--size-sm svg-icon--green" role="img">
                                <use xlink:href="#icon-facebook"/>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <svg title="globe" class="svg-icon svg-icon--size-sm svg-icon--green" role="img">
                                <use xlink:href="#icon-twitter"/>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <svg title="globe" class="svg-icon svg-icon--size-sm svg-icon--green" role="img">
                                <use xlink:href="#icon-youtube"/>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <svg title="globe" class="svg-icon svg-icon--size-sm svg-icon--green" role="img">
                                <use xlink:href="#icon-linkedin"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <ul class="list-unstyled py-3 footer__links">
                    <li>
                        <a href="">Home</a>
                    <li>
                        <a href="">Contact</a>
                    </li>
                    <li>
                        <a href="">Brands</a>
                    </li>
                    <li>
                        <a href="">About</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-4"></div>
        </div>
    </div>
    <div class="site-info">
        <?php
        /**
         * Fires before the Twenty Fifteen footer text for footer customization.
         *
         * @since Twenty Fifteen 1.0
         */
        do_action('twentyfifteen_credits');
        ?>
        <a href="<?php echo esc_url(__('https://wordpress.org/', 'twentyfifteen')); ?>"><?php printf(__('Proudly powered by %s', 'twentyfifteen'), 'WordPress'); ?></a>
    </div><!-- .site-info -->
</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri() . '/dist/js/app.js' ?>"></script>

</body>
</html>
