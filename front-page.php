<?php
$home_about_section = get_field('home_about_section');
$home_what_we_fund_section = get_field('home_what_we_fund_section');
get_header() ?>
<section class="hero color-white bg-light-blue overflow-hidden">
    <div class="container-xxl hero-container">
        <div class="hero-text">
            <span class="top-dash"></span>
            <h1 class="hero-header">
                <?php the_field('home_title') ?>
            </h1>
            <p class="sub"><?php the_field('home_subtitle') ?></p>
            <div class="hero-btn-group d-lg-flex">
                <?php
                if (have_rows('home_hero_primary_btn')) :
                    while (have_rows('home_hero_primary_btn')) : the_row();
                ?>
                        <a href="<?php the_sub_field('link') ?>" class="btn mt-4 flex-lg-fill"><?php the_sub_field('label'); ?></a>
                <?php
                    endwhile;
                else :
                #No rows found
                endif;

                ?>
                <?php
                if (have_rows('home_hero_secondary_btn')) :
                    while (have_rows('home_hero_secondary_btn')) : the_row();
                ?>
                        <a href="<?php the_sub_field('link') ?>" class="btn secondary mt-lg-4 flex-lg-fill"><?php the_sub_field('label'); ?></a>
                <?php
                    endwhile;
                else :
                #No rows found
                endif;

                ?>
            </div>
        </div>
        <div class="hero-image-container">
            <img class="img-fluid w-100" src="<?php the_field('home_hero_image') ?>" alt="Ayn Rand Black & White Image">
        </div>
    </div>
</section>

<?php get_template_part("template-parts/funding-program") ?>

<?php if ($home_about_section) : ?>
    <section class="about-prometheus margin-top bg-light-blue overflow-hidden pb-5">
        <div class="about-prometheus-image-container">
            <img class="img-fluid w-100" src="<?php echo $home_about_section['image'] ?>" alt="Prometheus Torch Light Image">
        </div>
        <div class="about-prometheus-text-container">
            <div class="about-prometheus-text">
                <h2 class="color-blue">
                    <?php echo $home_about_section['title'] ?>
                </h2>
                <?php echo $home_about_section['text'] ?>
                <div class="text-center text-lg-left mt-3">
                    <a href="<?php echo $home_about_section['button']['link'] ?>" class="btn btn-blue"><?php echo $home_about_section['button']['label'] ?></a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($home_what_we_fund_section) : ?>
    <section class="what-we-fund margin-top">
        <div class="container-xxl">
            <div class="text-center">
                <h2 class="section-header color-blue">
                    <?php echo $home_what_we_fund_section['title'] ?>
                </h2>
                <p class="sub color-gray margin-top-half">
                    <?php echo $home_what_we_fund_section['subtitle'] ?>
                </p>
            </div>
            <div class="row margin-top justify-content-center">
                <?php if ($home_what_we_fund_section['first_circle_card']) : ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="circle-card bg-light-orange">
                            <div class="circle-card-content">
                                <h3 class="card-header text-left">
                                    <?php echo $home_what_we_fund_section['first_circle_card']['title'] ?>
                                </h3>
                                <h5 class="small text-uppercase">
                                    <?php echo $home_what_we_fund_section['first_circle_card']['subtitle'] ?>
                                </h5>
                                <p class="small">
                                    <?php echo $home_what_we_fund_section['first_circle_card']['text'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($home_what_we_fund_section['second_circle_card']) : ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="circle-card bg-light-yellow">
                            <div class="circle-card-content">
                                <h3 class="card-header text-left">
                                    <?php echo $home_what_we_fund_section['second_circle_card']['title'] ?>
                                </h3>
                                <h5 class="small text-uppercase">
                                    <?php echo $home_what_we_fund_section['second_circle_card']['subtitle'] ?>
                                </h5>
                                <p class="small">
                                    <?php echo $home_what_we_fund_section['second_circle_card']['text'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($home_what_we_fund_section['third_circle_card']) : ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="circle-card bg-light-blue">
                            <div class="circle-card-content">
                                <h3 class="card-header text-left">
                                    <?php echo $home_what_we_fund_section['third_circle_card']['title'] ?>
                                </h3>
                                <h5 class="small text-uppercase">
                                    <?php echo $home_what_we_fund_section['third_circle_card']['subtitle'] ?>
                                </h5>
                                <p class="small">
                                    <?php echo $home_what_we_fund_section['third_circle_card']['text'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="text-center mt-5">
                <?php if ($home_what_we_fund_section['button']) : ?>
                    <a href="<?php echo $home_what_we_fund_section['button']['link'] ?>" class="btn btn-blue"><?php echo $home_what_we_fund_section['button']['label'] ?></a>
                <?php endif; ?>
                <?php if ($home_what_we_fund_section['secondary_button']) : ?>
                    <a href="<?php echo $home_what_we_fund_section['secondary_button']['link'] ?>" class="btn btn-blue-secondary"><?php echo $home_what_we_fund_section['secondary_button']['label'] ?></a>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php get_template_part("template-parts/get-started-banner") ?>

<?php get_footer() ?>