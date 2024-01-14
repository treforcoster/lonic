<div class="card-post-archive">
  <div class="inner text-dark">
  <?php if ($size === 'medium'){?>
    <div class='medium'>
    <div class="row g-0">
      <div class="col-6">
        <div class="featured-image ">
          <?php $img_id = get_post_thumbnail_id(get_the_ID());
          $image = wp_get_attachment_image_src($img_id, "featured-image");
          $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true); ?>
    
          <img class="rounded-image" src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>">
    
        </div>

      </div>
      <div class="col-6">
      
        <div class='info'>
      
    
          <h3><?php the_title(); ?></h3>

          <?php the_excerpt();?>
         
        </div>  
      </div>  
    </div>
  
  </div>
  
  <?php } else { ?> 

 
    <div class="featured-image ">
      <?php $img_id = get_post_thumbnail_id(get_the_ID());
      $image = wp_get_attachment_image_src($img_id, "featured-image");
      $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true); ?>

      <img class="rounded-image" src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>">

     
    </div>

    <div class='info'>
      
    
          <h3><?php the_title(); ?></h3>

          <?php the_excerpt();?>
         
           
      
    </div>
  

  <?php }  ?> 
</div>
</div>