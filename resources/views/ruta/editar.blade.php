@extends('adminlte::page')

@section('title', 'registro ruta')

@section('content_header')
@stop

@section('content')

<div class="container">
    <div class="page-header">
        <h3 class="font-weight-light mb-3 pt-5">
            <a style="text-decoration:none; color:inherit" href="">
                <img src="/img/ruta.png" alt="rutas">
                Rutas
            </a>
        </h3>
        <hr>
    </div>

    <div class="col-xs-12 detail-view">
        <div class="card card-light mb-3">
            <h6 class="card-header">
                <div class="panel-heading">
                    <Strong>Ruta detalles</Strong>
                </div>
            </h6>
            <div class="card-body">
                <hr class="hidden-xs hidden-md">
                <form action="{{ route('actualizar_ruta', $ruta->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('ruta.form')
                </form>
            </div>


        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/general/registro.css">
@stop

@section('js')
    <script src="/js/rutas/registro.js"></script>
    <script src="/js/general/cargarImagen.js"></script>
@stop

