<?php get_header();?>
         
          <section class="section">
          <div class="section__title">
            <h1><?php echo single_cat_title(); ?></h1>
          </div>
          <div class="section__content_type_row books">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a class="books__one" href="<?php echo get_permalink(); ?>">
              <div class="books__img">
                <picture>
                  <source srcset="<?php echo CFS()->get( 'photo_webp' );?>" type="image/webp">
                  <img src="<?php echo CFS()->get( 'photo' ); ?>" alt="<?php the_title(); ?>">
                </picture>
              </div>
              <h2 class="books__name"><?php the_title(); ?></h2>
              <h3 class="books__author"><?php echo CFS()->get( 'subtitle' ); ?></h3>
            </a>
           <?php endwhile; endif; ?>
          </div>
        </section>
        
<?php get_footer(); ?>