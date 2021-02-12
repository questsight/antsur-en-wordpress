<?php
/*
Template Name: Main page
Template Post Type: page
*/
get_header();?>

        <section class="main" id="main">
          <div class="main__two">
            <hi class="main__title"><?php echo get_bloginfo('name'); ?> <br><?php echo get_bloginfo('description'); ?></hi>
          </div>
          <div class="main__one">
            <div class="animation-box">
              <div class="animation-right">
               <?php
                $fields = CFS()->get( 'photos' );
                if( ! empty($fields) ):
                  foreach ( $fields as $field ){?>
                  <picture>
                    <source srcset="<?php echo $field['photo_webp']; ?>" type="image/webp">
                    <img class="main__img" src="<?php echo $field['photo']; ?>" alt="<?php echo get_bloginfo('name'); ?> <?php echo get_bloginfo('description'); ?>">
                  </picture>
                  <?php } endif;?>
              </div>
            </div>
          </div>
        </section>
        <?php	
      query_posts('cat=8&showposts=1');
      while (have_posts()) : the_post();?>
        <section class="section event">
          <div class="section__title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="section__content single">
            <h2 class="event__title"><?php echo CFS()->get( 'header' ); ?></h2>
            <p class="event__subtitle"><?php echo CFS()->get( 'subtitle' ); ?></p>
            <p class="event__subtitle"><?php echo CFS()->get( 'title_1' ); ?></p>
            <div class="single__text"><?php echo CFS()->get( 'text_1' ); ?></div>
            <div class="event__box">
              <picture>
                <source srcset="<?php echo CFS()->get( 'photo_webp' );?>" type="image/webp">
                <img src="<?php echo CFS()->get( 'photo' ); ?>" alt="<?php the_title(); ?>">
              </picture>
              <div><?php echo CFS()->get( 'quote' ); ?></div>
            </div>
            <h2 class="event__title"><?php echo CFS()->get( 'title_2' ); ?></h2>
            <div class="event__speakers">
              <div><?php echo CFS()->get( 'text_2' ); ?></div>
            </div>
            <h2 class="event__title"><?php echo CFS()->get( 'title_3' ); ?></h2>
            <div class="single__text"><?php echo CFS()->get( 'text_3' ); ?></div>
          </div>
        </section>
        <?php
	    endwhile;
 	    wp_reset_query();
	  ?>
<?php get_footer(); ?>