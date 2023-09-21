<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comenta</title>
</head>
<body>
    <h1>BIENVENIDO, REALIZA TU COMENTARIO</h1>

    @csrf 
    <form method="POST" action="{{ route('comentarios.create') }}"> 
        @csrf
        <h2>Ingresa tu comentario</h2>
        <label for="comentario">Comentario:</label><br>
        <textarea name="comentario" rows="4" cols="50"></textarea><br>

        <h2>Ingresa la calificación de la receta</h2>
        <label for="calificacion">Calificación:</label>
        <select name="calificacion" id="calificacion">
        <option value="5">Excelente</option>
        <option value="4">Muy bueno</option>
        <option value="3">Bueno</option>
        <option value="2">Regular</option>
        <option value="1">Malo</option>
         </select><br>

         <input type="submit" value="enviar"> 
        
    </form> 
    
</body>
</html>