<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ingredientes: Index</h1>

<ul>
    @foreach ($ingredientes as $ingredientes)
    <a href="{{route('ingredientes.show', $ingredientes->id)}}" >
    <li>Nombre: {{$ingredientes->nombre}}</li> </a>
    <li>Cantidad: {{$ingredientes->cantidad}}</li>
    <li>Unidad de Medida:  {{$ingredientes->unidadMedida}}</li>
    <li> <a href="{{route('ingredientes.edit', $ingredientes)}}" >Editar </a></li> 
    <form action="{{route('ingredientes.destroy', $ingredientes)}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Borrar">
    </form><br>
    @endforeach
</ul>
</body>
</html>