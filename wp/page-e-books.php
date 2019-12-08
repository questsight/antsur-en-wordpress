<?php
/*
Template Name: E-books
Template Post Type: page
*/
get_header();?>
        
        <section class="section">
          <div class="section__title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="section__content_type_row e-books">
          <?php
            $fields = CFS()->get( 'e_book' );
            if( ! empty($fields) ):
            foreach ( $fields as $field ){?> 
            <div class="e-books__one">
              <div class="e-books__close">&times;</div>
              <h2 class="e-books__name"><?php echo $field['title']; ?></h2>
              <h3 class="e-books__author"><?php echo $field['subtitle']; ?></h3>
              <div class="e-books__preview"><?php echo $field['preview']; ?>
                <div class="e-books__shadow"></div>
              </div>
              <div class="e-books__detailed">Detailed...</div><a class="e-books__link" href="<?php echo $field['link']; ?>" target="_blank">Link</a>
            </div>
          <?php } endif;?> 
          </div>
        </section>

<?php get_footer(); ?>