<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::get('/ajouterEmploye', function () {
    return view('vues/formEmployeAjouter');
});
Route::post('/postEmploye','App\Http\Controllers\EmployeControleur@postAjouterEmploye');
Route::get('/modifierEmploye/{id}','App\Http\Controllers\EmployeControleur@modifier');
Route::post('/postmodifierEmploye/{id}','App\Http\Controllers\EmployeControleur@postmodifier');
Route::get('/listerEmploye','App\Http\Controllers\EmployeControleur@listerEmployes');
Route::get('/listerEquipe','App\Http\Controllers\EquipeController@listerEquipe');
Route::get('/ajouterEquipe', function () {
    return view('vues/formEquipeAjouter');
});
Route::post('/postEquipe','App\Http\Controllers\EquipeController@postAjouterEquipe');
Route::get('/modifierEquipe/{id}','App\Http\Controllers\EquipeController@modifierEquipe');
Route::post('/postmodifierEquipe/{id}','App\Http\Controllers\EquipeController@postmodifierEquipe');


