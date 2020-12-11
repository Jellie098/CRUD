@extends('layouts.producto')

@section('contenido')
<div class="wrapper wrapper-content animated fadeInRight">
        <div class="col-sm-12 white-bg">
            <div class="ibox float-e-margins">
                <br>
                <div class="row text-center">
                    <a href="{{ route('pedido.create') }}" class="btn btn-outline btn-info"> Realizar pedido </a>
                    <a href="{{ route('dashboard') }}" class="btn btn-outline btn-info"> Regresar a dashboard </a>
                </div>
                <div class="ibox-content text-center animated fadeInRightBig">
                    <img src="{{ asset('img/cactus.png') }}">
                </div>
            </div>
        </div>
</div>    

@endsection