@include('components.components.header-burger-menu')

<div class="container">

  <main id="main" class="main">
    @yield('content')
  </main>

  @hasSection('sidebar')
  <aside class="sidebar">
    @yield('sidebar')
  </aside>
  @endif

</div>

@include('sections.footer')