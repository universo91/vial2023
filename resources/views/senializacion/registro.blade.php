@extends('adminlte::page')

@section('title', 'registro señalizacion')

@section('content_header')
@stop

@section('content')

<div class="container">
    <div class="page-header">
        <h3 class="font-weight-light mb-3 pt-3">
            <a style="text-decoration:none; color:inherit" href="">
                <img src="/img/senalizar.png" alt="senalizar">
                Señalizaciones
            </a>
        </h3>
        <hr>
    </div>

    <div class="col-xs-12 detail-view">
        <div class="card card-light mb-3">
            <h6 class="card-header">
                <div class="panel-heading">
                    <Strong>Señalizacion detalles</Strong>
                </div>
            </h6>
            <div class="card-body">
                <hr class="hidden-xs hidden-md">
                <form action="{{ route('registrarSenializacion') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('senializacion.form')
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
    <script src="/js/senializacion/registro.js"></script>
    <script src="/js/general/cargarImagen.js"></script>
@stop
