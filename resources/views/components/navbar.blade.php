
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('assets/img/favicon.png') }}" alt="Logo">
            <h1>Deliny<span>.</span></h1>
        </a>

        <nav x-data="{ open: false }" id="navbar" class="navbar">
            <ul>
        @if (Route::has('login'))
                <li class="dropdown"><a href="{{ url('/recetas') }}"><span>Recetas</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{ route('recetas.index', ['tipoComida' => 'Desayuno']) }}">Desayunos</a></li>
                        <li><a href="{{ route('recetas.index', ['tipoComida' => 'Almuerzo']) }}">Almuerzos</a></li>
                        <li><a href="{{ route('recetas.index', ['tipoComida' => 'Comida']) }}">Comidas</a></li>
                        <li><a href="{{ route('recetas.index', ['tipoComida' => 'Cena']) }}">Cenas</a></li>
                        <li><a href="{{ route('recetas.index', ['tipoComida' => 'Postre']) }}">Postres</a></li>
                        <li><a href="{{ route('recetas.index', ['tipoComida' => 'Bebida']) }}">Bebidas</a></li>
                    </ul>                    
                </li>
                <li><a href="{{ url('/menus') }}">Menú Semanal</a></li>
                @auth
                    <li><a href="{{ url('/inicio') }}">Inicio</a></li>
                    <li class="dropdown" ><a href="#"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="{{ route('profile.show') }}">{{ __('Perfil') }}</a></li>
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <li><button class="button-logout" href="{{ route('logout') }}"
                                    @click.prevent="$root.submit();">
                                    {{ __('Cerrar Sesión') }}</button>
                                </li>
                            </form>
                        </ul>
                    </li>
                @else
                    <li><a href="{{ route('login') }}" >Iniciar Sesión</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Registrarme</a></li>
                    @endif
                @endauth
            </ul>
        </nav><!-- .navbar -->
        
            @auth
                <a class="btn-book-a-table" href="{{ url('/recetas/create') }}">Sube tu receta</a>
            @else
                <a class="btn-book-a-table" href="{{ url('login') }}">Únete a Deliny</a>
            @endauth
        @endif
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>  

    </div>
  </header><!-- End Header -->