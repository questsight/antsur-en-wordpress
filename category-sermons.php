<?php get_header();?>

        <section class="section">
          <div class="section__title"><h1><?php echo single_cat_title(); ?></h1></div>
          <div class="section__content_type_row memories">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a class="memories__one" href="<?php echo get_permalink(); ?>">
                <?php if(CFS()->get( 'photo' )): ?>
              <picture>
                <source srcset="<?php echo CFS()->get( 'photo_webp' );?>" type="image/webp">
                <img class="memories__img" src="<?php echo CFS()->get( 'photo' ); ?>" alt="<?php the_title(); ?>">
              </picture>
                <?php endif; ?>
              <h2 class="memories__author"><?php the_title(); ?></h2>
              <h3 class="memories__name"><?php echo CFS()->get( 'header' ); ?></h3>
              <div class="memories__date"><?php echo CFS()->get( 'subtitle' ); ?></div>
              <div class="memories__preview"><?php if(CFS()->get( 'preview' )){echo CFS()->get( 'preview' );}else{the_excerpt();} ?></div>
            </a>
          <?php endwhile; endif; ?>  
          </div>
        </section>
        
<?php get_footer(); ?>