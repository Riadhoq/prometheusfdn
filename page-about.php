<?php /*Page Name: About*/ ?>

<?php get_header() ?>

<section class="about hero bg-blue overflow-hidden">
    <div class="container-xxl hero-container">
        <div class="hero-image-container">
            <img src="<?php echo get_template_directory_uri() . "/assets/img/PF%20Logo%20-%20Isolated.png" ?>" alt="" class="img-fluid w-100">
        </div>
        <div class="hero-text">
            <span class="top-dash"></span>
            <h1 class="hero-header color-blue">
                About Prometheus Foundation
            </h1>
            <p class="sub">
                Lorem ipsum dolor sit amet, consetetur
                sadipscing elitr, sed diam nonumy eirmod
                tempor invidunt ut labore et dolore magna
                aliquyam erat, sed diam voluptua. At vero
                eos et accusam et justo duo dolores et ea
                rebum. Stet clita kasd gubergren.
            </p>
        </div>
    </div>
</section>
<section class="our-mission margin-top">
    <div class="container container-small">
        <div class="text-center">
            <h2 class="section-header color-blue">
                Our Mission:<span>Advance Objectivism</span>
            </h2>
            <p class="sub color-gray margin-top-half">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo.
            </p>
        </div>
        <div class="margin-top margin-bottom">
            <p>
                Prometheus Foundation (PF) is an independent, non-profit enterprise whose mission is to actively promote Objectivism, the philosophy of Ayn Rand. To this end, PF seeks and funds proposals from individual Objectivists as well as from for-profit and non-profit organizations.</p>

            <p>Prometheus Foundation operates with two funds: The Objectivist Venture Fund (OVF) and the New Intellectuals Fund (NIF). Carl Barney, a long-time advocate of Objectivist ideas, is the originator and sole funding source for Prometheus.</p>

            <p>Objectivist Venture Fund was first announced at the Ayn Rand Institute’s 2014 Objectivist Summer Conference, and inaugurated shortly thereafter. OVF underwrites innovative projects whose aim is to spread Ayn Rand’s ideas with maximum impact.
            </p>
        </div>
    </div>
</section>
<section class="about-founder bg-light-blue">
    <div class="about-founder-image-container">
        <img src="<?php echo get_template_directory_uri() . "/assets/img/Barney%20Founder.jpg" ?>" alt="" class="img-fluid-w-100">
    </div>
    <div class="about-founder-text-container">
        <div class="about-founder-text">
            <h2 class="section-header color-blue">
                About the Founder
            </h2>
            <p>
                Prometheus Foundation (PF) is an independent, non-profit enterprise whose mission is to actively promote Objectivism, the philosophy of Ayn Rand. To this end, PF seeks and funds proposals from individual Objectivists as well as from for-profit and non-profit organizations.</p>

            <p>Prometheus Foundation operates with two funds: The Objectivist Venture Fund (OVF) and the New Intellectuals Fund (NIF). Carl Barney, a long-time advocate of Objectivist ideas, is the originator and sole funding source for Prometheus.</p>

            <p>Objectivist Venture Fund was first announced at the Ayn Rand Institute’s 2014 Objectivist Summer Conference, and inaugurated shortly thereafter. OVF underwrites innovative projects whose aim is to spread Ayn Rand’s ideas with maximum impact.
            </p>
        </div>
    </div>
</section>

<section class="margin-top">
    <div class="container container-small">
        <div class="text-center">
            <h2 class="section-header color-blue">
                Board of Directors
            </h2>
        </div>
    </div>
</section>

<section class="margin-top">
    <div class="container container-small">
        <div class="text-center">
            <h2 class="section-header color-blue">
                Our Staff
            </h2>
        </div>
    </div>
</section>

<?php get_template_part("template-parts/funding-program") ?>

<?php get_footer() ?>