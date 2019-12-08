        <section class="section">
          <div class="section__title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="section__content_type_row single">
            <div class="single__box_width_half">
              <div class="single__video">
                <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
              </div>
            </div>
            <div class="single__box_width_half">
              <h2 class="single__title"><?php echo CFS()->get( 'author' ); ?>
                <p class="single__subtitle"><?php echo CFS()->get( 'date' ); ?>.</p>
              </h2>
              <div class="single__basic">
                <?php echo CFS()->get( 'description' ); ?>
              </div>
              <div class="single__text">
                <?php echo CFS()->get( 'detail' ); ?>
              </div>
            </div>
          </div>
        </section>