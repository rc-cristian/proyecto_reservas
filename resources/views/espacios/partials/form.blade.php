<form method="POST" 
action="{{ isset($espacio) ? route('espacios.update',$espacio) : route('espacios.store') }}"
class="space-y-4">
@csrf
@if(isset($espacio)) @method('PUT') @endif

<div>
<label class="font-semibold">Nombre</label>
<input class="w-full border p-2 rounded" name="nombre" value="{{ $espacio->nombre ?? '' }}">
</div>

<div>
<label class="font-semibold">Capacidad</label>
<input class="w-full border p-2 rounded" type="number" name="capacidad" value="{{ $espacio->capacidad ?? '' }}">
</div>

<button class="bg-green-600 text-white px-4 py-2 rounded">Guardar</button>
</form>
