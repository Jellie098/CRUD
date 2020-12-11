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
                                <th>Producto</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        @foreach ($productos as $producto)
                            <tr>
                                <td>{{$producto->id}}</td>
                                <td>{{$producto->nombre}}</a></td>
                                <td>{{$producto->precio}}</td>
                                <td>
                                    <form action="{{ route('producto.restaurar', [$producto->id]) }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <button type="submit" class="btn btn-outline btn-success">Restaurar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>       
            </div>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('producto.index') }}" class="btn btn-outline btn-info"> Regresar a listado </a>
        </div>
    </div>
    </div>
@endsection