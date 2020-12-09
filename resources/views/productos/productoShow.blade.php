@extends('layouts.producto')

@section('contenido')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Detalles de producto</h5>
            </div>    
            <div class="ibox-content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Producto</th>
                            <th>Familia</th>
                            <th>Precio</th>
                            <th>Cantidad de sol</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>{{$producto->id}}</td>
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->especie}}</td>
                        <td>${{$producto->precio}}</td>
                        <td>{{$producto->tipo->tipo}}</td>
                    </tr>
                </table>
                <div class="hr-line-dashed"></div>
                <a href="{{ route('producto.index') }}" class="btn btn-outline btn-success">Volver a listado</a>
                <a href="{{ route('producto.edit', [$producto->id]) }}" class="btn btn-outline btn-warning">Editar producto</a>
                <form action="{{ route('producto.destroy', [$producto]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-outline btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>    
@endsection