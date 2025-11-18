<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<title>Gestión de Reservas</title>
</head>
<body class="bg-gray-100 p-6">
<div class="max-w-4xl mx-auto bg-white shadow-xl rounded-xl p-6">
<nav class="flex space-x-4 mb-6">
    <a href="/espacios" class="text-blue-600 font-semibold">Espacios</a>
    <a href="/reservas" class="text-blue-600 font-semibold">Reservas</a>
</nav>
@if(session('ok'))
<div class="bg-green-200 text-green-900 p-3 rounded mb-4">
    {{ session('ok') }}
</div>
@endif
{{ $slot }}
</div>
</body>
</html>
