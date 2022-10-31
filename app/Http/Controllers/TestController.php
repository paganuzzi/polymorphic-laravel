<?php

namespace App\Http\Controllers;

use App\Models\Tasador;
use App\Models\User;

class TestController extends Controller
{
    public function index()
    {
        //en caso de usuario logueado sera Auth::id();
        $user = User::find(1);

        /*  en tu controller deberas decidir si es tasador o profesional y
            realizar el alta de ese registro en mi caso inserte directamente
        */
        $tasador = Tasador::create([
            'address' => 'Adress Test'
        ]);

        /*  asi creas un nuevo registro asociado al usuario, en el caso del profesional
            cambia $tasador por $profesional
            En esta instancia podrias usar updateOrCreate para menejar los registros en la tabla ocupaciones
        */

        $tasador->ocupation()->create(['user_id' => $user->id]);


        //Vuelvo a consultar el usuario y le pido que me traiga la informacion asociada
        $user = User::with('ocupation', 'ocupation.rol')->find(1);
        return $user;
    }
}
