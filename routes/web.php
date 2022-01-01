<?php

use App\Http\Controllers\UserController;
use App\Models\Ciudad;
use App\Models\Departamento;
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

Route::get('users', [UserController::class, 'index']);


Route::get('traerDepartamentosCiudades', function(){

    $departamentos = Departamento::all();
    $ciudades = Ciudad::all();

    return response()->json([
        'departamentos' => $departamentos,
        'ciudades' => $ciudades,
        200
    ]);

});