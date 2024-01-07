<section id="<?php the_sub_field('anchor'); ?>" class="section header-text padding-top-section padding-bottom-section bg-<?php the_sub_field('background_colour'); ?> text-<?php the_sub_field('text_colour'); ?>

">
  <div class="inner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 large ">

        <h1><?php the_sub_field('title'); ?></h1>

        <?php the_sub_field('text'); ?>

        <?php $links = get_sub_field('links'); ?>

        <?php if ($links) { ?>
          <div class="padding-top-element links">
  
            @include('components.helpers.links')
  
          </div>
  
        <?php } ?>

        </div>
      </div>
    </div>
  </div>
</section>