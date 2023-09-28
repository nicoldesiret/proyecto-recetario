<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de comentarios en la página</title>
</head>
<body>
    <h1>LISTA DE COMENTARIOS LOS COMENTARIOS</h1>

    <ul>
          
        @foreach ($allcomentarios as $comentarios)


        <a href="{{ route('comentario.show', $comentarios->id)}}">
         {{$comentarios->id}}</a>

        <li>Comentario: {{ $comentarios->comentario }} </li>

        <li>Calificación: {{ $comentarios->calificacion}}</li>
        <li>Fecha de creación: {{$comentarios->created_at}}</li>
        <a href="{{ route('comentario.edit', $comentarios->id)}}"> Editar Comentario</a>
        
        <form action="{{ route('comentario.destroy', $comentarios)}}" method="POST">
            @csrf 
            @method('DELETE')
            <input type="submit" value="Borrar comentario">
        </form>

        <p></p>
        @endforeach
    </ul>
</body>
</html>