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
  public function show($id)
    {
        $user = User::findOrfail($id);


        return view('users.show', compact('user'));
    }
  Public function create()
 {
    return 'Crear nuevo usuario';
 }

}
