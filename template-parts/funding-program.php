<?php
# Using Funding Program Content from Options menu
$funding_program_page_id = 'funding-program';
$funding_program_first_card = get_field('funding_program_first_card', $funding_program_page_id);
$funding_program_second_card = get_field('funding_program_second_card', $funding_program_page_id);
$funding_program_third_card = get_field('funding_program_third_card', $funding_program_page_id);
$funding_program_primary_btn = get_field('funding_program_primary_btn', $funding_program_page_id);
$funding_program_secondary_btn = get_field('funding_program_secondary_btn', $funding_program_page_id);

?>
<section class="funding-program margin-top">
    <div class="container-xxl">
        <div class="text-center">
            <h2 class="section-header color-blue">
                <?php
                the_field('funding_title', $funding_program_page_id) ?>
            </h2>
            <p class="sub color-gray margin-top-half">
                <?php
                the_field('funding_subtitle', $funding_program_page_id) ?>
            </p>
        </div>
        <div class="row margin-top">
            <?php if ($funding_program_first_card) : ?>
                <div class="col-md-4">
                    <div class="square-card bg-light-orange">
                        <h3 class="card-header">
                            <?php echo $funding_program_first_card['title'] ?>
                        </h3>
                        <p>
                            <?php echo $funding_program_first_card['text'] ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($funding_program_second_card) : ?>
                <div class="col-md-4">
                    <div class="square-card bg-light-yellow">
                        <h3 class="card-header">
                            <?php echo $funding_program_second_card['title'] ?>
                        </h3>
                        <p>
                            <?php echo $funding_program_second_card['text'] ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($funding_program_third_card) : ?>
                <div class="col-md-4">
                    <div class="square-card bg-light-blue">
                        <h3 class="card-header">
                            <?php echo $funding_program_third_card['title'] ?>
                        </h3>
                        <p>
                            <?php echo $funding_program_third_card['text'] ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>

        </div>
        <div class="text-center mt-4 margin-bottom">
            <?php if ($funding_program_primary_btn) : ?>
                <a href="<?php echo $funding_program_primary_btn['link'] ?>" class="btn btn-blue"><?php echo $funding_program_primary_btn['label'] ?></a>
            <?php endif; ?>
            <?php if ($funding_program_secondary_btn) : ?>
                <a href="<?php echo $funding_program_secondary_btn['link'] ?>" class="btn btn-blue-secondary"><?php echo $funding_program_secondary_btn['label'] ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>