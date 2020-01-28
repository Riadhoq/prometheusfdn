</main>
<footer class="footer bg-gray">
    <div class="container-xxl">
        <div class="d-flex justify-content-md-between justify-content-center flex-column flex-md-row align-items-md-baseline">
            <div class="footer-logo-container">
                <?php if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $custom_logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
                    echo '<img class="w-100 img-fluid" src="' . esc_url($custom_logo_url) . '" alt="">';
                }
                ?>
            </div>
            <?php wp_nav_menu(
                array(
                    'menu' => 'secondary',
                    'container' => 'ul',
                    'items_wrap' => '<ul class="footer-links d-md-flex justify-content-center align-items-md-baseline flex-wrap text-center margin-bottom">%3$s</ul>',
                    'add_li_class'  => 'footer-link',
                    'show_active' => false
                )
            ); ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>