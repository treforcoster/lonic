<?php $position = get_sub_field('image_position'); ?>
<?php $style = get_sub_field('image_style'); ?>

<?php if ($style == "landscape") {

  $justify = "align-items-center justify-content-between";
  $size = "image-landscape";
  $field = "image_landscape";
   $imageCol = "col-lg-6";
  $textCol = "col-lg-5";

  if ($position == "right") {

    $order = ' ';
  } else {

    $order = 'reverse';
  }
} else {
 $justify = "align-items-center justify-content-between";
  $size = "image-portrait";
  $field = "image_portrait";
  $imageCol = " col-lg-6";
  $textCol = " col-lg-5";

  if ($position == "right") {

    $order = ' ';
   
  } else {

    $order = 'reverse';
   
  }
} ?>

<?php if ($position == "right") {

  $order = ' ';
} else {

  $order = 'reverse';

} ?>

<section id="<?php //echo $section['section_id'];
              ?>" class="section  section-text-image image-<?php echo $position; ?> padding-top-section padding-bottom-section  bg-<?php the_sub_field('background_colour'); ?> text-<?php the_sub_field('text_colour'); ?>

">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row  <?php echo $justify; ?> <?php echo $order; ?>">
                    <div class="<?php echo $textCol; ?>">
                        <div class="medium h2-small-underline mobile-padding-bottom-element">
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
                            <img class="rounded-image" src="<?php echo $sizedImage; ?>" alt="<?php echo $alt; ?>">

                            <?php } ?>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
