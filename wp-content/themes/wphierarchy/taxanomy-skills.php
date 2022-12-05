<?php get_header(); ?>

<div id="primary" class="content-area extended">

    <main id="main" class="site-main" role="main">

        <div class="author-bio">
            <h1><?php the_archive_title('') ?></h1>
        </div>

        <?php if (have_posts()) : while (have_posts()) : the_post();  ?>

                <?php get_template_part("templates-parts/content", "portfolio"); ?>

            <?php endwhile;
        else : ?>

            <?php get_template_part("templates-parts/content", "none"); ?>

        <?php endif; ?>

        <?php echo paginate_links(); ?>


        <p>Template: taxonomy-skills.php</p>

    </main>


</div>


<?php get_footer(); ?>