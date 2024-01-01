<section id="<?php the_sub_field('anchor'); ?>" class="section section-clients-carousel large padding-top-section padding-bottom-section bg-<?php the_sub_field('background_colour'); ?> text-<?php the_sub_field('text_colour'); ?>

  ">
    <div class="container-fluid">

      <?php 
      $row1 = get_sub_field('row_1');
      $row2 = get_sub_field('row_2');

      
      $size = 'full'; // (thumbnail, medium, large, full or custom size)

      
      if( $row1 ): ?>
          <div class="row-1">
              <?php foreach( $row1 as $image ): ?>
               
                    <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                 
              <?php endforeach; ?>
          </div>
      <?php endif;


      if( $row2 ): ?>
      <div class="row-1">
          <?php foreach( $row2 as $image ): ?>
             
            <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            
          <?php endforeach; ?>
        </div>
  <?php endif; ?>
     
    </div>
  </section>