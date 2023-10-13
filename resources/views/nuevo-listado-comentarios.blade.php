<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de comentarios en la página</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"> 
</head>
<body>
    <h1>LISTA DE COMENTARIOS</h1>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <ul class="comment-list">
        @foreach ($allcomentarios as $comentario)
            <li class="comment-item">
                <div class="testimonial-content">
                    <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        {{ $comentario->comentario }}
                        <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3>ID COMENTARIO: {{ $comentario->id }}</h3>
                    <h4>Calificación: {{ $comentario->calificacion }}</h4>
                    <!-- Agrega estrellas basadas en la calificación -->
                    <div class="stars">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $comentario->calificacion)
                                <i class="fas fa-star"></i>
                            @else
                                <i class="far fa-star"></i>
                            @endif
                        @endfor
                    </div>
                </div>
                <!-- Agrega enlaces para editar y eliminar -->
                <div class="actions">
                    <a href="{{ route('comentarios.edit', $comentario->id) }}" class="edit-link">Editar Comentario</a>
                    <form action="{{ route('comentarios.destroy', $comentario->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button">Borrar comentario</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('comentarios.create') }}">Regresar para comentar</a>
</body>
</html>