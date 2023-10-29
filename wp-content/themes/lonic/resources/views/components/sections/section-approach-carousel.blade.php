<section class="section-approach-carousel section p-t-mobile-section  section  p-b-mobile-90px p-t-desktop-section p-b-desktop-section bg-colour-dark ">

  <div class="approach-wrapper p-b-mobile-element ">
    <div class="container-fluid">
      <div class="row items-center">
        <div class="col-lg-5 medium text-light p-b-mobile-element p-b-desktop-element">
          <?php the_sub_field('text'); ?>
        </div>
        <div class="col-7 medium text-dark text-right">
          <div class="navigation-wrapper">

            <div class="pagination"></div>

            <div class='navigation'>
              @include('components.components.component-carousel-navigation')
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-lg-12 carousel-column ">

            <div class="swiper-container approach-swiper">
              <div class="swiper-wrapper">

                <?php $count = 1; ?>

                <?php if (have_rows('slides')) :
                  while (have_rows('slides')) :
                    the_row(); ?>

                    <div class="swiper-slide">

                      <?php if ($count == 1) {
                        $class = "bg-colour-white text-dark";
                      } else {
                        $class = "bg-colour-white text-dark";
                      } ?>

                      <div class="card-approach medium <?php echo $class; ?> padding-element">

                        <div class="slide-number serif">
                          <?php echo $count; ?>.
                        </div>

                        <div class="info">

                          <div class="lead-in-heading"><?php the_sub_field('lead-in'); ?></div>

                          <h3><?php the_sub_field('title'); ?></h3>

                          <?php the_sub_field('text'); ?>

                        </div>
                      </div>
                    </div>

                    <?php $count++; ?>

                <?php endwhile;
                endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>