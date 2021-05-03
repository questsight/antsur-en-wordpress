<?php get_header();?>

        <section class="section">
          <div class="section__title"><h1><?php echo single_cat_title(); ?></h1></div>
          <div class="section__content_type_row memories">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="memories__one" style="width: 100%;">
              <h2 class="memories__author"><?php the_title(); ?></h2>
              <div class="memories__date"><?php echo CFS()->get( 'subtitle' ); ?></div><br>
              <div class="memories__preview"><?php the_content();?></div>
            </div>
          <?php endwhile; endif; ?>  
          </div>
        </section>
        
<?php get_footer(); ?>