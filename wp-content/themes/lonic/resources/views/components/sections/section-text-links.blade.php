<section id="<?php the_sub_field('anchor'); ?>" class="section section-text-links large padding-top-section padding-bottom-section bg-<?php the_sub_field('background_colour'); ?> text-<?php the_sub_field('text_colour'); ?>

">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-lg-8 text-dark ">

        <?php the_sub_field('text'); ?>


      </div>
      <?php $links = get_sub_field('links'); ?>

      <?php if ($links) { ?>
        <div class="padding-top-element links">


          @include('components.helpers.links')


        </div>

      <?php } ?>
    </div>
  </div>
</section>