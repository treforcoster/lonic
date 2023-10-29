<div class="light">
  @include('components.components.header-no-menu')
  
  <div class="mobile-menu-background">
      <img class="logo-mobile" src="<?php the_field('logo_mobile', 'options');?>">
    </div>
</div>

<div id="main">

  @yield('content')

</div>

@include('sections.footer')
