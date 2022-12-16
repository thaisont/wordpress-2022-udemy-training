<?php get_header(); ?>

<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

        <div class="author-bio">
            <h1><?php single_term_title('') ?></h1>
        </div>

        <?php if (have_posts()) : while (have_posts()) : the_post();  ?>



                <?php get_template_part("templates-parts/content-post", get_post_format()); ?>

            <?php endwhile;
        else : ?>

            <?php get_template_part("templates-parts/content", "none"); ?>

        <?php endif; ?>


        <p>Template: archive.php</p>

    </main>


</div>

<?php get_sidebar() ?>


<?php get_footer(); ?>