<section id="<?php the_sub_field('anchor'); ?>" class="section  section-our-story-1 padding-top-section padding-bottom-section bg-<?php the_sub_field('background_colour'); ?> text-<?php the_sub_field('text_colour'); ?>

">
  <div class="container-fluid">
    <div class="row justify-content-between align-items-center  padding-bottom-section">
      <div class="col-lg-3 medium">
          <?php echo get_sub_field('text') ?>
      </div>
      <div class="col-lg-8">

          <?php $image = get_sub_field('image_1') ?>

          <?php if (!empty($image)) {
            // vars
            $url = $image['url'];
            $alt = $image['alt'];

            $sizedImage = $image['sizes']['image-landscape'];


          ?>
            <img class="rounded-image" src="<?php echo $sizedImage; ?>" alt="<?php echo $alt; ?>">

          <?php } ?>

      </div>
    
    </div>
    <div class="row justify-content-end align-items-center">
    
      <div class="col-lg-8 large">
       
          <?php $quote = get_sub_field('quote');
          if( $quote ): ?>
          <blockquote>
            <?php echo $quote['quote']; ?>

            <cite>
            <?php echo $quote['author']; ?>
            </cite>
          </blockquote>
          <?php endif; ?>

       
      </div>
    </div>
  </div>
</section>