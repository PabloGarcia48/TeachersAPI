<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\OperationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/teste', function(Request $request){

    return response()->json(['success' => true, 'msg' => "Bem-vindo a API de Pablo lindão"]);

});
Route::get('/car', function(Request $request){

    return response()->json(['success' => true, 'msg' => "ENTREI EM INGLES"]);

});

Route::resource('/carros', CarController::class);