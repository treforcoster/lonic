
<?php $use_background = $section['background_image']['use_background'];?>
<?php
if ($use_background === "yes") {
  $portrait = $section['background_image']['portrait'];
  $landscape =$section['background_image']['landscape'];
  $overlay = $section['background_image']['use_overlay'];

  if (empty($portrait)) {
    if (!empty($landscape)) {
      $landscapeurl = $landscape['url'];
      $landscapetitle = $landscape['title'];
      $landscapealt = $landscape['alt'];
      $landscapecaption = $landscape['caption'];
    }?>

  <div class="background-wrapper text-<?php echo $section['text_colour']; ?>">

    <div class="bg-holder-all-devices " style="background-image:url('<?php echo $landscapeurl; ?>');"></div>


    <?php if ($section['top_gradient']['use_gradient'] === "yes") { ?>

    <div class="top-gradient"


style="
          height: <?php echo $section['top_gradient']['height']?>;
           background: -moz-linear-gradient(0deg,  <?php echo $section['top_gradient']['end_colour']?>  <?php echo $section['top_gradient']['start']?>, <?php echo $section['top_gradient']['start_colour'] ?> <?php echo $section['top_gradient']['end'] ?>);
           background: -webkit-linear-gradient(0deg, <?php echo $section['top_gradient']['end_colour']?>  <?php echo $section['top_gradient']['start']?>, <?php echo $section['top_gradient']['start_colour'] ?> <?php echo $section['top_gradient']['end'] ?>);
           background: linear-gradient(0deg, <?php echo $section['top_gradient']['end_colour']?>  <?php echo $section['top_gradient']['start']?>, <?php echo $section['top_gradient']['start_colour'] ?> <?php echo $section['top_gradient']['end'] ?>);
          "

    ></div>

    <?php } ?>
    <?php if ($section['bottom_gradient']['use_gradient'] === "yes") { ?>

    <div class="bottom-gradient"

         style="
           height: <?php echo $section['bottom_gradient']['height']?>;
           background: -moz-linear-gradient(0deg,  <?php echo $section['bottom_gradient']['end_colour']?>  <?php echo $section['bottom_gradient']['start']?>, <?php echo $section['bottom_gradient']['start_colour'] ?> <?php echo $section['top_gradient']['end'] ?>);
           background: -webkit-linear-gradient(0deg, <?php echo $section['bottom_gradient']['end_colour']?>  <?php echo $section['bottom_gradient']['start']?>, <?php echo $section['bottom_gradient']['start_colour'] ?> <?php echo $section['top_gradient']['end'] ?>);
           background: linear-gradient(0deg, <?php echo $section['bottom_gradient']['end_colour']?>  <?php echo $section['bottom_gradient']['start']?>, <?php echo $section['bottom_gradient']['start_colour'] ?> <?php echo $section['top_gradient']['end'] ?>);
           "

    ></div>

    <?php } ?>

    <?php if ($overlay === "yes") {?>
    <div class="bg-overlay"></div>
    <?php  } ?>

  </div>

  <?php } else {
    $portraiturl = $portrait['url'];
    $portraittitle = $portrait['title'];
    $portraitalt = $portrait['alt'];
    $portraitcaption = $portrait['caption'];
    $landscapeurl = $landscape['url'];
    $landscapetitle = $landscape['title'];
    $landscapealt = $landscape['alt'];
    $landscapecaption = $landscape['caption']; ?>

  <div class="background-wrapper text-<?php echo $sectionData->sectionOptions->text_colour;?>">

      <div class="bg-holder-mobile " style="background-image:url('<?php echo $portraiturl; ?>');"></div>

      <div class="bg-holder-desktop " style="background-image:url('<?php echo $landscapeurl; ?>');"></div>

    <?php if ($sectionData->topGradientGroup -> use_gradient === "yes") { ?>

    <div class="top-gradient"

         style="
           height: <?php echo $sectionData->topGradientGroup->height;?>;
           background: -moz-linear-gradient(0deg, <?php echo $sectionData->topGradientGroup->end_colour?> <?php echo $sectionData->topGradientGroup->start?>, <?php echo $sectionData->topGradientGroup->start_colour?> <?php echo $sectionData->topGradientGroup->end?>);
           background: -webkit-linear-gradient(0deg, <?php echo $sectionData->topGradientGroup->end_colour?> <?php echo $sectionData->topGradientGroup->start?>, <?php echo $sectionData->topGradientGroup->start_colour?> <?php echo $sectionData->topGradientGroup->end?>);
           background: linear-gradient(0deg, <?php echo $sectionData->topGradientGroup->end_colour?> <?php echo $sectionData->topGradientGroup->start?>, <?php echo $sectionData->topGradientGroup->start_colour?> <?php echo $sectionData->topGradientGroup->end?>);
           "

    ></div>

    <?php } ?>
    <?php if ($sectionData->bottomGradientGroup-> use_gradient === "yes") { ?>

    <div class="bottom-gradient"

         style="
           height: <?php echo $sectionData->bottomGradientGroup->height;?>;
           background: -moz-linear-gradient(0deg, <?php echo $sectionData->bottomGradientGroup->end_colour?> <?php echo $sectionData->bottomGradientGroup->start?>, <?php echo $sectionData->bottomGradientGroup->start_colour?> <?php echo $sectionData->bottomGradientGroup->end?>);
           background: -webkit-linear-gradient(0deg, <?php echo $sectionData->bottomGradientGroup->end_colour?> <?php echo $sectionData->bottomGradientGroup->start?>, <?php echo $sectionData->bottomGradientGroup->start_colour?> <?php echo $sectionData->bottomGradientGroup->end?>);
           background: linear-gradient(0deg, <?php echo $sectionData->bottomGradientGroup->end_colour?> <?php echo $sectionData->bottomGradientGroup->start?>, <?php echo $sectionData->bottomGradientGroup->start_colour?> <?php echo $sectionData->bottomGradientGroup->end?>);
           "

    ></div>

    <?php } ?>

    <?php if ($overlay === "yes") {?>
      <div class="bg-overlay"></div>
    <?php  } ?>

  </div>



<?php }
}?>









