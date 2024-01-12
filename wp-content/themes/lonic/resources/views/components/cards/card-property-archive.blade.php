<div class="card-propery-archive">
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

          <span class="address"><?php the_field('address', get_the_ID()); ?></span>
          <span class="area"><?php the_field('area_ft', get_the_ID()); ?> sq ft / <?php the_field('area_m', get_the_ID()); ?> m</span>

          <?php $brochure = get_field('brochure', get_the_ID()); ?>
          <?php $virtual = get_field('virtual_tour', get_the_ID()); ?>

          <?php if ($brochure || $virtual) {?>

          <div class="property-links d-flex gap-3">

            <?php if ($brochure) {?>

              <a class="arrow-link" href="<?php echo $brochure; ?>" target="_blank">Brochure <svg xmlns="http://www.w3.org/2000/svg" width="24.978" height="17.843" viewBox="0 0 24.978 17.843">
                <defs>
                  <style>
                    .arrow-colour {
                      fill: none;
                      stroke-width: 2px;
                    }
                  </style>
                </defs>
                <g id="Group_6" data-name="Group 6" transform="translate(-514.5 -1549.798)">
                  <line id="Line_3" data-name="Line 3" class="arrow-colour" x2="23.029" transform="translate(514.5 1558.725)" />
                  <path id="Path_2" data-name="Path 2" class="arrow-colour" d="M533.163,1550.505l8.215,8.215-8.215,8.214" transform="translate(-3.314)" />
                </g>
              </svg>
    
            </a>
            
            <?php } ?>

            <?php if ($virtual) {?>

              <a class="arrow-link" href="<?php echo $virtual; ?>" target="_blank">Virtual Tour <svg xmlns="http://www.w3.org/2000/svg" width="24.978" height="17.843" viewBox="0 0 24.978 17.843">
                <defs>
                  <style>
                    .arrow-colour {
                      fill: none;
                      stroke-width: 2px;
                    }
                  </style>
                </defs>
                <g id="Group_6" data-name="Group 6" transform="translate(-514.5 -1549.798)">
                  <line id="Line_3" data-name="Line 3" class="arrow-colour" x2="23.029" transform="translate(514.5 1558.725)" />
                  <path id="Path_2" data-name="Path 2" class="arrow-colour" d="M533.163,1550.505l8.215,8.215-8.215,8.214" transform="translate(-3.314)" />
                </g>
              </svg>
    
            </a>
            
            <?php } ?>

          </div>

          <?php } ?>
      
    </div>
  </div>
</div>