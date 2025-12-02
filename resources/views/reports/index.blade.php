@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="card p-4 shadow-lg">

        <h1 class="mb-4">
            📊 <strong>Reportes de la Comunidad</strong>
        </h1>

        <a class="btn btn-danger mb-3" href="{{ route('reportes.create') }}">
            + Crear reporte en el mapa
        </a>

        <div class="row">

            @foreach($reports as $report)
            <div class="col-md-6">

                <div class="card mb-3 shadow-sm" style="border-radius: 12px;">
                    <div class="card-body">

                        {{-- IMAGEN --}}
                        @if($report->foto)
                            <img src="{{ asset('storage/'.$report->foto) }}" 
                                class="img-fluid rounded mb-3" 
                                style="max-height: 200px; object-fit: cover;">
                        @endif

                        {{-- TÍTULO --}}
                        <h4 class="fw-bold">{{ $report->titulo }}</h4>

                        {{-- CATEGORÍA --}}
                        <p class="text-secondary mb-1">
                            <strong>Categoría:</strong> {{ $report->categoria }}
                        </p>

                        {{-- DESCRIPCIÓN --}}
                        <p>{{ $report->descripcion }}</p>

                        {{-- ESTADO --}}
                        <p><strong>Estado:</strong> 
                            <span class="badge bg-warning text-dark">{{ ucfirst($report->estado) }}</span>
                        </p>

                        {{-- UBICACIÓN --}}
                        @if($report->latitud && $report->longitud)
                            <p class="text-muted">
                                📍 {{ $report->latitud }}, {{ $report->longitud }}
                            </p>
                        @endif

                        {{-- BOTONES --}}
                        <a class="btn btn-primary btn-sm" href="{{ route('reportes.show', $report->id) }}">
                            Ver detalle
                        </a>

                        <a class="btn btn-dark btn-sm" href="{{ route('reportes.ia', $report->id) }}">
                            🤖 Analizar con IA
                        </a>

                    </div>
                </div>

            </div>
            @endforeach

        </div>

    </div>
</div>

@endsection













