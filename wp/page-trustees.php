<?php
/*
Template Name: Trustees
Template Post Type: page
*/
get_header();?>
        
        <section class="section">
          <div class="section__title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="section__content_type_row trustees">
          <?php
            $fields = CFS()->get( 'trustees' );
            if( ! empty($fields) ):
            foreach ( $fields as $field ){?>   
            <div class="trustees__one">
              <picture>
                <source srcset="<?php echo $field['photo_webp']; ?>" type="image/webp">
                <img class="trustees__img" src="<?php echo $field['photo']; ?>" alt="<?php echo $field['name']; ?>">
              </picture>
              <h2 class="trustees__name"><?php echo $field['name']; ?></h2>
              <div class="trustees__description"><?php echo $field['description']; ?></div>
            </div>
          <?php } endif;?>   
          </div>
        </section>


<?php get_footer(); ?>