<section id="<?php the_sub_field('anchor'); ?>" class="section section-text-stats padding-top-section padding-bottom-intro bg-<?php the_sub_field('background_colour'); ?> text-<?php the_sub_field('text_colour'); ?> ">


  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 large text-light padding-bottom-section text-center">

          <?php echo get_sub_field('text') ?>

        </div>
        <div class="col-lg-12">
          <div class="row align-items-center justify-content-center padding-bottom-element">

            <?php $count = 0; ?>

            <?php if (have_rows('stats')) : ?>
              <?php while (have_rows('stats')) : the_row();

              ?>
                <div class="col large text-center text-light padding-bottom-element">
                  <div class='s-<?php echo $count; ?> stat padding-top-intro padding-bottom-intro'>

                    <h3 class="number"><?php the_sub_field('number'); ?></h3>
                    <p class="h3"><?php echo get_sub_field('text'); ?></p>
                  </div>
                </div>

                <?php $count++; ?>
              <?php endwhile; ?>

            <?php endif; ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>