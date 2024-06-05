<!DOCTYPE html>
<html lang="en">


@include('user.templates.partials.head')

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->

      </div>

<!-- navbar -->
@include('user.templates.partials.navbar')
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <!-- maincontent -->
  @yield('content')
  <!-- ======= Footer ======= -->

@include('user.templates.partials.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- script -->
  @include('user.templates.partials.scripts')
</body>

</html>

