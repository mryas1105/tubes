<!DOCTYPE html>
<html lang="en">
<style>
input[type=text], select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=date], select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 20%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
}
</style>

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
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="dropdown user user-menu">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">
                SELAMAT DATANG, {{ auth()->user()->name }}
              </span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-footer">
                <div class="pull-right">
                  <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class="btn btn-block btn-defult btn-flat">Sign out</a>
                </div>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
                </form>
              </li>
            </ul>

      </li>

    </ul>
</nav>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
  <div class="hero-container2">
      <h1>FORM RESERVASI</h1>
      <div>
  <form action="/reservasi" method="POST">
    @csrf

    <input type="text"  name="nama_pemesan" placeholder="Nama Pemesan">
    <input type="text"  name="nik" placeholder="NIK">
    <input type="text"  name="no" placeholder="No Tlf">
    <input type="text"  name="email" placeholder="Email">

    <select id="country" name="tipe_kamar">
        @foreach ($kamars as $kamar)
        <option value="{{$kamar->id}}">{{$kamar->tipe_kamar}}</option>
        @endforeach
    </select>
    <select id="country" name="jml_kamar">
      <option value="australia">1</option>
      <option value="canada">2</option>
      <option value="usa">3</option>
      <option value="usa">4</option>
      <option value="usa">5</option>
    </select>
    <input type="date" id="lname" name="tgl_cekin" placeholder="Tgl Cek In">
    <input type="date" id="lname" name="tgl_cekout" placeholder="Tgl Check Out">
    <input type="submit" value="Submit">
  </form>
</div>
  </div>
  </section>
  <!-- maincontent -->

  <!-- ======= Footer ======= -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- script -->
  @include('user.templates.partials.scripts')
</body>

</html>

