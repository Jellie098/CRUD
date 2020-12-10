@extends('layouts.producto')

@section('contenido')
    <a href="{{ route('pedido.index') }}" class="btn btn-outline btn-success">Regresar</a>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h3>Filtrado por cantidad de sol</h3>
            </div>    
            <div class="ibox-content">
                @foreach($tipos as $tipo)
                    <h5>{{ $tipo->tipo }}</h5>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Producto</th>
                                <th>Familia</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tipo->productos as $producto)  
                                <tr>
                                    <td>{{$producto->id}}</td>
                                    <td>{{$producto->nombre}}</td>
                                    <td>{{$producto->especie}}</td>
                                    <td>${{$producto->precio}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endforeach
            </div>
        </div>
    </div>    
@endsection