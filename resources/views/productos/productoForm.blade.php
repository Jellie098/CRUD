<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Agregar nuevo producto del vivero</h1>
    <form action="producto" method="POST">   
        <!--Se agrega a todos los formularios que tienen el método POST
        //Es un input oculto-->
        @csrf
        <label for="nombre">Nombre de la planta:</label>
        <input type="text" name="nombre"><br>

        <label for="precio">Precio:</label>
        <input type="number" min="1" step="0.50" name="precio"><br>

        <label for="nombre">Nombre de la planta:</label>
        <input type="text" name="nombre"><br>

        <label for="fechaIngreso">Ingreso de planta:</label>
        <input type="date" name="fechaIngreso"><br>

        <label for="existencia">Cantidad en existencia:</label>
        <input name="existencia"><br>

        <button type="submit">Agregar</button>
    </form>
</body>
</html>