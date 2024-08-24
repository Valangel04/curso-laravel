<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
</head>
<body>
    <h1>Reservas</h1>
    <form action="{{ route('reserva.store') }}" method="POST">
        @csrf
        <label for="fecha_entrada">Fecha de Entrada:</label>
        <input type="date" name="fecha_entrada" id="fecha_entrada" required>
        <br>
        <label for="fecha_salida">Fecha de Salida:</label>
        <input type="date" name="fecha_salida" id="fecha_salida" required>
        <br>
        <button type="submit">Guardar Reserva</button>
    </form>
</body>
</html>

