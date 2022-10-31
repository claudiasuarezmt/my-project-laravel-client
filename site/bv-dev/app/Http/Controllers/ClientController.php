<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    //metodo index

    public function index()
    {
        $texto = "Project LARAVEL";
        return view("clients/index", compact("texto"));
    }

    public function create()
    {
        return view("clients.create");
    }
    /**
     * realizar registro
     */

    public function save()
    {
        //validar datos
        $validar = request()->validate(
            [
                'txtfirstname' => 'required'
            ],
            ['txtfirstname.required' => 'the field is required ):']
        );
        //Registro cliente
        Client::create([
            'first_name' => request()->txtfirstname
        ]);
        return redirect()->route('clients.create')->with('result', 'client registred');
    }
}
