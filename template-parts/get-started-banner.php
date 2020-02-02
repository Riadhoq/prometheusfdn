<?php
# Using Get Started banner Content from Options menu
$get_stared_banner_page_id = 'get-started-banner';
?>
<section class="get-started bg-blue margin-top">
    <div class="container-fluid px-0">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <img class="img-fluid h-100 w-100" src="<?php the_field('image', $get_stared_banner_page_id) ?>" alt="Women in discussing in front of laptop">
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <div class="px-3 pl-5">
                    <span class="top-dash margin-top"></span>
                    <h2 class="banner-header color-white">
                        <?php the_field('title', $get_stared_banner_page_id) ?>
                    </h2>
                    <p class="sub color-white">
                        <?php the_field('subtitle', $get_stared_banner_page_id) ?>
                    </p>
                    <div class="d-lg-flex text-center margin-top margin-bottom">
                        <?php
                        $button = get_field('button', $get_stared_banner_page_id);
                        if ($button) :
                        ?>
                            <a href="<?php echo $button['link'] ?>" class="btn flex-lg-fill"><?php echo $button['label'] ?></a>
                        <?php endif; ?>

                        <?php
                        $secondary_button = get_field('secondary_button', $get_stared_banner_page_id);
                        if ($secondary_button) :
                        ?>
                            <a href="<?php echo $secondary_button['link'] ?>" class="btn secondary flex-lg-fill"><?php echo $secondary_button['label'] ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>