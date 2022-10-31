<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    //metodo index

    public function viewClientList()
    {
        return view("client-list");
    }

    public function viewClientCreate()
    {
        return view("view-client-create");
    }
    /**
     * realizar registro
     */

    public function viewClientUpdate()
    {
        return view("viewClientUpdate");
    }
}
