<?php get_header();?>
        
        <section class="section">
          <div class="section__title">
            <h1><?php echo single_cat_title(); ?></h1>
          </div>
          <div class="section__content_type_row videos">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a class="videos__one" href="<?php echo get_permalink(); ?>">
              <div class="videos__play"></div>
              <img class="videos__img" src="https://img.youtube.com/vi/<?php echo CFS()->get( 'code' ); ?>/mqdefault.jpg" alt="<?php the_title(); ?>">
              <h2 class="videos__title"><?php the_title(); ?></h2>
            </a>
          <?php endwhile; endif; ?>  
          </div>
        </section>
        
<?php get_footer(); ?>