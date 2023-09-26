<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Detalle de Ingrediente:
        {{ $ingrediente->nombre}}
    </h1>

    <h2>Cantidad: {{$ingrediente->cantidad}}</h2>
    <h2>Cantidad: {{$ingrediente->unidadMedida}}</h2>
    
</body>
</html>