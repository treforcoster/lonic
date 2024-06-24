<section id="<?php //echo $section['section_id'];
              ?>" class="section section-line section-property-carousel marker-title-h2 bg-colour-light  ">

  <?php $background = get_sub_field('background'); ?>
  <div class="background" style="background-image:url('<?php echo $background; ?>');"></div>
  <div class="content p-t-mobile-section p-b-mobile-90px p-t-desktop-section p-b-desktop-section">
    <div class="property-wrapper p-b-mobile-element">
      <div class="container-fluid">
        <div class="row ">
          <div class="col-8 col-lg-6 medium text-dark p-b-mobile-element">

            <?php echo get_sub_field('text') ?>

          </div>
          <div class="col-lg-6 medium text-dark text-right">
            <div class="navigation-wrapper">

              <div class="pagination"></div>

              <div class='navigation'>
                @include('components.components.component-carousel-navigation')
              </div>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-12 p-t-desktop-element">
            <?php
            $slides = get_sub_field('properties');
            if ($slides) : ?>



              <div class="swiper-container property-swiper">
                <div class="swiper-wrapper">

                  <?php foreach ($slides as $post) :

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>

                    <div class="swiper-slide text-dark medium">
                      <a class="inner" href="<?php the_permalink($post->ID); ?>">

                        <div class="featured-image">

                          <?php echo get_the_post_thumbnail($post->ID, 'featured-image'); ?>

                          <?php $terms = get_the_terms($post->ID, 'location'); ?>

                        </div>
                        <div class='info p-t-mobile-element-half  p-t-desktop-element-half'>
                          <div class='row'>

                            <div class='col-7 col-md-8'>

                              <div class="location lead-in-heading"><?php echo $terms[0]->name; ?></div>
                              <h3><?php echo get_the_title($post->ID); ?></h3>

                            </div>

                            <div class='col-5 col-md-4 text-right'>

                              <!-- -->


                              <?php $price = get_field('price', $post->ID); ?>
                              <?php if ($price) { ?>
                                <div class="card-price alt">

                                  <?php if ($price == "POA") { ?>

                                    <?php echo 'POA'; ?>

                                  <?php } else { ?>

                                    <?php $price = number_format((float)$price);
                                    echo '£' . $price; ?>

                                  <?php } ?>

                                </div>

                              <?php } ?>

                              <?php $status = get_field('status', $post->ID); ?>

                              <?php $date1 = get_the_date("Y-m-d", $post->ID);
                              $date2 = date("Y-m-d");
                              $diff = abs(strtotime($date2) - strtotime($date1));
                              $years = floor($diff / (365 * 60 * 60 * 24));
                              $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                              $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
                              $totalTime = ($years * 12) + $months;
                              ?>
                              <!-- <?php echo $date1; ?><br>
      <?php echo $date2; ?><br>
      <?php echo $diff; ?><br>
      <?php echo $totalTime; ?><br> -->

                              <div class="tags end">
                                <?php if ($totalTime < 1 && $status == 'For Sale') { ?>
                                  <div class='tag red'>New</div>
                                <?php } elseif ($status != 'For Sale') { ?>
                                  <?php if ($status == 'Under Offer') { ?>
                                    <div class='tag'><?php echo $status; ?></div>
                                  <?php } ?>
                                  <?php if ($status == 'Sold') { ?>
                                    <div class='tag'><?php echo $status; ?></div>
                                  <?php } ?>
                                <?php } ?>
                              </div>


                              <!-- -->


                            </div>

                          </div>

                        </div>

                      </a>
                    </div>

                  <?php endforeach; ?>


                </div>


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