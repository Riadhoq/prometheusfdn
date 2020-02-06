<?php /*Page Name: Contact*/ ?>

<?php get_header() ?>

<section class="margin-top margin-bottom">
    <div class="text-center">
        <h2 class="section-header">
            <?php the_field('title') ?>
        </h2>
        <p class="sub color-gray margin-top-half">
            <?php the_field('subtitle') ?>
        </p>
    </div>

    <?php
    // Start the loop.
    while (have_posts()) : the_post();

        /*
     * Include the post format-specific template for the content. If you want to
     * use this in a child theme, then include a file called called content-___.php
     * (where ___ is the post format) and that will be used instead.
     */
    ?>
        <div class="container mt-5">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            }
            the_content();
            ?>
        </div>
    <?php endwhile; ?>
</section>


<?php get_footer() ?>