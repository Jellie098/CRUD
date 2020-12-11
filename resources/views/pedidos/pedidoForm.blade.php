@extends('layouts.producto')

@section('contenido')

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h3>Crear pedido</h3>
            </div>    
            <div class="ibox-content">
                <form action="{{ route('pedido.store') }}" method="POST"> 
                    <!--Se agrega a todos los formularios que tienen el método POST
                    //Es un input oculto-->
                    @csrf
                    <div class="form-group">
                        <label for="tipo" class="col-sm-2 control-label">Listado de productos</label>
                        <div class="col-sm-10">  
                            <select name="producto_id[]" multiple class="form-control">
                                @foreach ($productos as $producto)
                                    <option value="{{ $producto->id }}">{{ $producto->nombre }} $ {{ $producto->precio }}</option>
                                @endforeach
                            </select>
                        </div>
                        <label for="nombre" class="col-sm-2 control-label">¿Deseas agregar un detalle extra a alguna planta?</label><br>
                        <p>¡Coméntalo!</p>
                        <div class="col-sm-10">
                            <input type="text" name="extra" class="form-control" placeholder="Ejemplo:Agregar piedras blancas a cactus" value="{{ old('extra') ?? $pedido->extra ?? ''}}"><br><br>
                        </div>

                    </div>
                    <a href="/inicio" class="btn btn-outline btn-default">Cancelar</a>
                    <button type="submit" class="btn btn-outline btn-primary">Agregar</button>
                </form>

            </div>
        </div>
    </div>
@endsection