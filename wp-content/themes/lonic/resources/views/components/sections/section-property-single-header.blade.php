<section id=" " class="section-property-single-header bg-colour-white medium">
  <div class="content p-t-mobile-intro p-b-mobile-intro p-t-desktop-element p-b-desktop-element text-dark medium">
    <div class="container-fluid">
      <div class="row items-center">
        <div class="col-md-6 p-b-mobile-element d-flex flex-row align-items-center">
          <div>
            <?php $terms = get_the_terms(get_the_ID(), 'location'); ?>
            <div class="single lead-in-heading"><?php echo $terms[0]->name; ?></div>
            <h2><?php the_title(); ?></h3>

              <div class="tags">

                <?php $status = get_field('status'); ?>


                <?php $date1 = get_the_date();
                $date2 = date("Y-m-d");
                $diff = abs(strtotime($date2) - strtotime($date1));

                $years = floor($diff / (365 * 60 * 60 * 24));
                $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                $totalTime = ($years * 12) + $months;

                ?>

                <?php $price = get_field('price'); ?>
                <?php $price_label = get_field('price_label'); ?>


                <?php if ($price) { ?>

                  <div class="h2">

                    <?php if ($price_label == "POA") {

                      echo $price_label;
                    } else {

                      $price = number_format((float)$price);
                      echo $price_label . ' - £' . $price;
                    } ?>

                  </div>

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

                <?php } ?>
              </div>
          </div>
        </div>
        <div class="col-md-6 text-lg-right">
          <div class='p-b-mobile-element-half  p-b-desktop-element'>
            <p class='lead-in-heading'><span class="uppercase gold">Area (approx)</span><br>
              <span class="lowercase gold"><?php echo get_field('area'); ?></span>
            </p>
          </div>
          <p><span class="uppercase"><?php echo get_field('address'); ?></span></p>
        </div>
      </div>
    </div>
  </div>
</section>