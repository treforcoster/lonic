<?php $show_floorplan = get_field('show_floorplan'); ?>

<?php if ($show_floorplan === "yes") { ?>

  <?php $floorplan = get_field('floorplan'); ?>

  <section id="<?php //echo $section['section_id'];
                ?>" class="section section-line marker-title-h2 section-property-single-floorplan">
    <div class="content p-t-mobile-section p-b-mobile-section p-t-desktop-section p-b-desktop-section medium text-dark">
      <div class="container-fluid">
        <div class="row justify-content-between">
          <div class="col-lg-3 p-b-mobile-element">
            <h2><?php echo $floorplan['title']; ?></h2>
            <div class="lead-in-heading gold">AREA (APPROX)</div>
            <p><?php the_field('area'); ?></p>
          </div>
          <div class="col-lg-9">
            <?php $image = $floorplan['image']; ?>
            <div class="image">


              <?php if (!empty($image)) {
                // vars
                $url = $image['url'];
                $alt = $image['alt'];
              ?>
                <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">

              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>