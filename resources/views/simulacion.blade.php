@extends('layouts.app')
@section('content')
@auth
   @if (Auth::user()->perfil == "Empleado")
            <div class="card-body">CLIENTE</div>
            @else
             <div class="card-body">EMPLEADO</div>
    @endif 
@endauth
@guest
<div class="card-body">VISITA</div>
@endguest



@endsection