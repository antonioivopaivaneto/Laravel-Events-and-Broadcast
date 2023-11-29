<?php

namespace App\Http\Controllers;

use App\Events\AtualizarContador;
use App\Events\NovoUsuarioRegistrado;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('registro');
    }
    public function showContador()
    {
        $totalUsuarios = User::count();

        return view('contador',compact('totalUsuarios'));
    }

    public function register(Request $request)
    {

     // dd($request['name']);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        event(new NovoUsuarioRegistrado($user));

        $totalUsuarios = User::count();

        event(new AtualizarContador($totalUsuarios));



        // Faça algo com o usuário registrado, como disparar um evento, redirecionar, etc.

        return redirect('/')->with('success', 'Usuário registrado com sucesso!');
    }


}
