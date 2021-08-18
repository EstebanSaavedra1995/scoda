@extends('adminlte::page')

@section('title', 'Horarios Maquinas')

@section('content_header')
<div class="container">
    <div class="row">
        <h2 class="col"> Orden de trabajo xxxx </h2>
        <div class="col"></div>
        <div class="col"> </div>
        <div></div>

    </div>
</div>
{{-- scripts --}}

{{-- scripts --}}
{{-- PUSHER --}}
@stop

@section('content')


<div id="pasos">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @livewireScripts
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <a href="{{ route('control.maquina') }}" class="btn btn-primary col-2" target="_blank" >Control</a>
    <div class="card card-secondary">
      {{--   @livewire("control-horarios")

        @livewire("horarios-lista") --}}
        {{-- <div class="card-header row">
            <h2 class="card-title col">Maquina xxxx </h2>
            <h2 class="card-title col" id="contadorPiezas">Total Piezas xxxx </h2>
        </div>

        <div class="card-body">
        
            <div class="row mb-2"> 
                <h2 id="screen" class="col mr-2">00:00:00</h2>
                <button onclick="start()" class=" btn btn-primary  col mr-2">Comenzar</button>
                <button onclick="stop()" class=" btn btn-primary  col mr-2">Pausa</button>
                <button onclick="resume()" class=" btn btn-primary  col mr-2">Continuar</button>
                <button onclick="reset()" class=" btn btn-primary  col mr-2">Terminar</button>
            </div>
    
        </div> --}}
    </div>
</div>

<script src="{{ asset('js/cronometro.js') }}"></script>
@stop

@section('css')
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@livewireStyles
@stop

@section('js')

@stop
