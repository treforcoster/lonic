<div>
  <?php

  if ($links) { ?>
    <div class="links d-flex gap-3">
      <?php foreach ($links as $row) { ?>
        <?php $link_type = $row['type'];
        $link_style = $row['style'];
        $link_text = $row['link_text'];
        $link = "";
        $target = "";
        if ($link_type == "internal") {
          $link = $row['internal'];
          $target = "_self";
        } else  if ($link_type == "external") {
          $link = $row['external'];
          $target = "_blank";
        } else  if ($link_type == "file") {
          $link = $row['file'];
          $target = "_blank";
        } ?>


        <div class="button-cta <?php echo $link_style; ?>">
          <a class="" href="<?php echo $link; ?>" target="<?php echo $target; ?>"><?php echo $link_text; ?></a>
        </div>

      <?php } ?>
    </div>
  <?php } ?>



</div>