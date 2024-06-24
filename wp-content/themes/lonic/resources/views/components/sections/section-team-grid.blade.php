<section id="<?php the_sub_field('anchor'); ?>" class="section section-team-grid padding-top-intro padding-bottom-section bg-<?php the_sub_field('background_colour'); ?> text-<?php the_sub_field('text_colour'); ?> ">

  

    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-12 medium text-dark padding-bottom-intro">
          <?php echo get_sub_field('text') ?>
        </div>
      </div>
    </div>

    <?php
    $members = get_sub_field('team_members');
    if ($members) : ?>

      <div class="container-fluid ">

        <div class="row gx-3">

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
 
</section>