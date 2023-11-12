<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="{{route('recetas.update', $receta)}}" method="POST">
        @csrf
        @method('PATCH')

        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" value="{{$receta->titulo}}"><br><br>
        
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" value="{{$receta->descripcion}}"><br><br>

        <label for="tipoComida">Tipo de comida</label>
        <input type="text" name="tipoComida" value="{{$receta->titulo}}"><br><br>
        
        <input type="submit" value="Enviar"> 
    </form>
</body>
</html>