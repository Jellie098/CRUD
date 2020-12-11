@extends('layouts.producto')

@section('contenido')

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h3>Agregar un nuevo producto</h3>
            </div>    
            <div class="ibox-content">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                    @endforeach
                        </ul>
                    </div>
                @endif
                @if(isset($producto))
                    <form action="{{ route('producto.update', [$producto]) }}" method="POST">
                    @method('patch')
                @else
                    <form action="{{ route('producto.store') }}" method="POST"> 
                @endif  
                    <!--Se agrega a todos los formularios que tienen el método POST
                    //Es un input oculto-->
                    @csrf
                    <div class="form-group">
                        <label for="nombre" class="col-sm-2 control-label">Nombre del producto</label>
                        <div class="col-sm-10">
                            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') ?? $producto->nombre ?? ''}}"><br><br>
                        </div>

                        <label for="precio" class="col-sm-2 control-label">Precio</label>
                        <div class="col-sm-10">    
                            <input type="number" min="1" step="0.50" name="precio" class="form-control" value="{{ old('precio') ?? $producto->precio ?? ''}}"><br><br>
                        </div>

                        <label for="especie" class="col-sm-2 control-label">Familia o especie</label>
                        <div class="col-sm-10">     
                            <input type="text" name="especie" class="form-control" value="{{ old('especie') ?? $producto->especie ?? ''}}"><br><br>
                        </div>

                        <label for="fechaIngreso" class="col-sm-2 control-label">Ingreso de planta</label>
                        <div class="col-sm-10">  
                            <input type="date" name="fechaIngreso" class="form-control" value="{{ old('fechaIngreso') ?? $producto->fechaIngreso ?? ''}}"><br><br>
                        </div>

                        <label for="tipo" class="col-sm-2 control-label">Exposición al sol</label>
                        <div class="col-sm-10">  
                            <select name="tipo_id" class="form-control">
                                @foreach ($tipos as $tipo)
                                    <option value="{{ $tipo->id }}" {{isset($producto) && $tipo->id==$producto->tipo->id ? 'selected' : ''}}>{{ $tipo->tipo }}</option> 
                                    {{--{{$tipo->id==$producto->tipo->id ? 'selected' : ''}}--}}
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <a href="{{ route('producto.index') }}" class="btn btn-outline btn-default">Cancelar</a>
                    <button type="submit" class="btn btn-outline btn-primary">Agregar</button>
                    
                </form>

            </div>
        </div>
    </div>
@endsection