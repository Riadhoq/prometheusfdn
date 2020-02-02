<?php
# Using Frequently Asked Questions Content from Options menu : /wp-admin/admin.php?page=frequently-asked-questions
$faq_page_id = 'frequently-asked-questions';
?>

<section class="faq-section container container-small padding-top padding-bottom">
    <div class="text-center margin-top margin-bottom">
        <h2 class="section-header color-blue">
            <?php the_field('title', $faq_page_id) ?>
        </h2>
    </div>

    <?php
    if (have_rows('faqs', $faq_page_id)) :
        while (have_rows('faqs', $faq_page_id)) : the_row();
    ?>
            <div class="faq-item">
                <h4 class="faq-question">
                    <?php the_sub_field('question') ?>
                </h4>
                <div class="faq-answer">
                    <?php the_sub_field('answer') ?>
                </div>
            </div>
    <?php endwhile;
    endif;
    ?>

    <div class="text-center mt-5">
        <?php
        $button = get_field('button', $faq_page_id);
        if ($button) :
        ?>
            <a href="<?php echo $button['link'] ?>" class="btn btn-blue"><?php echo $button['label'] ?></a>
        <?php endif; ?>

        <?php
        $secondary_button = get_field('secondary_button', $faq_page_id);
        if ($secondary_button) :
        ?>
            <a href="<?php echo $secondary_button['link'] ?>" class="btn btn-blue-secondary"><?php echo $secondary_button['label'] ?></a>
        <?php endif; ?>
    </div>

</section>