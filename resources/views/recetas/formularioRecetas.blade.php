<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nueva receta</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Denily<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route('recetas.index')}}">Recetas</a></li>
          <li><a href="#">Desayunos</a></li>
          <li><a href="#">Comidas</a></li>
          <li><a href="#">Cenas</a></li>
          <li><a href="#">Postres</a></li>
          <li><a href="#">Bebidas</a></li>
          <li><a href="#">Planificador</a></li>
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="{{route('recetas.create')}}">Agregar nueva receta</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <br><br>
  <main id="main">
    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-header">
          <h2>Nueva receta</h2>
          <p>Comparte tu <span>receta</span> con nosotros</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 reservation-img" style="background-image: url(/assets/img/recetario/nuevareceta.jpg);"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form action="/recetas" method="POST" class="php-email-form">
                @csrf
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <input type="text" name="titulo" class="form-control" placeholder="Nombre del platillo" >
                    <div class="validate"></div>
                  </div>
                  
                  <div class="col-lg-12">
                    <input type="text" name="tipoComida" class="form-control" placeholder="Tipo de platillo" >
                    <div class="validate"></div>
                  </div>
                  
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="descripcion" rows="5" placeholder="Describe el platillo"></textarea>
                    <div class="validate"></div>
                  </div>

                  <div class="text-center"><button type="submit">Crear</button></div>
                </div>
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>
    </section><!-- End Book A Table Section -->

  </main><!-- End #main -->

</body>

</html>