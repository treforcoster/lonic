<div class="card-team-member medium pb-3">
  <div class="inner">
    <div class="featured-image ">
      <?php echo get_the_post_thumbnail($post->ID, 'featured-image'); ?>
      <div class='bio text-white'>
        <div class="inner">
            <?php echo get_field('bio', $post->ID); ?>
        </div>
        <div class='close-button'>
        <svg xmlns="http://www.w3.org/2000/svg" width="29.452" height="15.433" viewBox="0 0 29.452 15.433">
          
          <path id="Path_19" data-name="Path 19" class="close" d="M12445,1391.5l14.372,14.372,14.373-14.372" transform="translate(-12444.646 -1391.146)"/>
        </svg>

      </div>
      <div class="more-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="27.421" height="27.421" viewBox="0 0 27.421 27.421">
        
          <g id="Group_13474" data-name="Group 13474" transform="translate(14006.21 16135.421)">
            <line id="Line_92" data-name="Line 92" class="more" x2="27.42" transform="translate(-14006.21 -16121.711)" />
            <line id="Line_93" data-name="Line 93" class="more" x2="27.42" transform="translate(-13992.5 -16135.421) rotate(90)" />
          </g>
        </svg>
      </div>
      </div>
      
      
    </div>
    <div class="meta text-dark p-4">
      <?php $vCard = get_field('v_card', $post->ID); ?>
      <?php if ($vCard) { ?>
        <a href="<?php  echo get_field('v_card', $post->ID); ?>" class="v-card">vCard</a>
      <?php } ?>

      <h3><?php echo get_the_title($post->ID); ?></h3>
      <p class="position"><?php echo get_field('position', $post->ID); ?></p>
      <p class="contacts">
        <a href="tel:<?php echo get_field('telephone', $post->ID); ?>"><?php echo get_field('telephone', $post->ID); ?></a>
        <a href="mailto:<?php echo get_field('email', $post->ID); ?>"><?php echo get_field('email', $post->ID); ?></a>
      </p>

    </div>
  </div>
</div>