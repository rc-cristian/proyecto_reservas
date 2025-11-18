<x-layout>
<h1 class="text-2xl font-bold mb-4">Lista de Espacios</h1>
<a href="{{ route('espacios.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Crear Espacio</a>

<table class="w-full mt-4 bg-white rounded shadow">
<tr class="bg-gray-200 text-left">
<th class="p-2">Nombre</th>
<th class="p-2">Capacidad</th>
<th class="p-2">Acciones</th>
</tr>
@foreach($espacios as $e)
<tr class="border-b">
<td class="p-2">{{ $e->nombre }}</td>
<td class="p-2">{{ $e->capacidad }}</td>
<td class="p-2 flex space-x-2">
<a href="{{ route('espacios.edit',$e) }}" class="text-yellow-600 font-semibold">Editar</a>
<form method="POST" action="{{ route('espacios.destroy',$e) }}">
@csrf @method('DELETE')
<button class="text-red-700 font-semibold">Eliminar</button>
</form>
</td>
</tr>
@endforeach
</table>

<div class="mt-4">
{{ $espacios->links() }}
</div>
</x-layout>
