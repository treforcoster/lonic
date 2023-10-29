<section id="<?php //echo $section['section_id'];
              ?>" class="section section-line section-property-carousel marker-title-h2-lead-in bg-colour-light  ">

  <?php $background = get_sub_field('background'); ?>
  <div class="background" style="background-image:url('<?php echo $background; ?>');"></div>
  <div class="content p-t-mobile-section p-b-mobile-section p-t-desktop-section ">

    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-6 medium text-dark p-b-mobile-intro p-b-desktop-intro">
          <?php the_sub_field('text') ?>
        </div>
      </div>
    </div>

    <?php
    $members = get_sub_field('team_members');
    if ($members) : ?>

      <div class="container-fluid ">

        <div class="row gx-10">

          <?php foreach ($members as $post) :

            // Setup this post for WP functions (variable must be named $post).
            setup_postdata($post); ?>

            <div class="col-md-6 col-lg-4">

              @include('components.cards.card-team-member')
            </div>

          <?php endforeach; ?>

        </div>

      </div>
      <?php
      // Reset the global post object so that the rest of the page works correctly.
      wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>

  </div>
</section>