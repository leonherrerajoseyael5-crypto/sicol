@extends('layouts.app')

@section('content')

<h1>📊 Análisis con IA</h1>

<div class="card">
    <h2>{{ $report->titulo }}</h2>
    <p>{{ $report->descripcion }}</p>
</div>

<br>

<div class="card">
    <h3>🧠 Resultados del análisis</h3>

    <p><strong>Categoría:</strong> {{ $analysis['categoria'] }}</p>
    <p><strong>Gravedad:</strong> {{ $analysis['gravedad'] }}</p>
    <p><strong>Prioridad:</strong> {{ $analysis['prioridad'] }}</p>
    <p><strong>Sugerencias:</strong> {{ $analysis['sugerencias'] }}</p>

    <h3>💬 Respuesta automática:</h3>
    <p>{{ $analysis['respuesta'] }}</p>
</div>

<a class="btn" href="{{ route('reportes.show', $report->id) }}">Volver</a>

@endsection
