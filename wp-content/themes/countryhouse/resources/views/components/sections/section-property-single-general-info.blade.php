<?php $show_strapline = get_field('show_strapline_and_services'); ?>

<?php if ($show_strapline != "no") { ?>

  <section id="<?php //echo $section['section_id'];
                ?>" class="section section-line section-property-single-general-info">
    <div class="container-fluid">
      <div class="row justify-content-between">
        <div class="col-lg-5 ">
          <div class="row justify-content-between">
            <div class="description-wrapper p-t-mobile-intro p-b-mobile-intro p-t-desktop-intro p-b-desktop-intro medium text-dark">
              <div class="col-10">
                <div class="property-description p-b-mobile-element p-b-desktop-element">
                  <?php the_field('description') ?>
                </div>
                <?php $links = get_field('links'); ?>

                @include('components.helpers.links')
              </div>
            </div>

            <div class="amenities-wrapper p-b-mobile-intro p-t-desktop-intro p-b-desktop-intro medium text-dark">
              <div class="col-10">
                <?php $title = get_field('layout_title'); ?>
                <?php if ($title) { ?>
                  <h4><?php echo $title; ?></h4>
                <?php } ?>

                <?php the_field('layout') ?>

                <?php $title = get_field('services_title'); ?>
                <?php if ($title) { ?>
                  <h4><?php echo $title; ?></h4>
                <?php } ?>

                <?php the_field('services') ?>
              </div>
            </div>
          </div>



        </div>
        <div class="col-lg-7">

          <div class="large-image">

            <?php $image = get_field('image') ?>

            <?php if (!empty($image)) {
              // vars
              $url = $image['url'];
              $alt = $image['alt'];

              $sizedImage = $image['sizes']['property-info'];


            ?>
              <img src="<?php echo $sizedImage; ?>" alt="<?php echo $alt; ?>">

            <?php } ?>
          </div>

        </div>
      </div>
    </div>
  </section>
<?php } ?>