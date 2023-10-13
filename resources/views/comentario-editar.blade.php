<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> EDITAR </h1>
<form method="POST" action="{{route('comentarios.update', $comentario)}}"> 
        @csrf 
        @method('PATCH')
        <h2>Ingresa tu comentario</h2>
        <label for="comentario">Comentario:</label><br>
        <textarea name="comentario" rows="4" cols="50" value="{{$comentario->comentario}}"></textarea><br>

        <h2>Ingresa la calificación de la receta</h2>
        <label for="calificacion">Calificación:</label>
        <select name="calificacion" id="calificacion">
        <option value="5" @selected($comentario->tipo=='5')> Excelente</option>
        <option value="4" @selected( $comentario->tipo=='4')>Muy bueno</option>
        <option value="3" @selected( $comentario->tipo=='3')>Bueno</option>
        <option value="2" @selected( $comentario->tipo=='2')>Regular</option>
        <option value="1" @selected( $comentario->tipo=='5')>Malo</option>
         </select><br>

         <input type="submit" value="Enviar"> 
    
</body>
</html>