<footer class="footer bg-gray">
    <div class="container-xxl">
        <div class="d-flex justify-content-md-between justify-content-center flex-column flex-md-row align-items-md-baseline">
            <div class="footer-logo-container">
                <img class="w-100 img-fluid" src="<?php echo get_template_directory_uri() . '/assets/img/Group%2023.png' ?>" alt="">
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