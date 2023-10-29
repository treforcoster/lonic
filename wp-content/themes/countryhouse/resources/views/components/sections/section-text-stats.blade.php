<section id="<?php //echo $section['section_id'];
              ?>" class="section section-line section-text-stats marker-title-h2 bg-colour-dark  ">

  <?php $background = get_sub_field('background'); ?>
  <div class="background" style="background-image:url('<?php echo $background; ?>');"></div>
  <div class="content p-t-mobile-section p-b-mobile-element p-t-desktop-section p-b-desktop-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 medium text-light p-b-mobile-section ">

          <?php the_sub_field('text') ?>

        </div>
        <div class="col-lg-8">
          <div class="row align-items-center">

            <?php $count = 0; ?>

            <?php if (have_rows('stats')) : ?>
              <?php while (have_rows('stats')) : the_row();

              ?>
                <div class="col-6 col-lg-3 medium text-center text-light p-b-mobile-element">
                  <div class='s-<?php echo $count; ?> stat p-b-mobile-element p-t-mobile-element p-b-desktop-element p-t-desktop-element'>

                    <h3 class="alt"><?php the_sub_field('number'); ?></h3>
                    <p><?php the_sub_field('text'); ?></p>
                  </div>
                </div>

                <?php $count++; ?>
              <?php endwhile; ?>

            <?php endif; ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>