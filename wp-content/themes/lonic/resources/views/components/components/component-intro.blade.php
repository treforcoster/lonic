<?php $introGroup = get_sub_field('intro_group')?>
<?php $show_intro = $introGroup['show_intro'];?>

<?php if ($show_intro == "yes") {?>

<div class="intro
      bg-colour-<?php echo $intro['bg_colour']; ?>
      text-<?php echo $intro['text_colour']; ?>
      <?php echo $intro['text_size']; ?>
      p-t-mobile-<?php echo $intro['padding_top_mobile'];?>
      p-r-mobile-<?php echo $intro['padding_right_mobile'];?>
      p-b-mobile-<?php echo $intro['padding_bottom_mobile'];?>
      p-l-mobile-<?php echo $intro['padding_left_mobile'];?>
      p-t-desktop-<?php echo $intro['padding_top_desktop'];?>
      p-r-desktop-<?php echo $intro['padding_right_desktop'];?>
      p-b-desktop-<?php echo $intro['padding_bottom_desktop'];?>
      p-l-desktop-<?php echo $intro['padding_left_desktop'];?> 
      h-<?php echo $intro['height'];?>-mobile
      h-<?php echo $intro['height_desktop'];?>-desktop
  ">

  <div class="row full-height align-items-center <?php echo $section['container_align'];?>">
    <div class="<?php echo $section['container_width'];?>" data-aos="fade-up"  data-aos-duration="750" data-aos-delay="250">
            <?php echo $introGroup['text'] ?>

    </div>
  </div>
 
</div>

<?php } ?>
