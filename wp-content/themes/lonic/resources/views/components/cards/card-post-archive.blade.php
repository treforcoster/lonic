<div class="card-post-archive">
    <div class="inner text-dark">
        <?php if ($size === 'medium'){?>
        <div class='medium'>
            <div class="row g-0">
                <div class="col-6">
                    <div class="featured-image">
                        <div class="portrait">
                            <?php $img_id = get_post_thumbnail_id(get_the_ID());
          $image = wp_get_attachment_image_src($img_id, "image-portrait");
          $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true); ?>

                            <img class="rounded-image" src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>">
                        </div>
                    </div>

                </div>
                <div class="col-6">

                    <div class='info'>


                        <h3><?php the_title(); ?></h3>

                        <?php the_excerpt();?>

                        <a class="more" href="<?php the_permalink();?>">Read more
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.978 17.843">
                                <defs>
                                    <style>
                                        .arrow-colour {
                                            fill: none;
                                            stroke-width: 2px;
                                        }

                                    </style>
                                </defs>
                                <g id="Group_6" data-name="Group 6" transform="translate(-514.5 -1549.798)">
                                    <line id="Line_3" data-name="Line 3" class="arrow-colour" x2="23.029" transform="translate(514.5 1558.725)" />
                                    <path id="Path_2" data-name="Path 2" class="arrow-colour" d="M533.163,1550.505l8.215,8.215-8.215,8.214" transform="translate(-3.314)" />
                                </g>
                            </svg></a>

                    </div>
                </div>
            </div>

        </div>

        <?php } else { ?>
        <div class="featured-image landscape">
            <?php $img_id = get_post_thumbnail_id(get_the_ID());
      $image = wp_get_attachment_image_src($img_id, "image-landscape");
      $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true); ?>

            <img class="rounded-image" src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>">


        </div>

        <div class='info'>


            <h3><?php the_title(); ?></h3>

            <?php the_excerpt();?>

            <a class="more" href="<?php the_permalink();?>">Read more
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.978 17.843">
                    <defs>
                        <style>
                            .arrow-colour {
                                fill: none;
                                stroke-width: 2px;
                            }

                        </style>
                    </defs>
                    <g id="Group_6" data-name="Group 6" transform="translate(-514.5 -1549.798)">
                        <line id="Line_3" data-name="Line 3" class="arrow-colour" x2="23.029" transform="translate(514.5 1558.725)" />
                        <path id="Path_2" data-name="Path 2" class="arrow-colour" d="M533.163,1550.505l8.215,8.215-8.215,8.214" transform="translate(-3.314)" />
                    </g>
                </svg>
            </a>

        </div>


        <?php }  ?>
    </div>
</div>
