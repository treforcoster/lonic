<section
  id="<?php the_sub_field('anchor'); ?>"
  class="section section-clients-carousel large padding-top-element padding-bottom-element bg-<?php the_sub_field('background_colour'); ?> text-<?php the_sub_field('text_colour'); ?>"
>
  <div class="animated-banner-left">
    <?php 
      $row1 = get_sub_field('row_1');
    
      $size = 'full'; // (thumbnail, medium, large, full or custom size)

      
      if( $row1 ): ?>
    <div class="animated-content-left">
      <?php foreach( $row1 as $image ): ?>

      <img
        class="image"
        src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
        alt="<?php echo esc_attr($image['alt']); ?>"
      />

      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>

  <div class="animated-banner-right">
    <?php 
      $row1 = get_sub_field('row_1');
      $reversed = array_reverse($row1);
      $size = 'full'; // (thumbnail, medium, large, full or custom size)

      
      if( $reversed ): ?>
    <div class="animated-content-right">
      <?php foreach( $reversed as $image ): ?>

      <img
        class="image"
        src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
        alt="<?php echo esc_attr($image['alt']); ?>"
      />

      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section>
