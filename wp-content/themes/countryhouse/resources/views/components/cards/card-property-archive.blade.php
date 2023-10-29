<a class="card-propery-archive" href="<?php the_permalink(); ?>">
  <div class="inner text-dark medium">
    <div class="featured-image ">

      <?php $img_id = get_post_thumbnail_id(get_the_ID());
      $image = wp_get_attachment_image_src($img_id, "featured-image");
      $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true); ?>

      <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>">

      <?php $image = get_field('image') ?>
      <div class='hover-image'>
        <?php if (!empty($image)) {
          // vars
          $url = $image['url'];
          $alt = $image['alt'];

          $sizedImage = $image['sizes']['featured-image'];


        ?>
          <img src="<?php echo $sizedImage; ?>" alt="<?php echo $alt; ?>">

        <?php } ?>
      </div>
    </div>

    <div class='info p-t-mobile-element-half  p-t-desktop-element-half'>
      <div class='row'>
        <div class='col-8'>
          <?php $terms = get_the_terms(get_the_ID(), 'location'); ?>

          <div class="location lead-in-heading"><?php echo $terms[0]->name; ?></div>

          <h3><?php the_title(); ?></h3>

        </div>
        <div class='col-4 text-right'>

          <!-- -->


          <?php $price = get_field('price', get_the_ID()); ?>
          <?php if ($price) { ?>
            <div class="card-price alt">

              <?php if ($price == "POA") { ?>

                <?php echo 'POA'; ?>

              <?php } else { ?>

                <?php $price = number_format((float)$price);
                echo '£' . $price; ?>

              <?php } ?>

            </div>

          <?php } ?>

          <!-- -->
          <?php $status = get_field('status'); ?>

          <?php $date1 = get_the_date("Y-m-d");
          $date2 = date("Y-m-d");
          $diff = abs(strtotime($date2) - strtotime($date1));
          $years = floor($diff / (365 * 60 * 60 * 24));
          $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
          $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
          $totalTime = ($years * 12) + $months;
          ?>
          <div class="tags end">
            <?php if ($totalTime < 1 && $status == 'For Sale') { ?>
              <div class='tag red'>New</div>
            <?php } elseif ($status != 'For Sale') { ?>
              <?php if ($status == 'Under Offer') { ?>
                <div class='tag'><?php echo $status; ?></div>
              <?php } ?>
              <?php if ($status == 'Sold') { ?>
                <div class='tag'><?php echo $status; ?></div>
              <?php } ?>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</a>