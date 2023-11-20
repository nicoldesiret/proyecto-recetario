<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Deliny - Ingredientes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link rel="icon" href="{{ asset('assets/img/Logo.ico') }}" type="image/x-icon">
  


  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/main2.css') }}" rel="stylesheet">


  {{-- =======================================================
  * Template Name: Yummy
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== --}}
</head>

<body>

  <main id="main">
    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">
  
          <div class="row g-0">
  
            <div class="col-lg-4 reservation-img" style="background-image: url('{{ asset('assets/img/ingredientes.jpg') }}');" data-aos="zoom-out" data-aos-delay="200"></div>
  
            <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
              <form action = "{{route('ingredientes.update', $ingrediente)}}" method="POST" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                @csrf
                @method('PATCH')
                <div class="row gy-4">
                  <div class="section-header">
                    <p style="font-size:50px;">Editar <span>Ingrediente</span></p>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="nombre" class="form-control" id="nombre" value="{{$ingrediente->nombre}}">
                    @error('nombre')
                    <div class="error" style="color:#CE1212; margin-left: 15px; font-size:13px;">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control" name="cantidad" step="0.100" id="cantidad" value="{{$ingrediente->cantidad}}">
                    @error('cantidad')
                    <div class="error" style="color:#CE1212; margin-left: 15px; font-size:13px;">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-6">
                    <label for="unidadMedida">Unidad de Medida</label>
                    <select class="custom-select" name="unidadMedida" id="unidadMedida">
                        <option value="{{$ingrediente->unidadMedida}}">{{$ingrediente->unidadMedida}}</option>
                        <option value="Kg">Kilogramos (Kg)</option>
                        <option value="g">Gramos (g)</option>
                        <option value="gr">Gramos (gr)</option>
                        <option value="ml">Mililitros (ml)</option>
                        <option value="L">Litros (L)</option>
                        <option value="lb">Libras (lb)</option>
                        <option value="oz">Onzas (oz)</option>
                        <option value="c/s">Cucharadas sopera (c/s)</option>
                        <option value="c/c">Cucharaditas de postre (c/c)</option>
                    </select>
                    <span class="text-muted"style="margin-left:5px; font-size:10px;">(deja en blanco si no es necesario)</span>
                    @error('unidadMedida')
                    <div class="error" style="color:#CE1212; margin-left: 15px; font-size:13px;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-center"><button type="submit">Guardar Cambios</button></div>
              </form>
            </div><!-- End Reservation Form -->
          </div>
        </div>
      </section><!-- End Book A Table Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022 - US<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Yummy</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>