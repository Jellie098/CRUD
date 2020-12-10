@extends('layouts.producto')

@section('contenido')
<div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="middle-box text-center animated fadeInRightBig">
                    <h2>Bienvenido al apartado de pedidos</h2>
                    <a href="{{ route('pedido.create') }}" class="btn btn-outline btn-info"> Realizar pedido </a>
                    <a href="{{ route('tipo.index') }}" class="btn btn-outline btn-info"> Filtrado de búsqueda </a>
                    <br><br><br><br><br><br><br><br><br>
                </div>    
            </div>    
        </div>
</div>    
@endsection