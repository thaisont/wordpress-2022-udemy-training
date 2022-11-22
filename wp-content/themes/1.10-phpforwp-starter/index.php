 <?php get_header(); ?>

  <div id="content">

<!-- Add any template tags outside of loop -->

    <?php  the_category()  ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <!-- Add any post template tags inside of loop -->


      <article <?php post_class(); ?>>

         <h2><?php the_author(); ?></h2>
      <?php the_content(); ?>

      <footer>
        <p class="byline">
        Author:
        <a href=" <?php echo get_author_posts_url( $post->post_author ); ?>">
        <?php the_author(); ?>
      </a> |
      Date: 
      <?php the_time("M. j. Y"); ?> |
      Cateogires:
      <?php the_category( ", "); ?> |
      Tags:
      <?php the_tags("", ",", ""); ?>
        </p>
      </footer>

      </article>

   

    <?php endwhile; else: ?>

      <h2><?php esc_html_e( '404 Error', 'phpforwp' ); ?></h2>
      <p><?php esc_html_e( 'Sorry, content not found.', 'phpforwp' ); ?></p>

    <?php endif; ?>

<!-- Add any template tags outside of loop -->

  </div>

<?php get_footer(); ?>
