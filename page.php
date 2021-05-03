<?php get_header();?>

        <section class="section">
          <div class="section__title"><h1><?php the_title(); ?></h1></div>
          <div class="section__content section__text">
            <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
          </div>
        </section>
        
<?php get_footer(); ?>