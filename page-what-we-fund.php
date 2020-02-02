<?php /*Page Name: what we fund*/
$hero_button = get_field('button');
$first_fund_section = 'first_fund_section';
$circle_card = 'circle_card';
$second_fund_section = 'second_fund_section';
$third_fund_section = 'third_fund_section';
?>

<?php get_header() ?>

<section class="what-we-fund-hero hero color-white bg-light-blue overflow-hidden">
    <div class="hero-container">
        <div class="hero-text">
            <span class="top-dash"></span>
            <h1 class="hero-header">
                <?php the_field('title') ?>
            </h1>
            <p class="sub">
                <?php the_field('subtitle') ?>
            </p>
            <div class="hero-btn-group d-lg-flex">
                <?php if ($hero_button) : ?>
                    <a href="<?php echo $hero_button['link'] ?>" class="btn mt-4"><?php echo $hero_button['label'] ?></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="hero-image-container">
            <img class="img-fluid w-100" src="<?php the_field('hero_image') ?>" alt="Business Casual meeting">
        </div>
    </div>
</section>

<?php if (have_rows($first_fund_section)) : ?>
    <?php while (have_rows($first_fund_section)) : the_row(); ?>
        <section class="margin-top margin-bottom">
            <div class="container-xxl">
                <div class="text-center">
                    <h2 class="section-header color-blue">
                        <?php the_sub_field('title') ?>
                    </h2>
                    <p class="sub color-gray margin-top-half">
                        <?php the_sub_field('subtitle') ?>
                    </p>
                </div>
                <?php if (have_rows($circle_card)) : ?>
                    <div class="row margin-top justify-content-center">
                        <?php while (have_rows($circle_card)) : the_row(); ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="circle-card bg-light-orange">
                                    <div class="circle-card-content">
                                        <h3 class="card-header text-left">
                                            <?php the_sub_field('title') ?>
                                        </h3>
                                        <h5 class="small text-uppercase">
                                            <?php the_sub_field('subtitle') ?>
                                        </h5>
                                        <p class="small">
                                            <?php the_sub_field('text') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif ?>
            </div>
        </section>
<?php endwhile;
endif
?>

<?php if (have_rows($second_fund_section)) : ?>
    <?php while (have_rows($second_fund_section)) : the_row(); ?>
        <section class="margin-top margin-bottom">
            <div class="container-xxl">
                <div class="text-center">
                    <h2 class="section-header color-blue">
                        <?php the_sub_field('title') ?>
                    </h2>
                    <p class="sub color-gray margin-top-half">
                        <?php the_sub_field('subtitle') ?>
                    </p>
                </div>
                <?php if (have_rows($circle_card)) : ?>
                    <div class="row margin-top justify-content-center">
                        <?php while (have_rows($circle_card)) : the_row(); ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="circle-card bg-light-yellow">
                                    <div class="circle-card-content">
                                        <h3 class="card-header text-left">
                                            <?php the_sub_field('title') ?>
                                        </h3>
                                        <h5 class="small text-uppercase">
                                            <?php the_sub_field('subtitle') ?>
                                        </h5>
                                        <p class="small">
                                            <?php the_sub_field('text') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif ?>
            </div>
        </section>
<?php endwhile;
endif
?>

<?php if (have_rows($third_fund_section)) : ?>
    <?php while (have_rows($third_fund_section)) : the_row(); ?>
        <section class="margin-top margin-bottom">
            <div class="container-xxl">
                <div class="text-center">
                    <h2 class="section-header color-blue">
                        <?php the_sub_field('title') ?>
                    </h2>
                    <p class="sub color-gray margin-top-half">
                        <?php the_sub_field('subtitle') ?>
                    </p>
                </div>
                <?php if (have_rows($circle_card)) : ?>
                    <div class="row margin-top justify-content-center">
                        <?php while (have_rows($circle_card)) : the_row(); ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="circle-card bg-light-blue">
                                    <div class="circle-card-content">
                                        <h3 class="card-header text-left">
                                            <?php the_sub_field('title') ?>
                                        </h3>
                                        <h5 class="small text-uppercase">
                                            <?php the_sub_field('subtitle') ?>
                                        </h5>
                                        <p class="small">
                                            <?php the_sub_field('text') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif ?>
            </div>
        </section>
<?php endwhile;
endif
?>

<?php
get_template_part("template-parts/get-started-banner");
get_footer();

?>