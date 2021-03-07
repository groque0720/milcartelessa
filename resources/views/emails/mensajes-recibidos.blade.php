<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mensaje Recibido</title>
</head>
<body>
	<p><strong>Recibiste un mensaje de:</strong> {{ $mensaje['nombre'] }} - {{ $mensaje['email'] }}</p>
	<p><strong>Teléfono:</strong> {{ $mensaje['telefono'] }}</p>
	<p><strong>Mensaje :</strong> {{ $mensaje['mensaje'] }}</p>

</body>
</html>