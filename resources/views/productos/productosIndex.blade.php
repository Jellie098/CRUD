@extends('layouts.producto')

@section('contenido')
    
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="col-sm-8">
            <div class="ibox float-e-margins">  
                <div class="ibox-content">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Producto</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        @foreach ($productos as $producto)
                            <tr>
                                <td>{{$producto->id}}</td>
                                <td><a href="/producto/{{$producto->id}}">{{$producto->nombre}}</a></td>
                                <td>$ {{$producto->precio}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>       
            </div>
        </div>
        <div class="col-sm-4">
            <a href="/producto/create" class="btn btn-outline btn-info"> Agregar producto </a>
        </div>
    </div>
    </div>
@endsection