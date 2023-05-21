@extends('adminlte::page')

@section('title', 'registro puente')

@section('content_header')
@stop

@section('content')

<div class="container">
    <div class="page-header">
        <h3 class="font-weight-light mb-3 pt-3">
            <a style="text-decoration:none; color:inherit" href="{{ route('lista_puentes') }}">
                <img src="/img/puente.png" alt="puente">
                Puentes
            </a>
        </h3>
        <hr>
    </div>

    <div class="col-xs-12 detail-view">
        <div class="card card-light mb-3">
            <h6 class="card-header">
                <div class="panel-heading">
                    <Strong>Puente detalles</Strong>
                </div>
            </h6>
            <div class="card-body">
                <hr class="hidden-xs hidden-md">
                <form action="{{ route('registrarPuente') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('puente.form')
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
    <script src="/js/puentes/registro.js"> </script>
    <script src="/js/general/cargarImagen.js"></script>

@stop
