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
                <nav class="nav-links d-lg-flex justify-content-center align-items-lg-baseline flex-wrap text-center">
                    <li class="nav-link"><a href="">Home</a></li>
                    <li class="nav-link"><a href="">About</a></li>
                    <li class="nav-link"><a href="">What We Fund</a></li>
                    <li class="nav-link"><a href="">FAQ</a></li>
                    <li class="nav-link"><a href="">Contact</a></li>
                    <li class="nav-link primary"><a href="">Apply</a></li>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section class="hero color-white bg-light-blue overflow-hidden">
            <div class="container-xxl hero-container">
                <div class="hero-text">
                    <span class="top-dash"></span>
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
                    <div class="hero-btn-group d-lg-flex">
                        <a href="#" class="btn mt-4 flex-lg-fill">Lorem Ipsum Dolor</a>
                        <a href="#" class="btn secondary mt-lg-4 flex-lg-fill">Lorem Ipsum Dolor</a>
                    </div>
                </div>
                <div class="hero-image-container">
                    <img class="img-fluid w-100" src="<?php echo get_template_directory_uri() . '/assets/img/ar-at-typewriter-bw.png' ?>" alt="Ayn Rand Black & White Image">
                </div>
            </div>
        </section>
        <section class="funding-program margin-top">
            <div class="container-xxl">
                <div class="text-center">
                    <h2 class="section-header color-blue">
                        Funding Program
                    </h2>
                    <p class="sub color-gray margin-top-half">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo.
                    </p>
                </div>
                <div class="row margin-top">
                    <div class="col-md-4">
                        <div class="square-card bg-light-orange">
                            <h3 class="card-header">
                                Objectivist<br />
                                Venture Fund
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="square-card bg-light-yellow">
                            <h3 class="card-header">
                                Scholarships<br />
                                Program
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="square-card bg-light-blue">
                            <h3 class="card-header">
                                Scholarships<br />
                                Program
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-blue">Lorem Ipsum Dolor</a>
                    <a href="#" class="btn btn-blue-secondary">Lorem Ipsum Dolor</a>
                </div>
            </div>
        </section>
        <section class="about-prometheus margin-top bg-light-blue overflow-hidden pb-5">
            <div class="about-prometheus-image-container">
                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri() . '/assets/img/PF Logo - Isolated.png' ?>" alt="Prometheus Torch Light Image">
            </div>
            <div class="about-prometheus-text-container">
                <div class="about-prometheus-text">
                    <h2 class="color-blue">
                        About Prometheus Foundation
                    </h2>
                    <p>
                        Prometheus Foundation (PF) is an independent, non-profit enterprise whose mission is to actively promote Objectivism, the philosophy of Ayn Rand. To this end, PF seeks and funds proposals from individual Objectivists as well as from for-profit and non-profit organizations.
                    </p>
                    <p>
                        Prometheus Foundation operates with two funds: The Objectivist Venture Fund (OVF) and the New Intellectuals Fund (NIF). Carl Barney, a long-time advocate of Objectivist ideas, is the originator and sole funding source for Prometheus.
                    </p>
                    <p>
                        Objectivist Venture Fund was first announced at the Ayn Rand Institute’s 2014 Objectivist Summer Conference, and inaugurated shortly thereafter. OVF underwrites innovative projects whose aim is to spread Ayn Rand’s ideas with maximum impact.
                    </p>
                    <div class="text-center mt-3">
                        <a href="#" class="btn btn-blue">Lorem Ipsum Dolor</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="what-we-fund margin-top">
            <div class="container-xxl">
                <div class="text-center">
                    <h2 class="section-header color-blue">
                        What We Fund
                    </h2>
                    <p class="sub color-gray margin-top-half">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo.
                    </p>
                </div>
                <div class="row margin-top justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="circle-card bg-light-orange">
                            <div class="circle-card-content">
                                <h3 class="card-header text-left">
                                    Objectivist<br />
                                    Venture Fund
                                </h3>
                                <h5 class="small text-uppercase">
                                    Proposal by Maria Marty
                                </h5>
                                <p class="small">
                                    This Proposal Establishes An Ayn Rand Center For
                                    Latin America, Headquartered In Buenos Aires.
                                    Activities Will Include Website, Conferences,
                                    Courses, And Translations Of Objectivist Work
                                    Into Spanish.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="circle-card bg-light-yellow">
                            <div class="circle-card-content">
                                <h3 class="card-header text-left">
                                    Scholarships<br />
                                    Program
                                </h3>
                                <h5 class="small text-uppercase">
                                    Proposal by Maria Marty
                                </h5>
                                <p class="small">
                                    Lorem ipsum dolor sit amet, nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="circle-card bg-light-blue">
                            <div class="circle-card-content">
                                <h3 class="card-header text-left">
                                    Scholarships<br />
                                    Program
                                </h3>
                                <h5 class="small text-uppercase">
                                    Proposal by Maria Marty
                                </h5>
                                <p class="small">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="#" class="btn btn-blue">Lorem Ipsum Dolor</a>
                    <a href="#" class="btn btn-blue-secondary">Lorem Ipsum Dolor</a>
                </div>
            </div>
        </section>
        <section class="get-started bg-blue margin-top">
            <div class="container-fluid px-0">
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <img class="img-fluid h-100 w-100" src="<?php echo get_template_directory_uri() . '/assets/img/corporate-image.jpg' ?>" alt="Women in discussing in front of laptop">
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="px-3 pl-5">
                            <span class="top-dash margin-top"></span>
                            <h2 class="banner-header color-white">
                                Let’s get started!
                            </h2>
                            <p class="sub color-white">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.
                            </p>
                            <div class="d-lg-flex text-center margin-top margin-bottom">
                                <a href="#" class="btn flex-lg-fill">Lorem Ipsum Dolor</a>
                                <a href="#" class="btn secondary flex-lg-fill">Lorem Ipsum Dolor</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer bg-gray">
        <div class="container-xxl">
            <div class="d-flex justify-content-md-between justify-content-center flex-column flex-md-row align-items-md-baseline">
                <div class="footer-logo-container">
                    <img class="w-100 img-fluid" src="<?php echo get_template_directory_uri() . '/assets/img/Group%2023.png' ?>" alt="">
                </div>
                <ul class="footer-links d-md-flex justify-content-center align-items-md-baseline flex-wrap text-center margin-bottom">
                    <li class="footer-link"><a href="">Home</a></li>
                    <li class="footer-link"><a href="">About</a></li>
                    <li class="footer-link"><a href="">What We Fund</a></li>
                    <li class="footer-link"><a href="">FAQ</a></li>
                    <li class="footer-link"><a href="">Contact</a></li>
                    <li class="footer-link primary"><a href="">Apply</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>