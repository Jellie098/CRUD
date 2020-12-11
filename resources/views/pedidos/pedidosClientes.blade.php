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
                                <th>Precio</th>
                            </tr>
                        </thead>
                        @foreach ($pedidos as $pedido)
                            <tr>
                                <td>{{$pedido->id}}</td>
                                <td>{{$pedido->user_id}}</td>
                                <td>{{$pedido->producto->nombre}}</td>
                                <td>{{$pedido->total}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>       
            </div>
        </div>
    </div>
@endsection