<section class="section header-blog padding-top-section padding-bottom-section bg-dark-green text-white

">
    <div class="inner">
        <div class="container-fluid">
            <div class="row">
                <?php $width = get_sub_field('text_width');?>
                <?php $widthClass= "col-lg-8"; ?>
                <?php if ($width === "short"){
                  $widthClass = "col-lg-6";
                } else {
                  $widthClass = "col-lg-8";
                }?>
                <div class="<?php echo $widthClass;?> large ">

                    <div class='h1'>BLOG</div>

                    <h1 class="p"><?php the_title(); ?></h1>



                </div>
            </div>
        </div>
    </div>
</section>
