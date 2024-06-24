<?php $position = get_sub_field('video_position'); ?>




<?php
  if ($position == "right") {

    $order = ' ';
  
  } else {

    $order = 'reverse';
  
  }
?>



<section id="<?php the_sub_field('anchor'); ?>" class="section  section-text-image image-<?php echo $position; ?> padding-bottom-section padding-top-section  bg-<?php the_sub_field('background_colour'); ?> text-<?php the_sub_field('text_colour'); ?>

">
  <div class="container-fluid">
    <div class="row g-8 justify-content-between <?php echo $order; ?>">
      <div class="col-lg-5 medium text-dark g-10">
        <div class="text-border padding-element">

          <?php echo get_sub_field('text') ?>

          @include('components.helpers.cta-link')
        </div>
      </div>
      <div class="col-lg-7">
        <div class="video-embed">
          <?php the_sub_field('video');?>
        </div>
      </div>
    </div>
  </div>
</section>