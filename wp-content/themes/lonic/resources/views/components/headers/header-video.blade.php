<section id="<?php //echo $sectionData->sectionOptions->section_id;
              ?>" class="section header-video overflow-hidden ">


  <?php $video = get_sub_field('video'); ?>
  <?php if ($video) { ?>

    <div class="bg-video-wrapper">

      <video class="video-js" muted playsinline>
        <source src="<?php echo $video; ?>" type="video/mp4">
        </source>

      </video>



    </div>

  <?php } ?>

  <?php $image = get_sub_field('background_image'); ?>
  <?php if (!empty($image)) {
    // vars
    $url = $image['url'];
    $alt = $image['alt'];

    $sizedImage = $image['sizes']['gallery-image'];


  ?>

    <div class="header-background" style="background-image:url('<?php echo $sizedImage; ?>');"></div>

  <?php }  ?>

  <div class="overlay"></div>

  <div class="inner">
    <div class="container-fluid full-height">
      <div class="row full-height align-items-center text-white x-large">
        <div class="col-12"><?php the_sub_field('text') ?></div>
      </div>
    </div>

    <a href="#content" class="down-arrow medium">
      <span>SCROLL DOWN</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="17.843" height="24.978" viewBox="0 0 17.843 24.978">
        <defs>

        </defs>
        <g id="Group_103" data-name="Group 103" transform="translate(1567.641 -514.5) rotate(90)">
          <line id="Line_3" data-name="Line 3" class="arrow" x2="23.029" transform="translate(514.5 1558.725)" />
          <path id="Path_2" data-name="Path 2" class="arrow" d="M533.163,1550.505l8.215,8.215-8.215,8.214" transform="translate(-3.314)" />
        </g>
      </svg>

    </a>
    <!-- end of .container-->
</section>