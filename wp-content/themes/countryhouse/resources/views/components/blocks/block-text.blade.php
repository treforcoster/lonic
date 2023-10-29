
      <?php
      $block = get_sub_field($block_name);
      if( $block ){

      $editor = $block['text_group']['editor'];
      $text = "";

      if ($editor == 'WYSIWYG') {
       
        $text = $block['text_group']['wysiwyg'];
      } else {
       
        $text = $block['text_group']['code'];
      } ?>

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
          <div class="<?php echo $block['block_options']['col_span']; ?>">

          <?php echo $text; ?>
          </div>  
        </div>  
      </div>
    </div>

      <?php } ?>
    