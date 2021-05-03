<?php get_header(); ?>

<?php
if(in_category(5) || in_category(7) || in_category(10) || in_category(11) || in_category(12) || in_category(13)) {
include 'single-text.php';
} else if(in_category(6) || in_category(14)) {
include 'single-video.php';
} else if(in_category(8)) {
include 'single-event.php';
} else {?>
        <section class="section">
          <div class="section__title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="section__content single">
            <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
          </div>
        </section>
<?php } ?>
        
<?php get_footer(); ?>