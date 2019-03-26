@extends('layouts.app')


@section('content')

    <h1>Creditos pendientes</h1>

  <table border="2">
    <tr>
        <th>Cliente</th>
        <th>Primer vencimiento</th>
        <th>Monto</th>
        <th>Estado</th>
        <th>-</th>
    </tr>
        @forelse ($creditos as $credito)
    <tr>
        <td>{{$credito->user->name}}</td>
        <td>{{$credito->primer_vencimiento}}</td>
        <td>{{$credito->monto}}</td>
        <td>{{$credito->estado}}</td>
        
        <td><a href="{{ route('creditos.details',['id' => $credito->id]) }}">Ver detalles</a></td>
        
    </tr>
        @empty
            <li>No hay creditos pendientes.</li>
        @endforelse
    </table>
@endsection