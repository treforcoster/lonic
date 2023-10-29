<section id="<?php //echo $section['section_id'];
              ?>" class="section section-line section-quote-block p-t-mobile-section p-b-mobile-intro  p-t-desktop-section p-b-desktop-intro bg-colour-light

">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-8 medium text-dark text-center">
        <h3 class="lead-in-heading"><?php the_sub_field('lead_in'); ?></h3>
        <blockquote>
          <?php the_sub_field('content'); ?>
          <cite><?php the_sub_field('cite'); ?></cite>
        </blockquote </div>
      </div>
    </div>
</section>