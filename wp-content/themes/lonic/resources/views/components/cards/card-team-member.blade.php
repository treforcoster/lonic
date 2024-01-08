<div class="card-team-member medium pb-3">
  <div class="inner">
    <div class="featured-image ">
      <?php echo get_the_post_thumbnail($post->ID, 'featured-image'); ?>
      <div class='bio text-white p-5'>
        <?php echo get_field('bio', $post->ID); ?>
      </div>
      <div class="more-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="27.421" height="27.421" viewBox="0 0 27.421 27.421">
        
          <g id="Group_13474" data-name="Group 13474" transform="translate(14006.21 16135.421)">
            <line id="Line_92" data-name="Line 92" class="more" x2="27.42" transform="translate(-14006.21 -16121.711)" />
            <line id="Line_93" data-name="Line 93" class="more" x2="27.42" transform="translate(-13992.5 -16135.421) rotate(90)" />
          </g>
        </svg>
      </div>
      <div class='close-button'>
        <svg xmlns="http://www.w3.org/2000/svg" width="20.102" height="20.104" viewBox="0 0 20.102 20.104">
          
          <g id="Group_13482" data-name="Group 13482" transform="translate(10.055 -9.334) rotate(45)">
            <line id="Line_28" data-name="Line 28" class="close" x2="27.42" transform="translate(0 13.711)" />
            <line id="Line_29" data-name="Line 29" class="close" x2="27.42" transform="translate(13.701 0) rotate(90)" />
          </g>
        </svg>
      </div>
    </div>
    <div class="meta text-dark p-4">
      <?php $vCard = get_field('v_card', $post->ID); ?>
      <?php if ($vCard) { ?>
        <a href="<?php echo get_field('v_card', $post->ID); ?>" class="v-card">vCard</a>
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