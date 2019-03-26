@extends('layouts.app')


@section('content')
    <h1>{{ $title }}</h1>

    <ul>
        @forelse ($users as $user)

            <li><a href="{{route('usuarios.details',['id' => $user->id])}}">{{$user->name}}</a></li>
        @empty
            <li>No hay usuarios registrados.</li>
        @endforelse
    </ul>
@endsection

