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
    <li> <a href="{{route('ingredientes.show', $ingredientes->id)}}" > </li>
    <li>Nombre: {{$ingredientes->nombre}}</li>
    <li>Cantidad: {{$ingredientes->cantidad}}</li>
    <li>Unidad de Medida:  {{$ingredientes->unidadMedida}}</li><br>
    @endforeach
</ul>
</body>
</html>