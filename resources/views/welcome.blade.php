@extends('layouts.app')
@section('content')
<h1> Bienvenido </h1>
	<!-- Logeado -->
	@auth
	    @if (Auth::user()->perfil == "Empleado")
	            <div class="card-body">EMPLEADO</div>
	            @else
	             <div class="card-body">CLIENTE</div>
	    @endif 
	@endauth

	<!-- Visita -->
	@guest
	<div class="card-body">VISITA</div>
	@endguest
@endsection