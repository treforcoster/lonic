<header class="burger-menu-style">
  <div class="banner">
  <?php $background = get_field('menu_background', 'options');?>
  <div class="background" style="background-image:url('<?php echo $background; ?>');"></div>

    <div class="brand">
        <img class="logo-white" src="<?php the_field('logo_white', 'options');?>">
        <img class="logo-dark" src="<?php the_field('logo_dark', 'options');?>">
    </div>
  
  </div>
</header>


