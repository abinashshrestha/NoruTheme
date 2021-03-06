<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class('position-relative'); ?> <?php echo (is_front_page() ? 'data-spy="scroll" data-target="#navbar"' : '') ?>>
<h1 class="sr-only">Noru Pharma</h1>
<nav class="navbar navbar-expand-sm navbar-light fixed-top">
    <h2 class="sr-only">Noru Navigation</h2>
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="<?php echo site_url(); ?>">
            <svg class="svg-icon svg-icon--size-nav-logo mr-2">
                <use xlink:href="#noru_logo" />
            </svg>
            <?php echo get_bloginfo('name'); ?>
        </a>
        <button class="navbar-toggler" type="button" id="nav-menu-toggler"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse justify-content-end" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-navbar-link" href="<?php echo (is_front_page() ? '#home' : site_url() . '#home') ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-navbar-link" href="<?php echo (is_front_page() ? '#about' : site_url() . '#about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-navbar-link" href="<?php echo (is_front_page() ? '#brands' : site_url() . '#brands') ?>">Brands</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-navbar-link" href="<?php echo (is_front_page() ? '#contact' : site_url() . '#contact') ?>">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="page-container <?php echo (is_front_page() ? '' : 'page-container--margin') ?>">