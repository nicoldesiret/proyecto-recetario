<x-layout-d>

    <main id="main">
        <!-- ======= Book A Table Section ======= -->
        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">
      
              <div class="row g-0">
         
                <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                  <form action="{{ route('menus.update', $menu) }}" method="POST" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                    @csrf
                    @method('PATCH')
                    <div class="row gy-4">
                      <div class="section-header">
                        <p style="font-size:50px;">Crear <span>Menu</span></p>
                    </div>
                    <div class="col-lg-12">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre del menú" value="{{$menu->nombre}}">
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Día</th>
                                    <th>Desayuno</th>
                                    <th>Almuerzo</th>
                                    <th>Comida</th>
                                    <th>Cena</th>
                                    <th>Bebida</th>
                                    <th>Postre</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $diasSemana = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
                                    $tiposComida = ['Desayuno', 'Almuerzo', 'Comida', 'Cena', 'Bebida', 'Postre'];
                                @endphp
                    
                                @foreach ($diasSemana as $dia)
                                <tr>
                                    <td>{{ $dia }}</td>
                                    @foreach ($tiposComida as $tipo)
                                    <td>
                                        <select name="recetas[{{ $dia }}][{{ $tipo }}]">
                                            <option value="">Selecciona un {{ $tipo }}</option>
                                            @foreach(${'recetas' . $tipo} as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->titulo }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    
                    </div>

                    <div class="text-center"><button type="submit">Guardar Cambios</button></div>
                  </form>

                </div>
      
              </div>

            </div>
          </section>
      </main>

</x-layout-d>