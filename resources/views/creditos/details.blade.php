@extends('layouts.app')


@section('content')
<h1>Credito N°{{ $credito->id }}</h1>
<ul>
<li>Cliente: {{$credito->user->name}} </li>
<li>Rut: {{$credito->user->rut}} </li>
<li>Telefono: {{$credito->user->phone_number}} </li>
<li>Email: {{$credito->user->email}} </li>
</br>
<li>Monto: {{$credito->monto}} </li>
<li>Primer Vencimiento: {{$credito->primer_vencimiento}} </li>
<li>Estado: {{$credito->estado}} </li>

@if($credito->estado != 'Aprobado')
<form action="{{route('creditos.aprobar',['id' => $credito->id])}}">
	<input type="submit" value="Aprobar Credito" />
</form>
@endif

<a href="{{route('creditos')}}"> Regresar </a>
</ul>
@endsection