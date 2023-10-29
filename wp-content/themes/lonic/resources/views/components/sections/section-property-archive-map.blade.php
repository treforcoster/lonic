<section id="<?php //echo $section['section_id'];
              ?>" class="section section-property-archive-map">

  <div class="map-info" data-marker="<?php echo get_field('marker', 'options'); ?>" data-marker-w="<?php echo get_field('archive_marker_width', 'options'); ?>" data-marker-h="<?php echo get_field('archive_marker_height', 'options'); ?>" data-marker-x="<?php echo get_field('archive_marker_x_pos', 'options'); ?>" data-marker-y="<?php echo get_field('archive_marker_y_pos', 'options'); ?>"></div>

  <div class='markers'>
    <?php
    $args = array(
      'post_type' => 'property',
      'posts_per_page' => -1,

    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
    ?>

        <?php $terms = get_the_terms(get_the_ID(), 'location'); ?>
        <?php $map = get_field('map'); ?>

        <?php $price = get_field('price', get_the_ID()); ?>
        <?php if ($price) { ?>
          <?php if ($price == "POA") { ?>
            <?php //echo 'POA'; 
            ?>
          <?php } else { ?>
            <?php $price = number_format((float)$price);
            $price = '£' . $price; ?>
          <?php } ?>
        <?php } ?>

        <?php $price_num = get_field('price', get_the_ID()); ?>

        <?php $status = get_field('status'); ?>

        <?php $date1 = get_the_date("Y-m-d");
        $date2 = date("Y-m-d");
        $diff = abs(strtotime($date2) - strtotime($date1));
        $years = floor($diff / (365 * 60 * 60 * 24));
        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
        $totalTime = ($years * 12) + $months;
        ?>


        <?php if ($totalTime < 1 && $status == 'For Sale') { ?>
          <?php $displayStatus = $status; ?>
        <?php } elseif ($status != 'For Sale') { ?>
          <?php if ($status == 'Under Offer') { ?>
            <?php $displayStatus = $status; ?>
          <?php } ?>
          <?php if ($status == 'Sold') { ?>
            <?php $displayStatus = $status; ?>
          <?php } ?>
        <?php } ?>

        <?php $img_id = get_post_thumbnail_id(get_the_ID());
        $image = wp_get_attachment_image_src($img_id, "featured-image");
        $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true); ?>



        <!-- <p><?php the_title(); ?> - <?php echo $status; ?> - <?php echo $price_num; ?></p> -->

        <div class="property-marker" data-lat="<?php echo $map['lat']; ?>" data-lon="<?php echo $map['lon']; ?>" data-title="<?php the_title(); ?>" data-price="<?php echo $price; ?>" data-pricenum="<?php echo $price_num; ?>" data-status="<?php echo $status; ?>" data-location="<?php echo $terms[0]->name; ?>" data-image="<?php echo $image[0]; ?>" data-url="<?php echo get_permalink() ?>"></div>


    <?php
      }
    }
    wp_reset_postdata();
    ?>
  </div>


  <div id="map" class="archive-map"></div>
</section>