<?php $desktopHide = get_sub_field('hide_on_desktop');
$class = "";
?>
<?php if ($desktopHide == 'yes') {
  $class = "hide-on-desktop";
} ?>
<section id="<?php //echo $section['section_id'];
              ?>" class="<?php echo $class; ?> section section-line section-accordion p-t-mobile-section p-b-mobile-section p-t-desktop-section p-b-desktop-section bg-colour-dark

">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-6 medium text-light p-b-mobile-element p-b-desktop-element ">

        <?php the_sub_field('intro'); ?>


      </div>
    </div>


    <div class="row justify-content-center">
      <div class="col-lg-6">




        <?php $count = 0; ?>

        <?php if (have_rows('accordion')) : ?>

          <?php while (have_rows('accordion')) : the_row(); ?>


            <?php // the_sub_field('state');

            $buttonClass = "collapsed";
            $cardClass = "";
            ?>

            <div class="accordion-row">
              <div class="accordion-header p-t-mobile-element-half p-b-mobile-element-half p-t-desktop-element-half p-b-desktop-element-half" id="heading-<?php echo $count; ?>">
                <h3>

                  <?php the_sub_field('title'); ?>

                </h3>
              </div>

              <div class="accordion-body">
                <div class="inner medium text-light  p-b-mobile-element  p-b-desktop-element">
                  <?php the_sub_field('content'); ?>
                </div>
              </div>
            </div>


            <?php $count++; ?>

          <?php endwhile; ?>

        <?php endif; ?>

      </div>




    </div>

  </div>
</section>