@extends('user.templates.default')

@section('content')

<main id="main">
    <section id="hero">
      <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
        <h1 class="mb-4 pb-0">HOTEL<br><span>GREEN</span> LAND</h1>
        <p class="mb-4 pb-0">Abadikan Momen dan Pengalamanmu Bersama Keluarga</p>
        <a href="{{ route('login') }}" class="about-btn scrollto">Book Your Room Now</a>
      </div>
    </section><!-- End Hero Section -->

  <!-- ======= About Section ======= -->

  <!-- ======= Speakers Section ======= -->
  <section id="speakers">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Fasilitas Hotel</h2>
        <p>Berikut adalah fasilitas yang ada di Hotel Green Land</p>
      </div>

      <div class="row">
        @foreach ($fasilitas_hotels as $fasilitas_hotel)
            <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                <img src="/storage/kamar/{{ $fasilitas_hotel->image }}" alt="" class="img-fluid">
                <div class="details">
                <h3><a href="speaker-details.html">{{$fasilitas_hotel->nama_fasilitas }}</a></h3>
                <p>{{$fasilitas_hotel->deskripsi_fasilitas}}</p>
                </div>
            </div>
            </div>
        @endforeach
      </div>
    </div>

  </section><!-- End Speakers Section -->


  <!-- ======= Buy Ticket Section ======= -->
  <section id="buy-tickets" class="section-with-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Kamar Hotel</h2>
        <p>Sesuaikan dengan budgetmu</p>
      </div>

      <div class="row">
          @foreach ($kamars as $kamar)
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">{{$kamar->tipe_kamar}}</h5>

                <hr>
                <div class="hotel-img">
                <img src="../storage/gambar/{{$kamar->gambar}}" alt="Hotel 1" class="img-fluid">
              </div>
                 @foreach ($fasilitasKamar ->where('kamar_id', $kamar->id) as $k)
                    <p>{{$k->nama_fasilitas}}</p>
                    @endforeach
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
          @endforeach

      </div>

    </div>

    <!-- Modal Order Form -->
    <div id="buy-ticket-modal" class="modal fade">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Buy Tickets</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST" action="#">
              <div class="form-group">
                <input type="text" class="form-control" name="your-name" placeholder="Your Name">
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="your-email" placeholder="Your Email">
              </div>
              <div class="form-group mt-3">
                <select id="ticket-type" name="ticket-type" class="form-select">
                  <option value="">-- Select Your Ticket Type --</option>
                  <option value="standard-access">Standard Access</option>
                  <option value="pro-access">Pro Access</option>
                  <option value="premium-access">Premium Access</option>
                </select>
              </div>
              <div class="text-center mt-3">
                <button type="submit" class="btn">Buy Now</button>
              </div>
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

  </section><!-- End Buy Ticket Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="section-bg">

    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Hubungi Kami</h2>
      </div>

      <div class="row contact-info">

        <div class="col-md-4">
          <div class="contact-address">
            <i class="bi bi-geo-alt"></i>
            <h3>Alamat</h3>
            <address>Jalan Raya Surabaya Ketintang 19 No.111A, Surabya-Jawa Timur</address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="bi bi-phone"></i>
            <h3>Telepon</h3>
            <p><a href="tel:+155895548855">(62) 8777654</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="bi bi-envelope"></i>
            <h3>Email</h3>
            <p><a href="mailto:info@example.com">infogrenland@hotel.com</a></p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection
