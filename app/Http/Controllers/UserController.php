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
  public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
  Public function create()
 {
    return view('users.create');
 }

  Public function store()
 {

    $data = Request()->all();

    User::create([
       'name' => $data[name],
      'email' => $data[email],
      'password' => bcrypt(data['password'])
]);
     return redirect('usuarios');
 }

}
