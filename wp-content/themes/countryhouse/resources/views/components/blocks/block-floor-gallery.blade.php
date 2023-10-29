
      <?php $block = get_sub_field($block_name); ?>
      

      <div class="block <?php echo $block_name;?>
      bg-colour-<?php echo $block['block_options']['bg_colour']; ?>
      text-<?php echo $block['block_options']['text_colour']; ?>
      p-t-mobile-<?php echo $block['block_options']['padding_top_mobile'];?>
      p-r-mobile-<?php echo $block['block_options']['padding_right_mobile'];?>
      p-b-mobile-<?php echo $block['block_options']['padding_bottom_mobile'];?>
      p-l-mobile-<?php echo $block['block_options']['padding_left_mobile'];?>

      p-t-desktop-<?php echo $block['block_options']['padding_top_desktop'];?>
      p-r-desktop-<?php echo $block['block_options']['padding_right_desktop'];?>
      p-b-desktop-<?php echo $block['block_options']['padding_bottom_desktop'];?>
      p-l-desktop-<?php echo $block['block_options']['padding_left_desktop'];?> 
      h-<?php echo $block['block_options']['height'];?>-mobile
      h-<?php echo $block['block_options']['height_desktop'];?>-desktop
      <?php echo $block['block_options']['text_size'];?>
      
      ">

      @include('components.blocks.block-square-background')

      <div class="inner">

        <div class="relative row <?php echo $block['block_options']['col_justify']; ?> <?php echo $block['block_options']['col_align']; ?> full-height">
          <div class="<?php echo $block['block_options']['col_span']; ?> full-height">

          <?php if( have_rows('column_2') ): ?>
    <?php while( have_rows('column_2') ): the_row();  ?>

          <?php $count = 1;?>

          <?php
          $images = get_sub_field('floors');
          $size = 'full'; // (thumbnail, medium, large, full or custom size)
          if( $images ): ?>

            <div class="swiper-container floor-selector-gallery-swiper full-height">
              <div class="swiper-wrapper">

            <?php foreach( $images as $image ): ?>

                <div class="swiper-slide bg-colour-<?php echo $block['block_options']['bg_colour']; ?>">

                  <div class="title">
                    <div class="row">
                      <div class="col-6">
                        <div class="caption
                        text-<?php echo $block['block_options']['text_colour']; ?>">
                          <h3><?php echo esc_html($image['title']); ?><br>
                            <?php echo esc_html($image['caption']); ?><br>
                            <?php echo esc_html($image['description']); ?>
                          </h3>
                        </div>
                      </div>
                      <div class="col-6 text-right">
                        <div class="compass-wrapper p-r-mobile-intro p-r-desktop-intro">
                        <?php the_sub_field('compass')?>
                        </div>
                      </div>
                    </div>
                </div>
                <img class="floor" src="<?php echo esc_url($image['url']); ?>" alt="Thumbnail of <?php echo esc_url($image['alt']); ?>" />
                <div class="footnote">
                   <div class="row">
                    <div class="col-6">
                     
                    </div>
                    <div class="col-6 text-lg-right">
                      For indicative purposes only, not to scale.
                    </div>
                   </div>
                </div>
            </div>
          <?php endforeach; ?>



          </div>

          </div>


        <?php endif; ?>

        <?php endwhile; ?>
<?php endif; ?>

          </div>  
        </div>  
      </div>
    </div>

    