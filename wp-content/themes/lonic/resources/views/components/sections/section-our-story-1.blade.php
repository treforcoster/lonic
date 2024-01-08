<section id="<?php the_sub_field('anchor'); ?>" class="section  section-our-story-1 padding-top-section padding-bottom-section bg-<?php the_sub_field('background_colour'); ?> text-<?php the_sub_field('text_colour'); ?>

">
  <div class="container-fluid">
    <div class="row justify-content-between padding-bottom-intro align-items-center">
      <div class="col-lg-6">

       

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
      <div class="col-lg-5  p-b-mobile-intro p-b-mobile-intro large">
        <div class="p-b-desktop-intro">
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

    <div class="row justify-content-end align-items-center">
      <div class="col-lg-4 medium text-dark p-b-mobile-intro p-b-mobile-intro medium">
        
          <?php the_sub_field('text') ?>

        
      </div>
      <div class="col-lg-5 offset-1">

       

          <?php $image = get_sub_field('image_2') ?>

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
  </div>
</section>