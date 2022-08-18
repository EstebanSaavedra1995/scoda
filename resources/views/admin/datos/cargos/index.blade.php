@extends('adminlte::page')

@section('title', 'Personal')

@section('content_header')
    <a href="{{ route('datos.cargos.create') }} " class="btn btn-secondary btn-sm float-right">Nuevo Cargo</a>
    <h1>Lista de Cargos</h1>
@stop

@section('content')
    @if (session('info'))
        <strong>
            <div class="alert-success">{{ session('info') }}</div>
        </strong>
    @endif
    <div class="card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Cargo</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($cargos as $cargo)
                    <tr>
                        <td>{{ $cargo->Cargo}}</td>
                        <td width="10px"><a href="{{ route('datos.cargos.edit', $cargo->id) }}" type="submit"
                                class="btn btn-primary">Editar</a></td>
                        <td width="10px">
                            <form action="{{ route('datos.cargos.destroy', $cargo->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('css')
    @livewireStyles
@stop

@section('js')
    @livewireScripts
@stop
