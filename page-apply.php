<?php /*Page Name: Apply*/

$hero_button = get_field('button');

?>

<?php get_header() ?>

<section class="hero color-white bg-light-blue overflow-hidden">
    <div class="container-xxl hero-container">
        <div class="application-hero-text hero-text">
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
        <div class="hero-image-container application-steps-hero color-black text-uppercase">
            <h5><?php the_field('step_1') ?></h5>
            <h5><?php the_field('step_2') ?></h5>
            <h5><?php the_field('step_3') ?></h5>
        </div>
    </div>
</section>

<div class="bg-gray">
    <?php get_template_part("template-parts/frequently-asked-questions") ?>
</div>

<?php get_footer() ?>