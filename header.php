<?php

/**
 * Header file for the Prometheus Foundation theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Prometheus Foundation
 * @since 1.0.0
 */

?>

<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header bg-white">
        <div class="header-container container-xxl">
            <div class="navbar">
                <div class="nav-logo-container">
                    <img class="w-100 img-fluid" src="<?php echo get_template_directory_uri() . '/assets/img/Group%2023.png' ?>" alt="">
                </div>
                <input type="checkbox" name="top-nav-menu" id="top-nav-menu">
                <label class="toggle-label" for="top-nav-menu">
                    <span class="line line-1"></span>
                    <span class="line line-2"></span>
                    <span class="line line-3"></span>
                </label>
                <?php wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => 'nav',
                        'container_class' => 'nav-links d-lg-flex justify-content-center align-items-lg-baseline flex-wrap text-center',
                        'items_wrap' => '%3$s',
                        'add_li_class'  => 'nav-link',
                        'show_active' => true
                    )
                ); ?>

            </div>
        </div>
    </header>