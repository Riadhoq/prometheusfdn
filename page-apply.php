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

<?php get_template_part("template-parts/funding-program-no-buttons") ?>

<?php
// Start the loop.
while (have_posts()) : the_post();

    /*
     * Include the post format-specific template for the content. If you want to
     * use this in a child theme, then include a file called called content-___.php
     * (where ___ is the post format) and that will be used instead.
     */
?>
    <div class="container mt-5" id="form">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail();
        }
        the_content();
        ?>
    </div>
<?php endwhile; ?>

<div class="bg-gray">
    <?php get_template_part("template-parts/frequently-asked-questions") ?>
</div>

<?php get_footer() ?>