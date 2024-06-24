<?php $position = get_sub_field('image_position'); ?>
<?php $style = get_sub_field('image_style'); ?>

<?php if ($style == "landscape") {

  $justify = "justify-content-between";
  $size = "image-landscape";
  $field = "image_landscape";
  $imageCol = "col-lg-7";
  $textCol = "col-lg-4";

  if ($position == "right") {

    $order = ' ';
  } else {

    $order = 'reverse';
  }
} else {

  $size = "image-portrait";
  $field = "image_portrait";
  $imageCol = "offset-lg-1 col-lg-5";
  $textCol = "offset-lg-1 col-lg-4";

  if ($position == "right") {

    $order = ' ';
    $justify = " ";
  } else {

    $order = 'reverse';
    $justify = "justify-content-end";
  }
} ?>

<?php if ($position == "right") {

  $order = ' ';
} else {

  $order = 'reverse';
  $justify = 'justify-content-end';
} ?>

<section id="<?php //echo $section['section_id'];
              ?>" class="section  section-text-image image-<?php echo $position; ?> p-t-mobile-section p-t-desktop-section  bg-<?php the_sub_field('background_colour'); ?> text-<?php the_sub_field('text_colour'); ?>

">
  <div class="container-fluid">
    <div class="row <?php echo $justify; ?> <?php echo $order; ?>">
      <div class="<?php echo $textCol; ?> medium text-dark p-b-mobile-intro p-b-mobile-intro">
        <div class="p-b-desktop-intro">
          <?php echo get_sub_field('text') ?>

          @include('components.helpers.cta-link')
        </div>
      </div>
      <div class="<?php echo $imageCol; ?>">

        <div class="<?php echo $size; ?>">

          <?php $image = get_sub_field($field) ?>

          <?php if (!empty($image)) {
            // vars
            $url = $image['url'];
            $alt = $image['alt'];

            $sizedImage = $image['sizes'][$size];


          ?>
            <img src="<?php echo $sizedImage; ?>" alt="<?php echo $alt; ?>">

          <?php } ?>
        </div>

      </div>
    </div>
  </div>
</section>