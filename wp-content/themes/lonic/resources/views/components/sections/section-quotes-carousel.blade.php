<section id="<?php //echo $section['section_id'];
              ?>" class="section section-line marker-line section-quotes-carousel bg-colour-dark  text-light ">

  <?php $background = get_sub_field('background'); ?>
  <div class="background" style="background-image:url('<?php echo $background; ?>');"></div>
  <div class="content p-t-mobile-section p-b-mobile-section p-t-desktop-section p-b-desktop-section">
    <div class="container-fluid">
      <div class="row ">
        <?php echo get_sub_field('text') ?>

        <div class="col-12">
          <?php
          $slides = get_sub_field('quotes');
          if ($slides) : ?>

            <div class="quote-wrapper">

              <div class="swiper-container quote-swiper">
                <div class="swiper-wrapper">

                  <?php foreach ($slides as $post) :

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>

                    <div class="swiper-slide text-light large">
                      <div class="inner bg-colour-primary-alt p-mobile-intro p-desktop-section ">
                        <blockquote>
                          <?php the_field('quote', $post->ID); ?>

                          <cite>&mdash;&nbsp;&nbsp;<?php echo get_the_title($post->ID); ?></cite>
                        </blockquote>

                      </div>
                    </div>

                  <?php endforeach; ?>


                </div>

                <div class="swiper-pagination"></div>
              </div>
            </div>
            <?php
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>