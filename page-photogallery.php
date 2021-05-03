<?php
/*
Template Name: Photogallery
Template Post Type: page
*/
get_header();?>
         <section class="section">
         <div class="section__title"><h1><?php the_title(); ?></h1></div>
          <div class="section__content_type_row photogallery">
            <?php
            $fields = CFS()->get( 'photos' );
            if( ! empty($fields) ):
            $item=1;
            foreach ( $fields as $field ){?>
            <div class="photogallery__one">
              <picture>
                <source srcset="<?php echo $field['photo_webp']; ?>" type="image/webp">
                <img class="photogallery__img" src="<?php echo $field['photo']; ?>" date="<?php echo $field['date']; ?>" description="<?php echo $field['description']; ?>" item="<?php echo $item; ?>" alt="<?php echo $field['date']; ?> <?php echo $field['description']; ?>">
              </picture>
            </div>
            <?php $item++;} endif;?> 
            <div class="photogallery__full hidden">
              <div class="photogallery__box">
                <div class="photogallery__close">&times;</div>
                <div class="photogallery__arrow-left" id="arrow-left">&laquo;</div>
                <div class="photogallery__arrow-right" id="arrow-right">&raquo;</div><img id="photo-full" src="">
                <h2 id="date-full"></h2>
                <p id="description-full"></p>
              </div>
            </div>
          </div>
        </section>

<?php get_footer(); ?>