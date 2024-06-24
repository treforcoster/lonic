<section id="<?php the_sub_field('anchor'); ?>" class="section section-text-title large padding-top-section padding-bottom-section bg-<?php the_sub_field('background_colour'); ?> text-<?php the_sub_field('text_colour'); ?>

">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-lg-4 text-dark ">
        <h3> <?php the_sub_field('title'); ?></h3>
      </div>
      <div class="col-lg-7 text-dark ">

        <?php echo get_sub_field('text'); ?>


      </div>

    </div>
  </div>
</section>