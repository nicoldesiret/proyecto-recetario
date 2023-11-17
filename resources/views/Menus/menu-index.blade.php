<x-layout-d>
    @php
        $diasSemana = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
        $tiposComida = ['Desayuno', 'Almuerzo', 'Comida', 'Cena', 'Bebida', 'Postre'];
    @endphp
    <main id="main">
        <!-- ======= Book A Table Section ======= -->
        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">
      
            <div class="row g-0">
         
                @foreach ($menus as $menu)
                <h2>{{ $menu->nombre }}</h2>
                <p> <a href="{{route('menus.edit', $menu)}}" ><strong>Editar</strong> </a></li> 
                    <table class="table">
                        <thead>
                            <tr>
                                {{--Título columnas - Comida--}}
                                <th>Día</th>
                                @foreach ($tiposComida as $tipo)
                                    <th>{{$tipo}}</th> 
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($diasSemana as $dia) {{--Título filas - días--}}
                                @php
                                    $recetasDia = $menu->recetas->filter(function ($receta) use ($dia) {
                                        return $receta->pivot->dia === $dia;
                                    });
                                @endphp

                                @if ($recetasDia->isNotEmpty())
                                    <tr>
                                        <td>{{ $dia }}</td>
                                        @foreach ($tiposComida as $tipo) {{--Iteración sobre los días con tipo de comida --}}
                                            <td>
                                                @foreach ($menu->recetas as $receta)  {{-- Itera sobre las recetas asociadas al menú --}}
                                                    @if ($receta->pivot->dia === $dia && $receta->pivot->tipo_comida === $tipo)  {{-- Verifica si la receta coincide con el día y tipo de comida actuales(iteración) --}}
                                                        {{--Accediendo a datos de la tabla pivot--}}

                                                        <a href="{{ route('recetas.show', $receta->id) }}">{{ $receta->titulo }}</a>
                                                    @endif
                                                @endforeach
                                            </td>
                                        @endforeach
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                @endforeach
                </div>

            </div>
        </section>
    </main>

</x-layout-d>