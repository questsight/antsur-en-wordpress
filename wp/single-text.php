        <section class="section">
          <div class="section__title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="section__content single">
            <picture>
              <source srcset="<?php echo CFS()->get( 'photo_webp' );?>" type="image/webp">
              <img class="single__img" src="<?php echo CFS()->get( 'photo' ); ?>" alt="<?php the_title(); ?>">
            </picture>
            <h2 class="single__title">"<?php if(CFS()->get( 'header' )){echo CFS()->get( 'header' );} else {the_title();} ?>"
              <p class="single__subtitle"><?php echo CFS()->get( 'subtitle' ); ?></p>
            </h2>
            <div class="single__basic"><?php echo CFS()->get( 'preview' );?></div>
            <div class="single__text">
              <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
            </div>
          </div>
        </section>