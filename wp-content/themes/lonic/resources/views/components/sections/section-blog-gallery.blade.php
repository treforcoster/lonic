
  <section id="<?php //echo $section['section_id'];
                ?>" class="section section-blog-gallery padding-top-section padding-bottom-section bg-<?php the_sub_field('background_colour'); ?> text-<?php the_sub_field('text_colour'); ?>">
    <div class="container-fluid">
      <div class="row justify-content-center">

        <div class="col-lg-8">
    <?php
    $images = get_sub_field('gallery');
    if ($images) :
      $count = count($images);
      if ($count > 1) { ?>

<div class="gallery-wrapper">
          <div class="swiper-container blog-gallery">
            <div class="swiper-wrapper">
              <?php foreach ($images as $image) : ?>

                <?php $imgmeta = wp_get_attachment_metadata($image['ID']); ?>

                <div class="swiper-slide">

                  <div class="image">
                    <img src="<?php echo esc_url($image['sizes']['gallery-image']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                  </div>

                </div>
              <?php endforeach; ?>
            </div>

            {{-- @include('components.components.component-carousel-navigation-gallery') --}}

           
          </div>
        </div>
      <?php } else { ?>
        <div class="gallery-single-image">
          <?php foreach ($images as $image) : ?>
          
          
              <div class="image">
                <img src="<?php echo esc_url($image['sizes']['gallery-image']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              </div>

          
          <?php endforeach; ?>
        </div>
      <?php } ?>
    <?php endif; ?>
  </div> 
</div> 
</div>
  </section>
