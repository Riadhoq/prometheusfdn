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
    <section class="hero color-white bg-light-blue overflow-hidden">
        <div class="hero-text">
            <h1 class="hero-header">
                Objectivists:<br class="hero-br" />
                Put your ideas to work.
            </h1>
            <p class="sub">Lorem ipsum dolor sit amet, consetetur
                sadipscing elitr, sed diam nonumy eirmod
                tempor invidunt ut labore et dolore magna
                aliquyam erat, sed diam voluptua. At vero
                eos et accusam et justo duo dolores et ea
                rebum. Stet clita kasd gubergren.</p>

            <a href="#" class="btn mt-4">Lorem Ipsum Dolor</a>
            <a href="#" class="btn secondary">Lorem Ipsum Dolor</a>
        </div>
        <div class="hero-image-container">
            <img class="img-fluid w-100" src="<?php echo get_template_directory_uri() . '/assets/img/ar-at-typewriter-bw.png' ?>" alt="Ayn Rand Black & White Image">
        </div>
    </section>
    <section class="margin-top">
        <div class="container-fluid">
            <div class="text-center">
                <h2 class="section-header">
                    Funding Program
                </h2>
                <p class="sub color-gray margin-top-half">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo.
                </p>
            </div>
        </div>
    </section>
    <?php wp_footer(); ?>
</body>

</html>