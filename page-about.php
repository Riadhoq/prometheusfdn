<?php /*Page Name: About*/

$our_mission_section = get_field('our_mission_section');
$about_the_founder = get_field('about_the_founder');
$board_of_directors_section = 'board_of_directors_section';
$staff_section = 'staff_section';

?>

<?php get_header() ?>

<section class="about hero bg-blue overflow-hidden">
    <div class="container-xxl hero-container">
        <div class="hero-image-container">
            <img src="<?php the_field('hero_image') ?>" alt="" class="img-fluid w-100">
        </div>
        <div class="hero-text">
            <span class="top-dash"></span>
            <h1 class="hero-header color-blue">
                <?php the_field('title') ?>
            </h1>
            <p class="sub">
                <?php the_field('subtitle') ?>
            </p>
        </div>
    </div>
</section>
<?php if ($our_mission_section) : ?>
    <section class="our-mission margin-top">
        <div class="container container-small">
            <div class="text-center">
                <h2 class="section-header color-blue">
                    <?php echo $our_mission_section['title'] ?>
                </h2>
                <p class="sub color-gray margin-top-half">
                    <?php echo $our_mission_section['subtitle'] ?>
                </p>
            </div>
            <div class="margin-top margin-bottom">
                <?php echo $our_mission_section['text'] ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php if ($about_the_founder) : ?>
    <section class="about-founder bg-light-blue">
        <div class="about-founder-image-container">
            <img src="<?php echo $about_the_founder['founder_image'] ?>" alt="" class="img-fluid w-100">
        </div>
        <div class="about-founder-text-container">
            <div class="about-founder-text">
                <div class="text-center text-lg-left">
                    <h2 class="section-header color-blue">
                        <?php echo $about_the_founder['title'] ?>
                    </h2>
                </div>
                <?php echo $about_the_founder['text'] ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (have_rows($board_of_directors_section)) :
    while (have_rows($board_of_directors_section)) : the_row(); ?>
        <section class="margin-top">
            <div class="container container-small">
                <div class="text-center">
                    <h2 class="section-header color-blue">
                        <?php the_sub_field('title') ?>
                    </h2>
                </div>
                <?php if (have_rows('directors')) : ?>
                    <div class="row margin-top">
                        <?php while (have_rows('directors')) : the_row(); ?>
                            <div class="col-lg-4 staff-card">
                                <img src="<?php the_sub_field('image') ?>" alt="" class="staff-image">
                                <div class="staff-card-text">
                                    <h4>
                                        <?php the_sub_field('name') ?>
                                    </h4>
                                    <h5 class="small">
                                        <?php the_sub_field('title') ?>
                                    </h5>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif; ?>
                    </div>
        </section>
<?php
    endwhile;
endif; ?>

<?php if (have_rows($staff_section)) :
    while (have_rows($staff_section)) : the_row(); ?>
        <section class="margin-top">
            <div class="container container-small">
                <div class="text-center">
                    <h2 class="section-header color-blue">
                        <?php the_sub_field('title') ?>
                    </h2>
                </div>
                <?php if (have_rows('staff')) : ?>
                    <div class="row margin-top">
                        <?php while (have_rows('staff')) : the_row(); ?>
                            <div class="col-lg-4 staff-card">
                                <img src="<?php the_sub_field('image') ?>" alt="" class="staff-image">
                                <div class="staff-card-text">
                                    <h4>
                                        <?php the_sub_field('name') ?>
                                    </h4>
                                    <h5 class="small">
                                        <?php the_sub_field('title') ?>
                                    </h5>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif; ?>
                    </div>
        </section>
<?php
    endwhile;
endif; ?>

<?php get_template_part("template-parts/funding-program") ?>

<?php get_footer() ?>