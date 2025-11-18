<form method="POST"
action="{{ isset($reserva) ? route('reservas.update',$reserva) : route('reservas.store') }}"
class="space-y-4">
@csrf
@if(isset($reserva)) @method('PUT') @endif

<div>
<label class="font-semibold">Espacio</label>
<select name="espacio_id" class="w-full border p-2 rounded">
@foreach($espacios as $e)
<option value="{{ $e->id }}" @if(isset($reserva) && $reserva->espacio_id==$e->id) selected @endif>
{{ $e->nombre }}
</option>
@endforeach
</select>
</div>

<div>
<label class="font-semibold">Día</label>
<input type="date" name="dia" class="w-full border p-2 rounded" value="{{ $reserva->dia ?? '' }}">
</div>

<div>
<label class="font-semibold">Horario</label>
<input name="horario" class="w-full border p-2 rounded" value="{{ $reserva->horario ?? '' }}">
</div>

<div>
<label class="font-semibold">Cantidad de Personas</label>
<input type="number" name="cantidad_personas" class="w-full border p-2 rounded"
value="{{ $reserva->cantidad_personas ?? '' }}">
</div>

<button class="bg-green-600 text-white px-4 py-2 rounded">Guardar</button>
</form>
