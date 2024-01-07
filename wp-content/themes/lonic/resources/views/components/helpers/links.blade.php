<div>
  <?php

  if ($links) { ?>
    <div class="links d-flex gap-4">
      <?php foreach ($links as $row) { ?>
        <?php $link_type = $row['type'];
        // $link_style = $row['style'];
        $link_text = $row['link_text'];
        $link = "";
        $target = "";
        if ($link_type == "internal") {
          $link = $row['link_internal'];
          $target = "_self";
        } else  if ($link_type == "external") {
          $link = $row['link_external'];
          $target = "_blank";
        }  else  if ($link_type == "anchor") {
          $link = $row['anchor'];
          $target = "_self";
        } else  if ($link_type == "file") {
          $link = $row['file'];
          $target = "_blank";
        } ?>



        <a class="arrow-link" href="<?php echo $link; ?>" target="<?php echo $target; ?>"><?php echo $link_text; ?> <svg xmlns="http://www.w3.org/2000/svg" width="24.978" height="17.843" viewBox="0 0 24.978 17.843">
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


      <?php } ?>
    </div>
  <?php } ?>



</div>