<section id="<?php //echo $section['section_id'];
              ?>" class="section section-line section-contact-block marker-title-h2   p-t-mobile-section p-b-mobile-section p-t-desktop-section p-b-desktop-section

">
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-6 medium text-dark">

        <div class="row">
          <div class="header-wrapper">
            <div class="col-lg-10  p-b-mobile-intro p-b-desktop-intro">
              <h1 class="lead-in-heading"><?php the_sub_field('title') ?></h1>
              <?php the_sub_field('text') ?>
            </div>
          </div>
        </div>

        <div class="row p-b-mobile-intro p-t-desktop-intro">
          <div class="col-lg-6 p-b-mobile-intro">
            <?php $regional = get_sub_field('regional');

            echo $regional['text'];
            ?>
          </div>
          <div class="col-lg-6 ">
            <?php $general = get_sub_field('general');

            echo $general['text']; ?>
          </div>
        </div>



      </div>
      <div class="col-lg-6">
        <div class="image  bg-colour-light">

          <?php $image = get_sub_field('image') ?>

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