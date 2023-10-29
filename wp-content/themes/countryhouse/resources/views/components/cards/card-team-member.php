<div class="card-team-member medium  p-b-mobile-element p-b-desktop-intro">
  <div class="inner">
    <div class="featured-image m-b-mobile-element m-b-desktop-element">
      <?php echo get_the_post_thumbnail($post->ID, 'featured-image'); ?>
      <div class='bio text-white  p-mobile-element p-desktop-element'>
        <?php echo get_field('bio', $post->ID); ?>
      </div>
      <div class="more-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="27.421" height="27.421" viewBox="0 0 27.421 27.421">
          <defs>
            <style>
              .more {
                fill: none;
                stroke: #ca385b;
              }
            </style>
          </defs>
          <g id="Group_13474" data-name="Group 13474" transform="translate(14006.21 16135.421)">
            <line id="Line_92" data-name="Line 92" class="more" x2="27.42" transform="translate(-14006.21 -16121.711)" />
            <line id="Line_93" data-name="Line 93" class="more" x2="27.42" transform="translate(-13992.5 -16135.421) rotate(90)" />
          </g>
        </svg>
      </div>
      <div class='close-button'>
        <svg xmlns="http://www.w3.org/2000/svg" width="20.102" height="20.104" viewBox="0 0 20.102 20.104">
          <defs>
            <style>
              .close {
                fill: none;
                stroke: #ca385b;
              }
            </style>
          </defs>
          <g id="Group_13482" data-name="Group 13482" transform="translate(10.055 -9.334) rotate(45)">
            <line id="Line_28" data-name="Line 28" class="close" x2="27.42" transform="translate(0 13.711)" />
            <line id="Line_29" data-name="Line 29" class="close" x2="27.42" transform="translate(13.701 0) rotate(90)" />
          </g>
        </svg>
      </div>
    </div>
    <div class="meta text-dark">
      <?php $vCard = get_field('v_card', $post->ID); ?>
      <?php if ($vCard) { ?>
        <a href="<?php echo get_field('v_card', $post->ID); ?>" class="v-card">vCard</a>
      <?php } ?>
      <div class="location lead-in-heading"><?php echo get_field('position', $post->ID); ?></div>
      <h3><?php echo get_the_title($post->ID); ?></h3>
      <p class="contact">
        <svg xmlns="http://www.w3.org/2000/svg" width="17.152" height="17.151" viewBox="0 0 17.152 17.151">

          <defs>
            <style>
              .cls-1 {
                fill: #6e6e6e;
              }
            </style>
          </defs>
          <path id="Icon_metro-phone" data-name="Icon metro-phone" class="cls-1" d="M15.149,14.147c-1.143,1.143-1.143,2.287-2.287,2.287s-2.287-1.143-3.43-2.287-2.287-2.287-2.287-3.43S8.288,9.573,9.431,8.43,7.145,3.856,6,3.856s-3.43,3.43-3.43,3.43c0,2.287,2.349,6.923,4.574,9.148s6.861,4.574,9.148,4.574c0,0,3.43-2.287,3.43-3.43s-3.43-4.574-4.574-3.43Z" transform="translate(-2.57 -3.856)" />
        </svg> <span><a href="tel:<?php echo get_field('telephone', $post->ID); ?>"><?php echo get_field('telephone', $post->ID); ?></a></span>
      </p>

      <p class="contact">
        <svg id="Group_13466" data-name="Group 13466" xmlns="http://www.w3.org/2000/svg" width="19.199" height="12.959" viewBox="0 0 19.199 12.959">
          <defs>
            <style>
              .cls-1 {
                fill: #6e6e6e;
              }
            </style>
          </defs>
          <path id="Icon_zocial-email" data-name="Icon zocial-email" class="cls-1" d="M.072,15.88V5.216q0-.019.056-.352L6.4,10.233.146,16.25a1.569,1.569,0,0,1-.074-.37ZM.905,4.124a.8.8,0,0,1,.315-.056h16.9a1.048,1.048,0,0,1,.333.056L12.162,9.511l-.833.666L9.681,11.529,8.033,10.178,7.2,9.511ZM.924,16.972l6.313-6.054L9.681,12.9l2.444-1.981,6.313,6.054a.889.889,0,0,1-.315.056H1.22a.839.839,0,0,1-.3-.056Zm12.034-6.739,6.258-5.369a1.1,1.1,0,0,1,.056.352V15.88a1.419,1.419,0,0,1-.056.37Z" transform="translate(-0.072 -4.068)" />
        </svg> <span><a href="mailto:<?php echo get_field('email', $post->ID); ?>"><?php echo get_field('email', $post->ID); ?></a></span>
      </p>
    </div>
  </div>
</div>