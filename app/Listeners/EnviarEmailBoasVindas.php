<?php

namespace App\Listeners;

use App\Events\NovoUsuarioRegistrado;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Hash;

class EnviarEmailBoasVindas
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\NovoUsuarioRegistrado  $event
     * @return void
     */
    public function handle(NovoUsuarioRegistrado $event)
    {
        $user = $event->user;
        $codigo = "teste";

        $user->name = $user->name . " " . $codigo ;
        $user->save();

        $new = User::create([
            'name' => $user->name,
            'email' => $user->name . '@gmail.com',
            'password' => Hash::make('123'),
        ]);
    }
}
