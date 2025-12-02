@extends('layouts.app')

@section('content')
<style>
    #map {
        height: 80vh;
        border-radius: 10px;
    }

    .side-form {
        background: #fff;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        height: 80vh;
        overflow-y: auto;
    }

    .container-map {
        display: grid;
        grid-template-columns: 65% 35%;
        gap: 20px;
    }
</style>

<div class="container-map">

    <div id="map"></div>

    <div class="side-form">
        <h2>📍 Crear Reporte</h2>
        <p>Haz clic en el mapa para seleccionar la ubicación.</p>

        <form action="{{ route('reportes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-2">
                <label>Título</label>
                <input class="form-control" name="titulo" required>
            </div>

            <div class="mb-2">
                <label>Categoría (baches, alumbrado, basura, etc.)</label>
                <input class="form-control" name="categoria">
            </div>

            <div class="mb-2">
                <label>Descripción</label>
                <textarea class="form-control" name="descripcion" rows="4" required></textarea>
            </div>

            <div class="mb-2">
                <label>Latitud</label>
                <input class="form-control" id="lat" name="latitud" readonly>
            </div>

            <div class="mb-2">
                <label>Longitud</label>
                <input class="form-control" id="lng" name="longitud" readonly>
            </div>

            <div class="mb-3">
                <label>Foto (opcional)</label>
                <input type="file" class="form-control" name="foto">
            </div>

            <button class="btn btn-primary w-100">Enviar reporte</button>
        </form>
    </div>
</div>

{{-- Leaflet --}}
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
    var map = L.map('map').setView([20.6, -100.4], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
    }).addTo(map);

    var marker;

    map.on('click', function(e){
        if (marker) map.removeLayer(marker);

        marker = L.marker(e.latlng).addTo(map);

        document.getElementById('lat').value = e.latlng.lat.toFixed(6);
        document.getElementById('lng').value = e.latlng.lng.toFixed(6);
    });
</script>
@endsection
