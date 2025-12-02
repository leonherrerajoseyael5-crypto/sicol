<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SICOL – Sistema Integral de Control y Observación Local</title>

    <!-- Fuente institucional -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: #f1f4f9;
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* NAVBAR ESTILO GOBIERNO */
        .navbar {
            background: #003366; /* Azul institucional */
            padding: 15px 30px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .navbar-title {
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .navbar a {
            color: #e8eef5;
            margin-left: 20px;
            text-decoration: none;
            font-weight: 600;
            transition: .2s;
        }

        .navbar a:hover {
            color: #ffffff;
        }

        /* CONTENEDOR */
        .container {
            max-width: 980px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.10);
        }

        .title-icon {
            font-size: 28px;
            color: #003366;
            margin-right: 10px;
        }

        /* BOTÓN */
        .btn {
            padding: 10px 16px;
            background: #0055a5;
            color: white !important;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: .2s;
        }

        .btn:hover {
            background: #003c7a;
        }

        /* TARJETA */
        .card {
            padding: 18px;
            background: #f7f9fc;
            border-left: 4px solid #003366;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        /* ESTADOS */
        .estado {
            font-size: 14px;
            margin-bottom: 10px;
            padding: 5px 8px;
            border-radius: 5px;
            color: white;
            display: inline-block;
        }

        .pendiente { background: #e6a200; }
        .resuelto { background: #28a745; }

    </style>

</head>
<body>

    <!-- NAVBAR -->
    <div class="navbar">
        <div class="navbar-title">
            <i class="fa-solid fa-shield-halved"></i> SICOL
        </div>

        <div>
            <a href="{{ route('reportes.index') }}"><i class="fa-solid fa-house"></i> Inicio</a>
            <a href="{{ route('reportes.create') }}"><i class="fa-solid fa-file-circle-plus"></i> Crear reporte</a>
        </div>
    </div>

    <!-- CONTENIDO -->
    <div class="container">
        @yield('content')
    </div>

</body>
</html>


