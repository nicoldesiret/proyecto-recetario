<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

</head>
<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
    
          <a href="/ingredientes" class="logo d-flex align-items-center me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('assets/img/favicon.png') }}" alt="Logo">
            <h1>Deliny<span>.</span></h1>
          </a>
    
          <nav id="navbar" class="navbar">
            <ul>
              <li><a href="/dashboard">Dashboard</a></li>
              <li><a href="/ingredientes">Ingredientes</a></li>
              <li><a href="#menu">Recetas</a></li>
              <li><a href="#events">Comentarios</a></li>
              <li><a href="#chefs">Chefs</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </nav><!-- .navbar -->
    
          <a class="btn-book-a-table" href="#book-a-table">Únete a Deliny</a>
          <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
          <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    
        </div>
      </header><!-- End Header -->

      <main id="main">
        <!-- ======= Book A Table Section ======= -->
        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">
      
              <div class="row g-0">
    
      
                <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                  <form action="/menus" method="POST" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                    @csrf
                    <div class="row gy-4">
                      <div class="section-header">
                        <p style="font-size:50px;">Crear <span>Menu</span></p>
                      </div>
                      <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Desayuno</th>
                                    <th scope="col">Almuerzo</th>
                                    <th scope="col">Comida</th>
                                    <th scope="col">Cena</th>
                                    <th scope="col">Bebida</th>
                                    <th scope="col">Postre</th>
                                    <!-- Repite esto para los otros días y tipos de comida -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Lunes</th>
                                    <td>
                                        <select name="desayuno">
                                            <option value="">Selecciona un Desayuno</option>
                                            @foreach($recetasDesayuno as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="almuerzo">
                                            <option value="">Selecciona un Almuerzo</option>
                                            @foreach($recetasAlmuerzo as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="comida">
                                            <option value="">Selecciona una Comida</option>
                                            @foreach($recetasComida as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="cena">
                                            <option value="">Selecciona una Cena</option>
                                            @foreach($recetasCena as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="bebida">
                                            <option value="">Selecciona una Bebida</option>
                                            @foreach($recetasBebida as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="postre">
                                            <option value="">Selecciona un Postre</option>
                                            @foreach($recetasPostre as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>    
                                </tr>
                                <tr>
                                    <th scope="row">Martes</th>
                                    <td>
                                        <select name="desayuno">
                                            <option value="">Selecciona un Desayuno</option>
                                            @foreach($recetasDesayuno as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="almuerzo">
                                            <option value="">Selecciona un Almuerzo</option>
                                            @foreach($recetasAlmuerzo as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="comida">
                                            <option value="">Selecciona una Comida</option>
                                            @foreach($recetasComida as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="cena">
                                            <option value="">Selecciona una Cena</option>
                                            @foreach($recetasCena as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="bebida">
                                            <option value="">Selecciona una Bebida</option>
                                            @foreach($recetasBebida as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="postre">
                                            <option value="">Selecciona un Postre</option>
                                            @foreach($recetasPostre as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>   
                                </tr>
                                <tr>
                                    <th scope="row">Miércoles</th>
                                    <td>
                                        <select name="desayuno">
                                            <option value="">Selecciona un Desayuno</option>
                                            @foreach($recetasDesayuno as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="almuerzo">
                                            <option value="">Selecciona un Almuerzo</option>
                                            @foreach($recetasAlmuerzo as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="comida">
                                            <option value="">Selecciona una Comida</option>
                                            @foreach($recetasComida as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="cena">
                                            <option value="">Selecciona una Cena</option>
                                            @foreach($recetasCena as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="bebida">
                                            <option value="">Selecciona una Bebida</option>
                                            @foreach($recetasBebida as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="postre">
                                            <option value="">Selecciona un Postre</option>
                                            @foreach($recetasPostre as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>   
                                </tr>
                                <tr>
                                    <th scope="row">Jueves</th>
                                    <td>
                                        <select name="desayuno">
                                            <option value="">Selecciona un Desayuno</option>
                                            @foreach($recetasDesayuno as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="almuerzo">
                                            <option value="">Selecciona un Almuerzo</option>
                                            @foreach($recetasAlmuerzo as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="comida">
                                            <option value="">Selecciona una Comida</option>
                                            @foreach($recetasComida as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="cena">
                                            <option value="">Selecciona una Cena</option>
                                            @foreach($recetasCena as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="bebida">
                                            <option value="">Selecciona una Bebida</option>
                                            @foreach($recetasBebida as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="postre">
                                            <option value="">Selecciona un Postre</option>
                                            @foreach($recetasPostre as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>   
                                </tr>
                                <tr>
                                    <th scope="row">Viernes</th>
                                    <td>
                                        <select name="desayuno">
                                            <option value="">Selecciona un Desayuno</option>
                                            @foreach($recetasDesayuno as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="almuerzo">
                                            <option value="">Selecciona un Almuerzo</option>
                                            @foreach($recetasAlmuerzo as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="comida">
                                            <option value="">Selecciona una Comida</option>
                                            @foreach($recetasComida as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="cena">
                                            <option value="">Selecciona una Cena</option>
                                            @foreach($recetasCena as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="bebida">
                                            <option value="">Selecciona una Bebida</option>
                                            @foreach($recetasBebida as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="postre">
                                            <option value="">Selecciona un Postre</option>
                                            @foreach($recetasPostre as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>   
                                </tr>
                                <tr>
                                    <th scope="row">Sábado</th>
                                    <td>
                                        <select name="desayuno">
                                            <option value="">Selecciona un Desayuno</option>
                                            @foreach($recetasDesayuno as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="almuerzo">
                                            <option value="">Selecciona un Almuerzo</option>
                                            @foreach($recetasAlmuerzo as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="comida">
                                            <option value="">Selecciona una Comida</option>
                                            @foreach($recetasComida as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="cena">
                                            <option value="">Selecciona una Cena</option>
                                            @foreach($recetasCena as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="bebida">
                                            <option value="">Selecciona una Bebida</option>
                                            @foreach($recetasBebida as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="postre">
                                            <option value="">Selecciona un Postre</option>
                                            @foreach($recetasPostre as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>   
                                </tr>
                                <tr>
                                    <th scope="row">Domingo</th>
                                    <td>
                                        <select name="desayuno">
                                            <option value="">Selecciona un Desayuno</option>
                                            @foreach($recetasDesayuno as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="almuerzo">
                                            <option value="">Selecciona un Almuerzo</option>
                                            @foreach($recetasAlmuerzo as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="comida">
                                            <option value="">Selecciona una Comida</option>
                                            @foreach($recetasComida as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="cena">
                                            <option value="">Selecciona una Cena</option>
                                            @foreach($recetasCena as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="bebida">
                                            <option value="">Selecciona una Bebida</option>
                                            @foreach($recetasBebida as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="postre">
                                            <option value="">Selecciona un Postre</option>
                                            @foreach($recetasPostre as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>   
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center"><button type="submit">Crear</button></div>
                  </form>

                </div><!-- End Reservation Form -->
      
              </div>
      
            </div>
          </section><!-- End Book A Table Section -->
      </main><!-- End #main -->

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