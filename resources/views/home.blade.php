@extends('layouts.app')

@section('content')

<h1>Bienvenido a GameQuest</h1>

<p>
    GameQuest es una plataforma diseñada para que la comunidad pueda
    reportar problemas, sugerencias o situaciones importantes dentro de 
    la zona. Nuestro objetivo es mantener un entorno seguro, organizado 
    y eficiente para todos.
</p>

<br>

<a class="btn" href="{{ route('reportes.create') }}">Crear un Reporte</a>
<a class="btn" href="{{ route('reportes.index') }}" style="background:#2b2d42;">Ver Reportes</a>

<br><br>

<div class="card">
    <h2>¿Qué puedes hacer aquí?</h2>
    <ul>
        <li>📌 Reportar problemas en tu comunidad</li>
        <li>📊 Ver reportes hechos por otras personas</li>
        <li>⚠ Evaluar si un problema ya fue atendido</li>
        <li>🤖 Recibir análisis generado con IA (opcional)</li>
    </ul>
</div>

@endsection
