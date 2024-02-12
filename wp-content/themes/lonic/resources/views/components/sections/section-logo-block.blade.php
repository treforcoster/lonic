<section id="<?php the_sub_field('anchor'); ?>" class="section section-logo-block marker-title-h2 bg-colour-dark  ">

  <?php $background = get_sub_field('background'); ?>
  <div class="background" style="background-image:url('<?php echo $background; ?>');"></div>
  <div class="content p-t-mobile-section p-b-mobile-section p-t-desktop-section p-b-desktop-section">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-4 medium text-light p-b-mobile-section p-b-desktop-element">

          <?php the_sub_field('text') ?>

        </div>
      </div>
      <div class="row justify-content-center align-items-center">

        <?php

        $images = get_sub_field('logos');
        if ($images) : ?>
          <?php $count = 0; ?>
          <?php foreach ($images as $image) : ?>

            <div class="col-10 col-lg-3 p-b-mobile-element">
              <div class='l-<?php echo $count; ?> logo '>


                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              </div>
            </div>

            <?php $count++; ?>
          <?php endforeach; ?>

        <?php endif; ?>


      </div>
    </div>
  </div>
  </div>
</section>