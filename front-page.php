<?php get_header() ?>
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
    <?php get_template_part("template-parts/funding-program") ?>
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
                <div class="text-center text-lg-left mt-3">
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
    <?php get_template_part("template-parts/get-started-banner") ?>
</main>
<?php get_footer() ?>