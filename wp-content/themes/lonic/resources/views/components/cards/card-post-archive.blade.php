<div class="card-post-archive">
  <div class="inner text-dark">
    <div class="featured-image ">
      <?php $img_id = get_post_thumbnail_id(get_the_ID());
      $image = wp_get_attachment_image_src($img_id, "featured-image");
      $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true); ?>

      <img class="rounded-image" src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>">

      <?php $status = get_field('status', get_the_ID()); ?>
      <?php if ($status == "Sold") { ?>
        <span class='sold bg-orange text-white'>SOLD</span>
      <?php } ?>
    </div>

    <div class='info'>
      
    
          <h3><?php the_title(); ?></h3>

          <?php the_excerpt();?>
         
           
      
    </div>
  </div>
</div>