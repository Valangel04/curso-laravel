<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitaciones</title>
</head>
<body>
    <h1>Habitaciones</h1>
    <form action="{{ route('habitacion.store') }}" method="POST">
        @csrf
        <label for="numero">Número:</label>
        <input type="text" name="numero" id="numero" required>
        <br>
        <label for="precio">Precio:</label>
        <input type="text" name="precio" id="precio" required>
        <br>
        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" id="tipo" required>
        <br>
        <button type="submit">Guardar Habitación</button>
    </form>
</body>
</html>
