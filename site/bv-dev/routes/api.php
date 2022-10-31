<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('client-create', [ClientController::class, 'serviceClientCreate'])->name('service-client-create');
Route::post('client-update', [ClientController::class, 'serviceClientUpdate'])->name('service-client-update');
Route::get('client-list', [ClientController::class, 'serviceClientList'])->name('service-client-list');
Route::post('client-delete', [ClientController::class, 'serviceClientDelete'])->name('service-client-delete');
