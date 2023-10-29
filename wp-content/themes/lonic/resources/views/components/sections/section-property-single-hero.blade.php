<?php $show_video = get_field('show_video'); ?>

<?php if ($show_video === "yes") { ?>

  <section id=" " class="section-property-single-video bg-colour-light medium">
    <div class="video-embed">
      <?php the_field('video'); ?>
    </div>
  </section>

<?php } else { ?>

  <?php $image = get_field('hero_image'); ?>
  <?php if ($image) { ?>

    <section id=" " class="section-property-single-hero-image bg-colour-light medium">
      <img src="<?php echo esc_url($image['sizes']['gallery-image']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    </section>

  <?php } ?>
<?php } ?>