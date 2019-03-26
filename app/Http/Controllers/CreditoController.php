<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Credito;

class CreditoController extends Controller
{
   
//Muestra listado de creditos pendientes
public function index()
    {
      
        $creditos = Credito::all()->where('estado','En gestion');
       


        return view('creditos.index', compact('creditos'));
    }
//Muestra detalles de un credito en cuestión
public function show(Credito $credito)
    {
        return view('creditos.details', compact('credito'));
    }

    public function create()
    {
        return view('creditos.nuevo');
    }
//Aprueba un credito despues de ser gestionado por el empleado
    public function aprobar(Credito $credito)
{
       $credito->estado ="Aprobado";
       $credito->save();
       return view('creditos.details', compact('credito'));
    }
//Crea un credito para su posterior gestión
 public function store()
    {
        $data = request()->all();
        $credito = factory(Credito::class)->create([
        'estado' => 'En gestion',
        'user_id' => $data['id'],
        'monto' => $data['monto'],
        'cuotas' => $data['cuotas'],
        'primer_vencimiento' => $data['primer_vencimiento']
        ]);

        return view('creditos.resumen',compact('credito'));
    }


}
