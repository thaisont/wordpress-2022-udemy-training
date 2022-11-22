<?php get_header(); ?>

<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

        <h1><?php the_archive_title('') ?></h1>


        <?php if (have_posts()) : while (have_posts()) : the_post();  ?>

                <p><?php echo category_description(); ?></p>

                <hr>

                <?php get_template_part("templates-parts/content-post", get_post_format()); ?>

            <?php endwhile;
        else : ?>

            <?php get_template_part("templates-parts/content", "none"); ?>

        <?php endif; ?>


        <p>Template: category.php</p>

    </main>


</div>

<?php get_sidebar() ?>


<?php get_footer(); ?>