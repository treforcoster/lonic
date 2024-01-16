<?php $position = get_sub_field('image_position'); ?>


<?php 

  $justify = "justify-content-between";
  $size = "image-landscape";
 
  $imageCol = "col-lg-6";
  $textCol = "col-lg-6";

  if ($position == "right") {

    $order = ' ';
  } else {

    $order = 'reverse';
  }
?>



<section id="<?php //echo $section['section_id'];
              ?>" class="section  section-blog-text-image image-<?php echo $position; ?> padding-top-section padding-bottom-section  bg-<?php the_sub_field('background_colour'); ?> text-<?php the_sub_field('text_colour'); ?>

">
  <div class="container-fluid">
    <div class="row <?php echo $justify; ?> <?php echo $order; ?> g-10">
      <div class="<?php echo $textCol; ?> medium text-dark p-b-mobile-intro p-b-mobile-intro">
        <div class="p-b-desktop-intro">
          <?php the_sub_field('text') ?>

          @include('components.helpers.cta-link')
        </div>
      </div>
      <div class="<?php echo $imageCol; ?>">

        <div class="<?php echo $size; ?>">

          <?php $image = get_sub_field('image') ?>

          <?php if (!empty($image)) {
            // vars
            $url = $image['url'];
            $alt = $image['alt'];

            $sizedImage = $image['sizes'][$size];


          ?>
            <img class="rounded-image"src="<?php echo $sizedImage; ?>" alt="<?php echo $alt; ?>">

          <?php } ?>
        </div>

      </div>
    </div>
  </div>
</section>