<?php $position = get_sub_field('video_position'); ?>




<?php
  if ($position == "right") {

    $order = ' ';
    $justify = " ";
  } else {

    $order = 'reverse';
    $justify = "justify-content-end";
  }
?>



<section id="<?php the_sub_field('anchor'); ?>" class="section  section-text-image image-<?php echo $position; ?> padding-bottom-section padding-top-section  bg-<?php the_sub_field('background_colour'); ?> text-<?php the_sub_field('text_colour'); ?>

">
  <div class="container-fluid">
    <div class="row <?php echo $justify; ?> <?php echo $order; ?>">
      <div class="col-lg-5 medium text-dark ">
        <div class="text-border padding-element">

          <?php the_sub_field('text') ?>

          @include('components.helpers.cta-link')
        </div>
      </div>
      <div class="col-lg-7">

       Video

      </div>
    </div>
  </div>
</section>