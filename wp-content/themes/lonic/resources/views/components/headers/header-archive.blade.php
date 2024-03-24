<section class="section header-text padding-top-section padding-bottom-section bg-dark-green text-white">
    <div class="inner">
        <div class="container-fluid">
            <div class="row">
                <?php $width = get_sub_field('text_width'); ?>
                <?php $widthClass = "col-lg-8"; ?>
                <?php if ($width === "short") {
                  $widthClass = "col-lg-6";
                } else {
                  $widthClass = "col-lg-8";
                }?>
                <div class="<?php echo $widthClass;?> large ">

                    <?php $type = get_query_var('post_type');?>

                    <?php $index_type= "";?>

                    <?php if ($type !==""){

                      $index_type = $type . "_index_text";

                    } else {
                      $index_type = "index_text";
                    }?>

                    <?php the_field($index_type, 'options') ?>

                </div>
            </div>
        </div>
    </div>
</section>
