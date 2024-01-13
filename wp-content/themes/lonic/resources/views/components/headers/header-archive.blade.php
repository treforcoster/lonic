<section class="section header-text padding-top-section padding-bottom-section bg-dark-green text-white">
    <div class="inner">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 large ">

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