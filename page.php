<?php /*Page Name: Faq*/

get_header();

// Start the loop.
while (have_posts()) : the_post();

    /*
     * Include the post format-specific template for the content. If you want to
     * use this in a child theme, then include a file called called content-___.php
     * (where ___ is the post format) and that will be used instead.
     */
?>
    <div class="container custom-article">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail();
        }
        the_content();
        ?>
    </div>
<?php
// End the loop.
endwhile;
get_footer();

?>