<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class users extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('user.index')
            ->with('usuarios',$usuarios);
    }

    public function create()
    {
        $roles = Role::all();
        return view('user.create')
            ->with('roles',$roles);
    }

    public function store(Request $request)
    {
        $usuario = User::create([
            'user'          =>  $request->user,
            'first_name'    =>  $request->first_name,
            'last_name'     =>  $request->last_name,
            'email'         =>  $request->email,
            'identity'      =>  $request->identity,
            'role_id'       =>  $request->role_id,
            'password'      =>  bcrypt($request->password),
        ]);
        return redirect(route('usuarios.index'));
    }

    public function show($id)
    {
        $usuario = User::find($id);
        return view('user.show')->with('usuario',$usuario);
    }

    public function edit($id)
    {
        $usuario = User::find($id);
        return view('user.edit')->with('usuario',$usuario);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
