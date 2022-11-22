<?php get_header(); ?>

<div id="primary" class="content-area extended">

    <main id="main" class="site-main" role="main">

        <h1><?php the_archive_title('') ?>
            <?php esc_html_e(' Posts Only!', 'wphierarchy'); ?>
        </h1>


        <?php if (have_posts()) : while (have_posts()) : the_post();  ?>

                <p><?php echo category_description(); ?></p>

                <hr>

                <?php get_template_part("templates-parts/content-post", get_post_format()); ?>

            <?php endwhile;
        else : ?>

            <?php get_template_part("templates-parts/content", "none"); ?>

        <?php endif; ?>


        <p>Template: category-7.php</p>

    </main>


</div>


<?php get_footer(); ?>