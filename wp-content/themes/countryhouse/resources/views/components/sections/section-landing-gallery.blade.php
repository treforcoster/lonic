<section id="<?php //echo $section['section_id'];
              ?>" class="section section-line section-landing-gallery  ">

  <div class="content p-t-mobile-section p-b-mobile-90px p-t-desktop-section p-b-desktop-section  ">

    <div class="container-fluid">
      <div class="row gx-10">



        <?php $count = 1; ?>

        <?php $images = get_sub_field('gallery'); ?>

        <?php foreach ($images as $image) { ?>




          <div class="col-md-6 col-lg-4">
            <div class="grid-image p-b-mobile-element p-b-desktop-element" lightbox-toggle>
              <img data-full='<?php echo esc_url($image['sizes']['gallery-grid-large']); ?>' src="<?php echo esc_url($image['sizes']['gallery-grid']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" />
            </div>
          </div>

          <?php $count++; ?>

        <?php } ?>



      </div>
    </div>
  </div>
</section>