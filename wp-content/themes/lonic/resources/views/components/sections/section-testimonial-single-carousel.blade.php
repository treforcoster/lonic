<section id="<?php //echo $section['section_id'];
              ?>" class="section section-testimonial-single-carousel">
  <?php //$count = count(get_field('gallery')); 
  ?>
  <?php
  $images = get_field('gallery');
  if ($images) :
    $count = count($images);
    if ($count > 1) { ?>

      <div class="testimonial-wrapper">

        <div class="swiper-container testimonial-swiper">
          <div class="swiper-wrapper">
            <?php foreach ($images as $image) : ?>
              <div class="swiper-slide">
                <img src="<?php echo esc_url($image['sizes']['gallery-image']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              </div>
            <?php endforeach; ?>
          </div>
          <div class='button-prev'>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="76.916" height="76.915" viewBox="0 0 76.916 76.915">
              <defs>
                <style>
                  .prev-1,
                  .prev-2,
                  .prev-5,
                  .prev-7 {
                    fill: none;
                  }

                  .prev-1,
                  .prev-3,
                  .prev-5 {
                    stroke: #d5a65a;
                    stroke-width: 1.5px;
                  }

                  .prev-2 {
                    stroke: #cdd4d5;
                    opacity: 0.787;
                  }

                  .prev-3 {
                    fill: #fff;
                  }

                  .prev-4 {
                    clip-path: url(#prev-path);
                  }

                  .prev-5 {
                    stroke-miterlimit: 10;
                  }

                  .prev-6 {
                    stroke: none;
                  }
                </style>
                <clipPath id="prev-path">
                  <rect id="Rectangle_105" data-name="Rectangle 105" class="prev-1" width="40.806" height="21.097" />
                </clipPath>
              </defs>
              <g id="Group_13468" data-name="Group 13468" transform="translate(76.916 76.915) rotate(180)">
                <g id="Group_13175" data-name="Group 13175" transform="translate(0)">
                  <g id="Ellipse_1" data-name="Ellipse 1" class="prev-2">
                    <circle class="prev-6" cx="38.458" cy="38.458" r="38.458" />
                    <circle class="prev-7" cx="38.458" cy="38.458" r="37.958" />
                  </g>
                </g>
                <g id="Group_13176" data-name="Group 13176" transform="translate(16.707 27.909)">
                  <path id="Path_1391" data-name="Path 1391" class="prev-3" d="M0,0H0Z" transform="translate(0 10.548)" />
                  <g id="Group_13046" data-name="Group 13046" transform="translate(0 0)">
                    <g id="Group_13045" data-name="Group 13045" class="prev-4">
                      <line id="Line_22" data-name="Line 22" class="prev-5" x2="39.416" transform="translate(0 10.548)" />
                      <path id="Path_1392" data-name="Path 1392" class="prev-5" d="M0,0,9.854,9.854,0,19.707" transform="translate(29.561 0.694)" />
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <div class='button-next'>
            <svg id="Group_13469" data-name="Group 13469" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="76.916" height="76.915" viewBox="0 0 76.916 76.915">
              <defs>
                <style>
                  .next-1,
                  .next-2,
                  .next-5,
                  .next-7 {
                    fill: none;
                  }

                  .next-1,
                  .next-3,
                  .next-5 {
                    stroke: #d5a65a;
                    stroke-width: 1.5px;
                  }

                  .next-2 {
                    stroke: #cdd4d5;
                    opacity: 0.787;
                  }

                  .next-3 {
                    fill: #fff;
                  }

                  .next-4 {
                    clip-path: url(#clip-path);
                  }

                  .next-5 {
                    stroke-miterlimit: 10;
                  }

                  .next-6 {
                    stroke: none;
                  }
                </style>
                <clipPath id="clip-path">
                  <rect id="Rectangle_105" data-name="Rectangle 105" class="next-1" width="40.806" height="21.097" />
                </clipPath>
              </defs>
              <g id="Group_13175" data-name="Group 13175">
                <g id="Ellipse_1" data-name="Ellipse 1" class="next-2">
                  <circle class="next-6" cx="38.458" cy="38.458" r="38.458" />
                  <circle class="next-7" cx="38.458" cy="38.458" r="37.958" />
                </g>
              </g>
              <g id="Group_13176" data-name="Group 13176" transform="translate(16.707 27.909)">
                <path id="Path_1391" data-name="Path 1391" class="next-3" d="M0,5.364H0Z" transform="translate(0 5.184)" />
                <g id="Group_13046" data-name="Group 13046" transform="translate(0 0)">
                  <g id="Group_13045" data-name="Group 13045" class="next-4">
                    <line id="Line_22" data-name="Line 22" class="next-5" x2="39.416" transform="translate(0 10.548)" />
                    <path id="Path_1392" data-name="Path 1392" class="next-5" d="M15.032.353l9.854,9.854L15.032,20.06" transform="translate(14.529 0.341)" />
                  </g>
                </g>
              </g>
            </svg>
          </div>
        </div>
      </div>
    <?php } else { ?>
      <div class="testimonial-single-image">
        <?php foreach ($images as $image) : ?>
          <img src="<?php echo esc_url($image['sizes']['gallery-image']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endforeach; ?>
      </div>
    <?php } ?>
  <?php endif; ?>

</section>