<section id="<?php //echo $section['section_id'];
              ?>" class="section section-text padding-top-section padding-bottom-section  bg-<?php the_sub_field('background_colour'); ?> text-<?php the_sub_field('text_colour'); ?>

">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-6 medium">

        <?php echo get_sub_field('text'); ?>


      </div>
    </div>
  </div>
</section>