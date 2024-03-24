<section class="section-carousel section p-t-mobile-section section  p-b-mobile-90px padding-top-element padding-bottom-element bg-colour-light ">
    <div class="section-wrapper p-b-mobile-element ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 carousel-column ">

                    <div class="swiper-container section-swiper">
                        <div class="swiper-wrapper">

                            <?php $count = 1; ?>

                            <?php if (have_rows('slides')) :
                                while (have_rows('slides')) :
                                the_row(); ?>

                            <div class="swiper-slide text-white">
                                <?php $image = get_sub_field('image'); ?>

                                <div id="s<?php echo $count; ?>" class="slide">

                                    <?php if ($image) :
                                            $url = $image['url'];
                                            $title = $image['title'];
                                            $alt = $image['alt'];
                                            $caption = $image['caption'];
                                            $size = 'image-carousel';
                                            $thumb = $image['sizes'][$size]; ?>
                                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
                                    <?php endif; ?>

                                    <div class='slide-content medium'>
                                        <div class="inner">
                                            <h3 class="title"><?php the_sub_field('title'); ?></h3>
                                            <div class="text"><?php the_sub_field('text'); ?></div>
                                        </div>
                                    </div>
                                </div>
                                <?php $count++; ?>
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
