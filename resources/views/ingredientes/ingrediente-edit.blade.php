<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Agregar Ingredientes</h1>
    <form action = "{{route('ingredientes.update', $ingrediente)}}" method="POST">
        @csrf 
        @method('PATCH')
        <label for="nombre"> Nombre</label><br>
        <input type="text" name="nombre" value="{{$ingrediente->nombre}}"><br>

        <label for="cantidad"> Cantidad </label><br>
        <input type="number" step="0.01" name="cantidad" value="{{$ingrediente->cantidad}}"><br>
        
        <label for="unidadMedida"> Unidad de Medida</label><br>
        <input type="text" name="unidadMedida" value="{{$ingrediente->unidadMedida}}"><br><br>

        <button> Guardar </button>

    </form>
</body>
</html>