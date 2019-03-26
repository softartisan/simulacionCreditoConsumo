@extends('layouts.app')

@section('content')
    <h1>Simular credito</h1>
<form method="POST" action="{{ route('creditos.guardar') }}">
	{!! csrf_field() !!}
<label for="monto">Monto</label>
<input type="number" name="monto" id="monto"/>
</br>
<label for="cuotas">Cuotas</label>
<input type="number" name="cuotas" id="cuotas"/>
</br>
<label for="primer_vencimiento">Primer Vencimiento</label>
<input type="date" name="primer_vencimiento" id="primer_vencimiento"/>
<input hidden="true" type="id" name="id" id="id" value="{{Auth::user()->id}}"/>

</br>
<button type="submit">Simular</button>
</form>
@endsection