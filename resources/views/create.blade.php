@extends('layout')

@section('title','Crear Servicio')

@section('content')
<h1>Crear nuevo servicio</h1>
<form action="{{ route('servicios.store') }}" method="post" style="max-width: 600px; margin: auto;">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="titulo" style="display: block; font-weight: bold;">Título</label>
        <input type="text" name="titulo" id="titulo" style="width: 100%; padding: 0.5em; box-sizing: border-box;">
        
            <span style="color: red;">{{ $errors->first('titulo') }}</span>
        
    </div>
    <div style="margin-bottom: 1em;">
        <label for="description" style="display: block; font-weight: bold;">Descripción</label>
        <input type="text" name="description" id="description" style="width: 100%; padding: 0.5em; box-sizing: border-box;">
        
            <span style="color: red;">{{ $errors->first('description') }}</span>
        
    </div>
    <div style="text-align: center;">
        <button type="submit" style="padding: 0.5em 2em; font-size: 1em;">Guardar</button>
    </div>
</form>
@endsection