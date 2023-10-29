<a class="card-testimonial-archive" href="<?php the_permalink();?>">
  <div class="inner  ">
  <div class="featured-image m-b-mobile-element-half m-b-desktop-element-half">

  <?php echo get_the_post_thumbnail( get_the_ID(), 'featured-image' ); ?>

      <div class='hover-text'>
        <div class='text text-white p-mobile-element p-desktop-element uppercase'>
        <?php the_field('quote');?>
        <span>Read More</span>
        </div>
      </div>

  </div>

  <div class='text-dark medium'>

  <div class="location lead-in-heading">Testimonial</div>

  <h3><?php the_title();?> &mdash; <?php the_field('property');?></h3>
  </div>
  </div>

 </a>


