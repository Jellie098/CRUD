<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Agregar nuevo producto del vivero</h1>
    <form action="productos" method="POST">   
        <!--Se agrega a todos los formularios que tienen el método POST
        //Es un input oculto-->
        @csrf
        <button type="submit">Agregar</button>
    </form>
</body>
</html>