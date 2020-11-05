<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Productos del vivero</h1>
    <a href="/producto/create">Agregar producto</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Producto</th>
        </tr>
        @foreach ($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td><a href="/producto/{{$producto->id}}">{{$producto->nombre}}</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>