<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Agregar Ingredientes</h1>
    <form action = "/ingredientes" method="POST">
        @csrf 
        <label for="nombre"> Nombre</label><br>
        <input type="text" name="nombre"><br>

        <label for="cantidad"> Cantidad </label><br>
        <input type="number" step="0.01" name="cantidad"><br>
        
        <label for="unidadMedida"> Unidad de Medida</label><br>
        <input type="text" name="unidadMedida"><br><br>

        <button> Guardar </button>

    </form>
</body>
</html>