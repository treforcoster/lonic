<section id="<?php //echo $section['section_id'];
              ?>" class="section section-line marker-title-h2  section-area-map p-t-desktop-section p-b-desktop-intro bg-colour-white

">

  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-5 medium text-dark">

        <div class="row">
          <div class="header-wrapper">
            <div class="col-lg-10  p-b-mobile-intro p-b-desktop-intro">
              <h1 class="lead-in-heading"><?php the_sub_field('title') ?></h1>
              <?php echo get_sub_field('text') ?>
            </div>
          </div>
        </div>

        <div class="row p-b-mobile-intro p-t-desktop-intro">

          <div class="col-lg-12 ">
            <?php the_sub_field('general') ?>

          </div>
        </div>



      </div>
      <div class="col-lg-7 p-b-mobile-section">
        <?php if (have_rows('info_windows')) : ?>
          <div class="marker-list" class="markers">


            <?php $markercount = 1; ?>

            <?php while (have_rows('info_windows')) : the_row(); ?>

              <div class="map-marker" data-title="<?php the_sub_field("title"); ?>" data-content="<?php the_sub_field("contacts"); ?>"><?php the_sub_field("title"); ?> | <?php the_sub_field("contacts"); ?></div>

              <?php $markercount++; ?>

            <?php endwhile; ?>

          </div>

        <?php endif; ?>
        <div class="medium text-dark">

          <span class="gold lead-in-heading-spacing">CLICK TO VIEW REGIONAL CONTACTS</span>
        </div>
        <div id="map" class="area-map">


        </div>
      </div>
    </div>
</section>