
      <?php
      $text_group = get_sub_field('text_group');
      if( $text_group ){

      $editor = $text_group['editor'];
      $text = "";

      if ($editor == 'WYSIWYG') {
       
        $text = $text_group['wysiwyg'];
      } else {
       
        $text = $text_group['code'];
      } ?>

      
      <div class="text-inner">
          <?php echo $text; ?>
      </div>

      <?php } ?>
    