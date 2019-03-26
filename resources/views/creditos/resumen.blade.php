@extends('layouts.app')


@section('content')
  <h1>Resumen de simulación </h1>
  <ul>
  	<li>Monto: {{$credito->monto}}</li>
  	<li>Cuotas:{{$credito->cuotas}}</li>
  	<li>CAE:{{$credito->interes}}%</li>
  	<li>Costo total:{{$credito->costo_total}}</li>
  	<li>Primer vencimiento:{{$credito->primer_vencimiento}}</li>

  </ul>
  <h3>Estimado {{Auth::user()->name}} un ejecutivo se pondra en contacto con usted para gestionar su credito de consumo</h3>
@endsection