<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Ncontroller;
use App\Http\Controllers\SController;
use App\Http\Controllers\usuariocontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/not',[Ncontroller::class,'notas']);
Route::get('/s', [SController::class,'semestres']);
Route::get('usuarios', [usuariocontroller::class, 'index']);
Route::get('usuarios/t', [usuariocontroller::class, 'filterByName']);




