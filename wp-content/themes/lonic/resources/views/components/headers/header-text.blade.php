<section id="<?php the_sub_field('anchor'); ?>" class="section header-text padding-top-section padding-bottom-section bg-<?php the_sub_field('background_colour'); ?> text-<?php the_sub_field('text_colour'); ?>

">
    <div class="inner">
        <div class="container-fluid">
            <div class="row">
                <?php $width = get_sub_field('text_width'); ?>
                <?php $widthClass= "col-lg-8"; ?>
                <?php if ($width === "short"){
                  $widthClass = "col-lg-5";
                } else {
                  $widthClass = "col-lg-8";
                }?>
                <div class="<?php echo $widthClass;?> large ">

                    <h1><?php the_sub_field('title'); ?></h1>

                    <?php the_sub_field('text'); ?>

                    <?php $links = get_sub_field('links'); ?>

                    

                </div>
                <div class="col-lg-12 large ">
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
