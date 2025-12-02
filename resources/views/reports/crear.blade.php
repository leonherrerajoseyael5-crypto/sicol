@extends('layouts.app')

@section('content')

<h1>Crear Nuevo Reporte</h1>

<form action="{{ route('reportes.store') }}" method="POST">
    @csrf

    <label>Título del reporte</label><br>
    <input type="text" name="titulo" required style="width:100%; padding:10px;">

    <br><br>

    <label>Categoría</label><br>
    <input type="text" name="categoria" required style="width:100%; padding:10px;">

    <br><br>

    <label>Descripción</label><br>
    <textarea name="descripcion" rows="5" style="width:100%; padding:10px;" required></textarea>

    <br><br>

    <button class="btn" type="submit">Enviar Reporte</button>
</form>

@endsection


