@extends('layouts.app')

@section('content')
<h1>🤖 Análisis con IA del reporte</h1>

<h3>{{ $report->titulo }}</h3>
<p>{{ $report->descripcion }}</p>

<hr>

@if($resultado)
    <p><strong>Categoría detectada:</strong> {{ $resultado['categoria'] ?? 'N/D' }}</p>
    <p><strong>Gravedad:</strong> {{ $resultado['gravedad'] ?? 'N/D' }}</p>
    <p><strong>Prioridad:</strong> {{ $resultado['prioridad'] ?? 'N/D' }}</p>
    <p><strong>Sugerencias:</strong> {{ $resultado['sugerencias'] ?? 'N/D' }}</p>

    <h4>Respuesta sugerida al ciudadano:</h4>
    <p>{{ $resultado['respuesta'] ?? 'N/D' }}</p>
@else
    <p>No se recibió un análisis válido de la IA.</p>
@endif

<a href="{{ route('reportes.show', $report->id) }}" class="btn btn-secondary mt-3">
    Volver al reporte
</a>
@endsection


