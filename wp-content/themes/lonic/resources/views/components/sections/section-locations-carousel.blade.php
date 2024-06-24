<section id="<?php //echo $section['section_id'];
              ?>" class="section section-line section-locations-carousel marker-title-h2-lead-in bg-colour-light  ">
    <?php $background = get_sub_field('background'); ?>
    <div class="background" style="background-image:url('<?php echo $background; ?>');"></div>
    <div class="content p-t-mobile-section  p-b-mobile-90px  p-t-desktop-section p-b-desktop-section">
        <div class="locations-wrapper">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4 medium text-dark p-b-mobile-element">
                        <?php echo get_sub_field('text') ?>
                    </div>
                    <div class="col-lg-8 medium text-dark text-right">

                        <div class="navigation-wrapper">
                            <div class="pagination"></div>

                            <div class='navigation'>
                                @include('components.components.component-carousel-navigation')
                            </div>
                        </div>


                    </div>
                </div>
                <div class="row p-t-desktop-section p-b-mobile-element">

                    <div class="swiper-container locations-swiper">
                        <div class="swiper-wrapper">

                            <?php $count = 1; ?>

                            <?php if (have_rows('slides')) :
                while (have_rows('slides')) :
                  the_row(); ?>

                            <?php $image = get_sub_field('image'); ?>

                            <div class="swiper-slide">
                                <div class="inner">
                                    <div class="image">

                                        <?php if ($image) :
                          $url = $image['url'];
                          $title = $image['title'];
                          $alt = $image['alt'];
                          $caption = $image['caption'];
                          $size = 'landscape-image';
                          $thumb = $image['sizes'][$size]; ?>
                                        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="text text-black medium">
                                        <h3><?php echo get_sub_field('title') ?></h3>
                                        <?php echo get_sub_field('text') ?>
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
    </div>
</section>