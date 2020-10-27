<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    Public function index()
  {
     $users = User::all();


     $title = 'Listado de usuario';

     return view('users.index', compact('title','users'));
  }
  Public function show($id)
  {
   return view('users.show', compact('id'));
  }
  Public function create()
 {
    return 'Crear nuevo usuario';
 }

}
