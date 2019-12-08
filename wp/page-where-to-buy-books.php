<?php
/*
Template Name: Where to buy books
Template Post Type: page
*/
get_header();?>

        <section class="section">
          <div class="section__title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="section__content_type_row buy-books">
            <div class="section__half">
              <div class="buy-books__box">
                <ol class="buy-books__ol">
                <?php
                  $fields = CFS()->get( 'bookstores' );
                  if( ! empty($fields) ):
                  foreach ( $fields as $field ){?>
                  <li class="buy-books__li">
                    <h2 class="buy-books__subtitle">. <?php echo $field['subtitle']; ?></h2>
                    <div class="buy-books__contacts">
                      <?php echo $field['contacts']; ?>
                    </div>
                  </li>
                <?php } endif;?> 
                </ol>
              </div>
            </div>
            <div class="section__half">
              <div class="buy-books__map">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=13kn-SliLnCiTlyuyUhu3lv6WUgp4BKxV"></iframe>
              </div>
            </div>
          </div>
        </section>
        
<?php get_footer(); ?>