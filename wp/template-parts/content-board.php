              <div class="page-sovet__cell_width_50">
                <div class="page-sovet__one">
                  <div class="page-sovet__foto"><?php the_post_thumbnail( array() ); ?></div>
                  <?php $currentlang = get_bloginfo('language');
                    if($currentlang=="en-US"):?>
                      <div class="page-sovet__description"><?php echo get_field('translation'); ?></div>
                    <?php else: ?>
                      <div class="page-sovet__description"><?php the_content(); ?></div>
                  <?php endif; ?>
                </div>
              </div>