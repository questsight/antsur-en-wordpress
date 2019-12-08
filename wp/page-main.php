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
        
<?php get_footer(); ?>