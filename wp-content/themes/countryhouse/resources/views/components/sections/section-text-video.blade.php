<section id="<?php //echo $section['section_id'];
              ?>" class="section section-line section-text-video marker-title-h2-lead-in bg-colour-dark  ">

  <div class="content p-t-mobile-section p-b-mobile-section p-t-desktop-section p-b-desktop-section">
    <div class="container-fluid">
      <div class="row justify-content-between">
        <div class="col-lg-8 order-lg-2 p-b-mobile-intro">
          <div class="video-embed">

            <?php the_sub_field('video'); ?>

          </div>
        </div>
        <div class="col-lg-3 order-lg-1 medium text-white ">

          <?php the_sub_field('text') ?>

        </div>

      </div>
    </div>
  </div>
</section>