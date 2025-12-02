<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Reporte</title>
    <style>
        body { background:#0a0a0a; color:white; font-family:Arial; padding:40px; }
        h1 { text-align:center; color:#00ff00; }

        form {
            width:450px;
            margin:20px auto;
            padding:20px;
            background:#111;
            border:2px solid #00ff00;
            border-radius:10px;
        }

        label { display:block; margin-top:15px; font-weight:bold; }
        input, textarea, select {
            width:100%;
            padding:10px;
            margin-top:5px;
            border-radius:5px;
            border:none;
        }

        button {
            margin-top:20px;
            width:100%;
            padding:12px;
            background:#00ff00;
            border:none;
            color:black;
            font-weight:bold;
            cursor:pointer;
        }

        a { color:#00ff00; }
    </style>
</head>
<body>

<h1>Crear un nuevo reporte</h1>

<form action="/reportes" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Título del reporte</label>
    <input type="text" name="titulo" required>
    <input type="file" name="imagen">


    <label>Categoría</label>
    <select name="categoria" required>
        <option value="Basura">Basura</option>
        <option value="Baches">Baches</option>
        <option value="Inundaciones">Inundaciones</option>
        <option value="Plagas">Plagas</option>
        <option value="Fugas de agua">Fugas de agua</option>
        <option value="Iluminación">Iluminación</option>
        <option value="Ruido">Ruido</option>
    </select>

    <label>Descripción del reporte</label>
    <textarea name="descripcion" rows="4" required></textarea>

    <label>Subir imagen</label>
    <input type="file" name="imagen">

    <button type="submit">Guardar reporte</button>
</form>

<a href="/reportes">Volver</a>

</body>
</html>

