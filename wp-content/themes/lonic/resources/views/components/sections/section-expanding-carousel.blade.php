<section id="<?php //echo $section['section_id'];
                ?>" class="section section-expanding-carousel bg-<?php the_sub_field('background_colour'); ?> text-<?php the_sub_field('text_colour'); ?>

">
    <div class="trigger"></div>

    <div class="slide-wrapper">


        <?php $count = 1; ?>

        <?php if (have_rows('slides')) :
            while (have_rows('slides')) :
                the_row(); ?>

                <?php $image = get_sub_field('image'); ?>

                <div id="s<?php echo $count; ?>" class="slide">

                


                    <?php if ($image) :
                        $url = $image['url'];
                        $title = $image['title'];
                        $alt = $image['alt'];
                        $caption = $image['caption'];
                        $size = 'image-carousel';
                        $thumb = $image['sizes'][$size]; ?>
                        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
                    <?php endif; ?>

                    <div class='slide-content medium'>
                        <span class='h4'>Step <?php echo $count;?></span>

                        <div class="inner">
                            <h3 class="title"><?php the_sub_field('title'); ?></h3>
                            <div class="text"><?php the_sub_field('text'); ?></div>
                        </div>
                     

                    </div>

                </div>

                <?php $count++; ?>

        <?php endwhile;
        endif; ?>


    </div>

</section>