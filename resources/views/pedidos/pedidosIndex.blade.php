@extends('layouts.producto')

@section('contenido')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="col-sm-10">
            <div class="ibox float-e-margins">  
                <div class="ibox-content">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ID de usuario</th>
                                <th>Productos</th>
                                <th>Extras</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        @foreach ($pedidos as $pedido)
                            <tr>
                                <td>{{$pedido->id}}</td>
                                <td>{{$pedido->user_id}}</td>
                                <td>
                                    @foreach($pedido->productos as $producto)
                                        {{$producto->nombre}}<br>
                                    @endforeach
                                </td>
                                <td>{{$pedido->extra}}</td>
                                <td>$ {{$pedido->total}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>       
            </div>
        </div>
        <a href="{{ route('producto.index') }}" class="btn btn-outline btn-success">Volver a listado</a>
    </div>
@endsection