<?php
/*
Template Name: Contacts
Template Post Type: page
*/
get_header();?>
        
        <section class="section">
          <div class="section__title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="section__content_type_row contacts">
            <div class="section__half">
              <div class="contacts__box">
              <?php
                $fields = CFS()->get( 'contact' );
                if( ! empty($fields) ):
                foreach ( $fields as $field ){?>
                <h2 class="contacts__subtitle"><?php echo $field['header']; ?><span> </span><span class="contacts__text"><?php echo $field['сontact_details']; ?></span></h2>
              <?php } endif;?>   
              </div>
            </div>
            <div class="section__half">
              <div class="form">
              <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
              </div>
            </div>
          </div>
        </section>

<?php get_footer(); ?>