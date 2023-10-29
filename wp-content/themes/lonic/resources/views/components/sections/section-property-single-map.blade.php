<?php $map = get_field('map'); ?>

<section id="<?php //echo $section['section_id'];
              ?>" class="section section-line marker-title-h2 section-property-single-map">
  <div class="map-header bg-colour-dark">
    <?php $background = get_field('map_header_background', 'options'); ?>
    <div class="background" style="background-image:url('<?php echo $background; ?>');"></div>
    <div class="content p-t-mobile-section p-b-mobile-section p-t-desktop-section p-b-desktop-section">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-4 medium text-light">

            <h2>Map</h2>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="map-info" data-zoom="<?php echo $map['zoom']; ?>" data-lat="<?php echo $map['lat']; ?>" data-lon="<?php echo $map['lon']; ?>" data-marker="<?php echo get_field('marker', 'options'); ?>" data-marker-w="<?php echo get_field('marker_width', 'options'); ?>" data-marker-h="<?php echo get_field('marker_height', 'options'); ?>" data-marker-x="<?php echo get_field('marker_x_pos', 'options'); ?>" data-marker-y="<?php echo get_field('marker_y_pos', 'options'); ?>"></div>

  <div id="map" class="single-map"></div>
</section>