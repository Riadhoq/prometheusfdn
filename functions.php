<?php

/**
 * Prometheusfdn's functions and definitions
 *
 * @package prometheusfdn
 * @since prometheusfdn 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if (!isset($content_width))
    $content_width = 800; /* pixels */

if (!function_exists('prometheusfdn_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function prometheusfdn_setup()
    {

        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        load_theme_textdomain('prometheusfdn', get_template_directory() . '/languages');

        /**
         * Add default posts and comments RSS feed links to <head>.
         */
        add_theme_support('automatic-feed-links');

        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support('post-thumbnails');

        /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
        add_theme_support('title-tag');

        /**
         * Add support for two custom navigation menus.
         */
        register_nav_menus(array(
            'primary'   => __('Nav Menu', 'prometheusfdn'),
            'secondary' => __('Footer Menu', 'prometheusfdn')
        ));

        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));

        add_filter('use_block_editor_for_post', '__return_false', 10);
    }
endif; // prometheusfdn_setup
add_action('after_setup_theme', 'prometheusfdn_setup');


//
function add_theme_scripts()
{
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('get-google-fonts', 'https://fonts.googleapis.com/css?family=Catamaran:300,400,700|Open+Sans:400,400i,600,700&display=swap', false);
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.min.css', array('theme-style'), '1.0', 'all');

    //   if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    //     wp_enqueue_script( 'comment-reply' );
    //   }
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');
