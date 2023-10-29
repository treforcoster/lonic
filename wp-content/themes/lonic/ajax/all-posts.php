<?php
   
$args = array(
    'post_type' => 'property',
    'posts_per_page' => -9
);
   
$the_query = new WP_Query( $args ); ?>
   
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
   
          <h2><?php the_title(); ?></h2>
  
    <?php endwhile; endif; ?>
   
<?php wp_reset_postdata(); ?>