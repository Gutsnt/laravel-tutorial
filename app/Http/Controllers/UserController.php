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


     $title = 'Listado de usuarios';

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

  public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'alpha_num','between:6,14']
], [
   'name.required' => 'El campo nombre es obligatorio',
   'email.required' => 'El campo email es obligatorio',
   'email.email' => 'El correo no es valido',
   'email.uniqued' => 'El correo ya esta en uso',
   'password.required' => 'El campo password es obligatorio',
   'password.alpha_num' => 'Debe solo tener caractes alfanumericos',
   'password.between' => 'El password debe ser entre 6 y 14 digitos',

]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        return redirect()->route('users.index');
    }

Public function edit(User $user)
  {
        return view('users.edit', ['user' => $user]);
  }
Public function update(User $user)
  {
      $data = request()->validate([
       'name' => 'required',
       'email' => 'required|email',
       'password' => 'required',


]);

      $data['password'] = bcrypt($data['password']);

      $user->update($data);

        return redirect()->route('users.show', ['users ' => $user]);


  }
}
