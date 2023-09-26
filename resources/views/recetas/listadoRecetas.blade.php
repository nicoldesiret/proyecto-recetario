<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado</h1>
    
    <ul>
        @foreach($recetas as $receta)
        
            <h2>----------------------------------------------------------</h2>
            <h2>
                <a href="{{route('recetas.show', $receta->id)}}">
                                   {{$receta->titulo}}
                </a>
            </h2>
            <li>Descripción: {{$receta->descripcion}}</li>
            <li>Tipo de comida: {{$receta->tipoComida}}</li>

            <a href="{{route('recetas.edit', $receta->id)}}">
                Editar
            </a>

            <form action="{{route('recetas.destroy', $receta)}}" method=POST>
                @csrf
                @method('DELETE')
                <input type="submit" value="Borrar">
            </form>
            <h2>----------------------------------------------------------</h2>


        @endforeach
    </ul>
</body>
</html>