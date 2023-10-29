<header class="burger-menu-style">
  <div class="banner">
    <?php $background = get_field('menu_background', 'options'); ?>
    <div class="background" style="background-image:url('<?php echo $background; ?>');"></div>

    <div class="brand">
      <a href="<?php echo get_home_url(); ?>"> <img class="logo-white" src="<?php the_field('logo_white', 'options'); ?>">
        <img class="logo-dark" src="<?php the_field('logo_dark', 'options'); ?>">
      </a>
    </div>
    <a id="show-menu" class="">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45 45">
        <defs>
          <style>
            .open-1 {
              fill: #fff;
              opacity: 0.996;
            }

            .open-2 {
              fill: #dda54b;
            }
          </style>
        </defs>
        <g id="Group_13536" data-name="Group 13536" transform="translate(21868 18809)">
          <g id="Group_13531" data-name="Group 13531">
            <g id="Desktop_Burger" data-name="Desktop Burger" transform="translate(-21868 -18809)">
              <path id="Path_1708" data-name="Path 1708" class="open-1" d="M22.5,0A22.5,22.5,0,1,1,0,22.5,22.5,22.5,0,0,1,22.5,0Z" />
            </g>
          </g>
          <g id="Group_13533" data-name="Group 13533" transform="translate(51.808 1.179)">
            <path id="Path_2142" data-name="Path 2142" class="open-2" d="M25.619,3.974,21.645,7.948a12.5,12.5,0,0,0-17.671,0L0,3.974,3.974,0A12.5,12.5,0,0,0,21.645,0Z" transform="translate(-21910.309 -18800.68)" />
            <path id="Path_2143" data-name="Path 2143" class="open-2" d="M25.619,3.974,21.645,7.948a12.5,12.5,0,0,0-17.671,0L0,3.974,3.974,0A12.5,12.5,0,0,0,21.645,0Z" transform="translate(-21910.309 -18791.68)" />
            <path id="Path_2144" data-name="Path 2144" class="open-2" d="M25.619,3.974,21.645,7.948a12.5,12.5,0,0,0-17.671,0L0,3.974,3.974,0A12.5,12.5,0,0,0,21.645,0Z" transform="translate(-21910.309 -18782.68)" />
          </g>
        </g>
      </svg>

    </a>
    <nav class="nav-primary">
      <div class="inner">
        <div class="nav-main">

          <?php the_field('menu_lead_in', 'options'); ?>

          @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => '', 'menu_class' => 'nav']) !!}
          @endif

          <a id="close-menu" class="">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45 45">
              <defs>
                <style>
                  .close-1 {
                    fill: #0f272d;
                    opacity: 0.996;
                  }

                  .close-2 {
                    fill: #dda54b;
                  }
                </style>
              </defs>
              <g id="Group_13537" data-name="Group 13537" transform="translate(21803 18809)">
                <g id="Group_13535" data-name="Group 13535">
                  <g id="Group_13532" data-name="Group 13532">
                    <g id="Desktop_Burger" data-name="Desktop Burger" transform="translate(-21803 -18809)">
                      <path id="Path_1708" data-name="Path 1708" class="close-1" d="M22.5,0A22.5,22.5,0,1,1,0,22.5,22.5,22.5,0,0,1,22.5,0Z" />
                    </g>
                  </g>
                </g>
                <path id="Path_2149" data-name="Path 2149" class="close-2" d="M30.222,4.688,25.534,9.376a14.939,14.939,0,0,0-8.161-4.144A14.56,14.56,0,0,0,4.688,9.376L0,4.688,4.688,0A14.741,14.741,0,0,0,25.534,0Z" transform="translate(-21787.871 -18800.5) rotate(45)" />
                <path id="Path_2150" data-name="Path 2150" class="close-2" d="M30.222,4.688,25.534,9.376a14.939,14.939,0,0,0-8.161-4.144A14.56,14.56,0,0,0,4.688,9.376L0,4.688,4.688,0A14.741,14.741,0,0,0,25.534,0Z" transform="translate(-21794.5 -18779.129) rotate(-45)" />
              </g>
            </svg>

          </a>
        </div>
        <div class="nav-footer">

          <?php the_field('menu_footer', 'options'); ?>


          @if (has_nav_menu('social_navigation'))
          {!! wp_nav_menu(['theme_location' => 'social_navigation', 'container' => '', 'menu_class' => 'socials']) !!}
          @endif
        </div>
      </div>
    </nav>
  </div>
</header>