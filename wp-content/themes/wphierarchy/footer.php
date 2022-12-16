</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

    <div id='site-navigation' class='main-navigation' role='navigation'>
        <?php

        $args = [
            'theme_location' => 'main-menu',
            // Assign a default menu to location
            'menu' => 'Main Menu',
        ];

        wp_nav_menu($args) ?>

    </div>


    <a href="<?php echo esc_url(__('https://wordpress.org/', 'wphierarchy')); ?>">
        <?php printf(esc_html__('Proudly powered by %s', 'wphierarchy'), 'WordPress'); ?>
    </a>





</footer>

<?php get_sidebar('footer') ?>

</div><!-- #page -->


<?php wp_footer(); ?>


</body>

</html>