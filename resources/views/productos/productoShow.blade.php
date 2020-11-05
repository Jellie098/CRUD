<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
</head>
<body>
    <h1>Información de un producto</h1>
    <a href="{{ route('producto.edit', [$producto->id]) }}">Editar producto</a>
    <br>
    <table>
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Familia</th>
            <th>Precio</th>
            <th>En existencia</th>
        </tr>
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->especie}}</td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->existencia}}</td>
        </tr>
    </table>
</body>
</html>