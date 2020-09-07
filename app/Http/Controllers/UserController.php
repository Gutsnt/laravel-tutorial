<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    Public function index()
  {
           if(request()->has('empty')){
              $users = [];
       }
           else{
               $users = [
                    'Joel','Perez','javier',
                        ];
               }


     $title = 'Listado de usuario';

     return view('users', compact('title','users'));
  }
  Public function show($id)
  {
   return "Mostrar detalles del usuario: {$id}";
  }
  Public function create()
 {
    return 'Crear nuevo usuario';
 }

}
