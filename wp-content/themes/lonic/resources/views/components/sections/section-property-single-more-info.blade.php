<?php $property = get_field('about_property'); ?>
<?php $area = get_field('about_area'); ?>
<?php $show_about = get_field('show_about'); ?>

<?php if ($show_about != "no") { ?>

  <section id="<?php //echo $section['section_id'];
                ?>" class="section section-line section-property-single-more-info marker-title-h2-lead-in">

    <div class="container-fluid">
      <div class="row justify-content-between">
        <div class="col-lg-5 ">
          <div class="area-wrapper area-wrapper-h2-lead-in p-t-mobile-intro p-b-mobile-intro p-t-desktop-intro p-b-desktop-intro medium text-dark">
            <div class="inner p-b-mobile-element-half p-b-desktop-element-half ">
              <h2><span class="lead-in-heading">The Area</span><?php echo $area['title'] ?></h2>
              <div class="expanding-text">
                <?php echo $area['text'] ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="property-wrapper p-t-mobile-intro p-b-mobile-intro p-t-desktop-intro p-b-desktop-intro medium text-white">
            <div class="inner  p-b-mobile-element-half p-b-desktop-element-half">
              <h2><span class="lead-in-heading"><?php the_title(); ?></span><?php echo $property['title'] ?></h2>
              <div class="expanding-text">
                <?php echo $property['text'] ?>
              </div>

            </div>
          </div>

        </div>
      </div>
      <div class="bottom-bar">
        <div class="container-fluid">
          <div class="row justify-content-between">
            <div class="col-5 ">
              <div class="left-background">
                <div class="expand-button medium left text-dark">
                  <div class="lead-in-heading red">Read more</div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="27.421" height="27.421" viewBox="0 0 27.421 27.421">
                    <defs>
                      <style>
                        .cls-1 {
                          fill: none;
                          stroke: #ca385b;
                        }
                      </style>
                    </defs>
                    <g id="Group_13474" data-name="Group 13474" transform="translate(14006.21 16135.421)">
                      <line id="Line_92" data-name="Line 92" class="cls-1" x2="27.42" transform="translate(-14006.21 -16121.711)" />
                      <line id="Line_93" data-name="Line 93" class="cls-1 vertical-line" x2="27.42" transform="translate(-13992.5 -16135.421) rotate(90)" />
                    </g>
                  </svg>
                </div>
              </div>
            </div>
            <div class="col-7">
              <div class="right-background"></div>
            </div>
            <div class="expand-button right medium text-dark">
              <div class="lead-in-heading red">Read more</div>
              <svg xmlns="http://www.w3.org/2000/svg" width="27.421" height="27.421" viewBox="0 0 27.421 27.421">
                <defs>
                  <style>
                    .cls-2 {
                      fill: none;
                      stroke: #ca385b;
                    }
                  </style>
                </defs>
                <g id="Group_13474" data-name="Group 13474" transform="translate(14006.21 16135.421)">
                  <line id="Line_92" data-name="Line 92" class="cls-2" x2="27.42" transform="translate(-14006.21 -16121.711)" />
                  <line id="Line_93" data-name="Line 93" class="cls-2 vertical-line" x2="27.42" transform="translate(-13992.5 -16135.421) rotate(90)" />
                </g>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

<?php } ?>