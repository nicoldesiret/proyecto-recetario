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
            <h2>-------------------------Receta-------------------------</h2>
            <li>
                <a href="{{route('recetas.show', $receta->id)}}">
                Titulo: {{$receta->titulo}}
                </a>
            </li>
            <li>Descripción: {{$receta->descripcion}}</li>
            <li>Tipo de comida: {{$receta->tipoComida}}</li>
            <h2>----------------------------------------------------------</h2>
        @endforeach
    </ul>
</body>
</html>