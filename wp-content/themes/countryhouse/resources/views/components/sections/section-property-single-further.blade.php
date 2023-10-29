<?php if (have_rows('further_info')) : ?>
  <?php while (have_rows('further_info')) : the_row();  ?>

    <section id="<?php //echo $section['section_id'];
                  ?>" class="section section-line section-property-single-further marker-title-h2-intro bg-colour-dark  ">

      <?php $background = get_field('map_header_background', 'options'); ?>
      <div class="background" style="background-image:url('<?php echo $background; ?>');"></div>
      <div class="content p-t-mobile-intro p-b-mobile-intro p-t-desktop-intro p-b-desktop-intro">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-lg-4 medium text-light p-b-mobile-element">
              <h2><?php the_sub_field('title') ?></h2>

            </div>
            <div class="col-lg-8 medium text-light">
              <div class="row">
                <?php $links = get_sub_field('links'); ?>

                @include('components.helpers.links')

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <?php endwhile; ?>
<?php endif; ?>