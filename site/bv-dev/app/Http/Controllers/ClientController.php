<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    //metodo index

    public function index(){
        $clients = Client::all();
       return view ("clients/index",compact('clients')); 
    }

    public function create(){
        $clients = Client::all();
       return view ("clients/create",compact('clients')); 
     }

     public function show(){
        return "Prueba mostrar detalles del cliente"; 
     }

     public function store(){

        $data =request()->all();
     
        Client::create([
            "first_name" => $data["first_name"],
            "last_name" => $data["last_name"],
            "email" => $data["email"],
            "phone" => $data["phone"]
        ]);

        return redirect()->route("clients,index");
     }
}
