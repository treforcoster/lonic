<div class="card card-icon full-height bg-colour-<?php echo $card['bg_colour']; ?> padding-<?php echo $card['card_padding'];?>" >

  <?php if ($svg_icon === "no") {?>

      <?php $image = get_sub_field('image')?>
        <?php if (!empty($image)) :
            // vars
            $url = $image['url'];
            $title = $image['title'];
            $alt = $image['alt'];
            $caption = $image['caption'];
            if ($card['override_image'] == 'full' ){
              $thumb = $url;
            } else {
              $size = 'acf-icon-image';
              $thumb = $image['sizes'][ $size ];
            }
           ?>

            <img class="icon icon-<?php echo $card['icon_align'];?>  margin-bottom-<?php echo $card['icon_spacing'];?>"
                 style="width:<?php echo $card['icon_width'];?>;"
                 src="<?php echo $thumb; ?>"
                 alt="<?php echo $alt; ?>" />

        <?php endif; ?>
  <?php } else { ?>

    <span class="icon icon-<?php echo $card['icon_align'];?> margin-bottom-<?php echo $card['icon_sapcing'];?>" style="width:<?php echo $card['icon_width'];?>;">
      <?php the_sub_field('icon');?>
    </span>


   <?php }?>

    <?php if (get_sub_field('text')) {?>
    <div class="card-meta text-<?php echo $card['text_align'];?> <?php echo $card['text_size'];?> <?php //echo $card['card_padding'];?> text-<?php echo $card['text_colour'];?> link-<?php the_sub_field('has_link');?>" >

      <div class="info">

        <?php  echo the_sub_field('text');?>
      </div>

    </div>
    <?php }?>



</div>
