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
    <div class="container full-height">
      <div class="row full-height align-items-center text-white large">
        <div class="col-12"><?php the_sub_field('text') ?></div>
      </div>
    </div>

    <a href="#content" class="down-arrow">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="81" height="81" viewBox="0 0 81 81">

        <g id="Ellipse_20" data-name="Ellipse 20" class="" transform="translate(2 2)">
          <circle class="circle" cx="38.5" cy="38.5" r="38.5" />
        </g>
        <g id="Group_13541" data-name="Group 13541" transform="translate(51.098 20) rotate(90)">
          <path id="Path_1391" data-name="Path 1391" class="line" d="M0,0H0Z" transform="translate(0 10.548)" />
          <g id="Group_13046" data-name="Group 13046" transform="translate(0 0)">
            <g id="Group_13045" data-name="Group 13045" class="line">
              <line id="Line_22" data-name="Line 22" class="line" x2="39.416" transform="translate(0 10.548)" />
              <path id="Path_1392" data-name="Path 1392" class="line" d="M0,0,9.854,9.854,0,19.707" transform="translate(29.561 0.694)" />
            </g>
          </g>
        </g>
      </svg>

    </a>
    <!-- end of .container-->
</section>