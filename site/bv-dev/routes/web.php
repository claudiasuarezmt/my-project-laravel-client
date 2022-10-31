<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('clientes', [ClientController::class, 'index'])->name('clients.index');
Route::get('clientes/nuevo', [ClientController::class, 'create'])->name('clients.create');
Route::post('clientes/save', [ClientController::class, 'save'])->name('clients.save');
//Route::get("clientes{client}", [ClientController::class, 'show'])->name("clients.show");
//Route::get("saludo{first_name}", [WelcomeClientController::class, 'index']);

//Route::get("clientes/{client}/editar", [ClientController::class, 'edit'])->name("clients.edit");
//Route::put("clientes/{client}", [ClientController::class, 'update']);
//Route::delete("clientes/{client}", [ClientController::class, 'destroy'])->name("clients.destroy");
