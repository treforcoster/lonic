<div class="dark">
  @include('components.components.header-burger-menu')
  
  <div class="mobile-menu-background">
      <img class="logo-mobile" src="<?php the_field('logo_mobile', 'options');?>">
    </div>
</div>

<div id="main">

  @yield('content')

</div>

@include('sections.footer')
