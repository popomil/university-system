  @include('shared_navbar.open')
  @include('shared_navbar.nav')
  <div class="container-fluid  mt-5" style="min-height: 90vh;width: 90%;">
<section class="content pt-3">
      <div class="container-fluid">
        @yield('content')
      </div>
</section>
</div>
  @include('shared_navbar.close')
  @include('shared_navbar.footer')
