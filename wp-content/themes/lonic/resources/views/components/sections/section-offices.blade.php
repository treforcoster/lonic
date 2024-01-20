<section id="<?php the_sub_field('anchor'); ?>" class="section  section-offices padding-top-section padding-bottom-section bg-<?php the_sub_field('background_colour'); ?> text-<?php the_sub_field('text_colour'); ?>

">
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-12  padding-bottom-intro text-center  ">
        <?php  the_sub_field('title'); ?>
    </div>

    </div>

  

    <div class="row justify-contentcenter   padding-bottom-section">


      <?php

$count = 0;
$col = 'col-span-12';
      // Check rows exists.
      if( have_rows('offices') ):
      
          // Loop through rows.
          while( have_rows('offices') ) : the_row(); ?>

      <?php if ($count == 0){ 
        $col = 'col-lg-12';
        $imageCol = 'col-lg-9';
        $flex = 'd-flex align-items-start flex-column full-height';
        $textCol = 'col-lg-3';
        $contCol = 'col-lg-12';
        
      } else {
        $col = 'col-lg-6';
        $imageCol = 'col-lg-12';
        $flex = 'row';
        $textCol = 'col-lg-12';
        $contCol = 'col-lg-6';
      }?>
      
      <div class="<?php echo $col;?>  margin-bottom-element">
        <div class="office-<?php echo $count;?> card-office bg-colour-white full-height">
        <div class="row g-0">

        <div class="<?php echo $imageCol;?>">
          <?php $image = get_sub_field('image'); ?>
          <?php if ($image) :
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];
          $caption = $image['caption'];
          $size = 'image-landscape';
          $thumb = $image['sizes'][$size]; ?>
          <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
      <?php endif; ?>

        </div>

        <div class="<?php echo $textCol;?>">
          <div class="<?php echo $flex;?>">
          <div class="<?php echo $contCol;?> mb-auto">
            <div class="padding-element">
              <h3><?php  the_sub_field('location'); ?></h3>
              <p><?php  the_sub_field('address'); ?></p>
            </div>
          </div>

          <div class="<?php echo $contCol;?>">
              <div class="padding-element">
                <h4>Contact</h4>
              <p><?php  the_sub_field('telephone'); ?><br>
              <?php  the_sub_field('email'); ?></p>
            </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>   
      <?php $count ++;?>
          <?php  endwhile;
      
      // No value.
      else :
          // Do something...
      endif; ?>

     

    
      
    </div>
  </div>
</section>