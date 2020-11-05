<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Agregar nuevo producto del vivero</h1>

@if(isset($producto))
    <form action="{{ route('producto.update', [$producto]) }}" method="POST">
    @method('patch')
@else
    <form action="{{ route('producto.store') }}" method="POST"> 
@endif  
        <!--Se agrega a todos los formularios que tienen el método POST
        //Es un input oculto-->
        @csrf
        <label for="nombre">Nombre del producto:</label>
        <input type="text" name="nombre" value="{{ old('nombre')}}{{ $producto->nombre}}"><br><br>
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="precio">Precio:</label>
        <input type="number" min="1" step="0.50" name="precio" value="{{ old('precio')}}{{ $producto->precio}}"><br><br>
        @error('precio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="especie">Familia o especie:</label>
        <input type="text" name="especie" value="{{ old('especie')}}{{ $producto->especie}}"><br><br>
        @error('especie')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="fechaIngreso">Ingreso de planta:</label>
        <input type="date" name="fechaIngreso" value="{{ old('fechaIngreso')}}{{ $producto->fechaIngreso}}"><br><br>
        @error('fechaIngreso')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="existencia">Cantidad en existencia:</label>
        <input name="existencia" value="{{ old('existencia')}}{{ $producto->existencia}}"><br><br>
        @error('existencia')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit">Agregar</button>
    </form>
</body>
</html>