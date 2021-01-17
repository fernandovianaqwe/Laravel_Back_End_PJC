<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConsultasController;
use App\Http\Controllers\InertController;

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

//endpoints
//endpint para login
Route::post('login', [AuthController::class , 'login']);
//endpint para login
Route::post('register', [AuthController::class , 'register']);

Route::group(['middleware' => 'jwt', 'prefix' => 'auth'], function ($router) {
    //endpint para logout
    Route::post('logout', [AuthController::class , 'logout']);
    //endpint para refresh do token
    Route::post('refresh', [AuthController::class , 'refresh']);
    //endpint para cadastrar cantores
    Route::post('cadastrarcantores', [InertController::class , 'cadastrarcantores']);
    //endpint para cadastrar cantores
    Route::post('cadastraalbuns', [InertController::class , 'cadastraalbuns']);
});


