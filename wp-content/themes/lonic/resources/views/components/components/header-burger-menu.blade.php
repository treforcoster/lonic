<header class="burger-menu-style">
  <div class="banner">


    <div class="brand">
      <a href="<?php echo get_home_url(); ?>">
        <!-- <img class="logo-white" src="<?php the_field('logo_white', 'options'); ?>"> -->
        <img class="logo-dark" src="<?php the_field('logo_dark', 'options'); ?>">
      </a>
    </div>
    <a id="show-menu" class="">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70" height="42" viewBox="0 0 70 42">
        <defs>
          <style>
            .cls-1 {
              clip-path: url(#clip-Open);
            }

            .cls-2 {
              fill: none;
              stroke: #032c33;
              stroke-width: 2px;
            }
          </style>
          <clipPath id="clip-Open">
            <rect width="70" height="42" />
          </clipPath>
        </defs>
        <g id="Open" class="cls-1">
          <g id="Group_3399" data-name="Group 3399" transform="translate(-1821.798 -1017.5)">
            <path id="Path_1392" data-name="Path 1392" class="cls-2" d="M70.7,0H0" transform="translate(1821.798 1030.5)" />
            <path id="Path_1393" data-name="Path 1393" class="cls-2" d="M70.7,0H0" transform="translate(1821.798 1046.5)" />
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
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70" height="42" viewBox="0 0 70 42">
              <defs>
                <style>
                  .cls-1 {
                    clip-path: url(#clip-Close);
                  }

                  .cls-2 {
                    fill: none;
                    stroke: #032c33;
                    stroke-width: 2px;
                  }
                </style>
                <clipPath id="clip-Close">
                  <rect width="70" height="42" />
                </clipPath>
              </defs>
              <g id="Close" class="cls-1">
                <g id="Group_3400" data-name="Group 3400" transform="translate(-1807.5 -46.5)">
                  <line id="Line_2" data-name="Line 2" class="cls-2" x1="41.702" y1="42" transform="translate(1821.5 46.5)" />
                  <line id="Line_72" data-name="Line 72" class="cls-2" y1="42" x2="41.702" transform="translate(1821.5 46.5)" />
                </g>
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