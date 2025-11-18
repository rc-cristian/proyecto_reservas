<x-layout>
<h1 class="text-2xl font-bold mb-4">Lista de Reservas</h1>
<a href="{{ route('reservas.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Crear Reserva</a>

<table class="w-full mt-4 bg-white rounded shadow">
<tr class="bg-gray-200 text-left">
<th class="p-2">Espacio</th>
<th class="p-2">Día</th>
<th class="p-2">Horario</th>
<th class="p-2">Personas</th>
<th class="p-2">Acciones</th>
</tr>
@foreach($reservas as $r)
<tr class="border-b">
<td class="p-2">{{ $r->espacio->nombre }}</td>
<td class="p-2">{{ $r->dia }}</td>
<td class="p-2">{{ $r->horario }}</td>
<td class="p-2">{{ $r->cantidad_personas }}</td>
<td class="p-2 flex space-x-2">
<a href="{{ route('reservas.edit',$r) }}" class="text-yellow-600 font-semibold">Editar</a>
<form method="POST" action="{{ route('reservas.destroy',$r) }}">@csrf @method('DELETE')
<button class="text-red-700 font-semibold">Eliminar</button></form>
</td>
</tr>
@endforeach
</table>

<div class="mt-4">
{{ $reservas->links() }}
</div>
</x-layout>
