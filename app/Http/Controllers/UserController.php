<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    //Muestra listado de usuarios creados
    public function index()
    {
      
   $users = User::all();

        $title = 'Listado de usuarios';

        return view('users.index', compact('users','title'));
    }

//Muestra detalles de usuarios
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

}
