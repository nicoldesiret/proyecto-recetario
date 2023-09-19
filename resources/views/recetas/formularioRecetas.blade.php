<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="/recetas" method="POST">
        @csrf
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo"><br><br>
        
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion"><br><br>

        <label for="tipoComida">Tipo de comida</label>
        <input type="text" name="tipoComida"><br><br>
        
        <button class="btn btn-primary mt-3 mb-5" >Subir</button>
    </form>
</body>
</html>