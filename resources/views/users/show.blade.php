@extends('layouts.app')


@section('content')
<h1>{{ $user->name }}</h1>
<ul>
<li>Rut: {{$user->rut}} </li>
<li>Perfil: {{$user->perfil}} </li>
<li>Email: {{$user->email}} </li>
<li>Telefono: {{$user->phone_number}} </li>
<li>ID: {{$user->id}} </li>
<li><a href="{{route('usuarios')}}"> Regresar </a> </li>
</ul>
@endsection