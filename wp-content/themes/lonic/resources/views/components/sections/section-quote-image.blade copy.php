<?php $position = get_sub_field('image_position'); ?>


<?php 

  $size = "image-portrait";
  $field = "image_portrait";
  $imageCol = "col-lg-5";
  $textCol = "col-lg-6";

 ?>

<?php if ($position == "right") {
    echo "right";
  $order = ' ';
} else {
 echo "left";
  $order = 'lg-reverse';
  $justify = 'justify-content-end';
} ?>

<section id="<?php //echo $section['section_id'];
              ?>" class="section  section-quote-image image-<?php echo $position; ?> padding-top-section padding-bottom-section  bg-<?php the_sub_field('background_colour'); ?> text-<?php the_sub_field('text_colour'); ?>

">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="row align-items-center <?php echo $justify; ?> ">




                    <div class="<?php echo $imageCol; ?>  mobile-padding-bottom-element">

                        <div class="<?php echo $size; ?>">

                            <?php $image = get_sub_field('image') ?>

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

                    <div class="<?php echo $textCol; ?>">
                        <div class="text-wrapper large bg-<?php the_sub_field('background_colour'); ?>">

                            <?php echo get_sub_field('text') ?>
                            <cite>
                                <?php echo get_sub_field('cite') ?>
                            </cite>

                        </div>
                    </div>


                </div>

            </div>
        </div>

    </div>
</section>
