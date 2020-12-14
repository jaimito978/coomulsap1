<?php

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

Route::post('/guardandoForm','GuardandoFormController@guardandoForm')->name('guardandoForm');
Route::post('/antecedentes','GuardandoFormController@antecedentes')->name('antecedentes');
Route::post('/evaluacion','GuardandoFormController@evaluacion')->name('evaluacion');
Route::post('/formularios','GuardandoFormController@formularios')->name('formularios');

Route::get('/usuario/{id}','GuardandoFormController@usuario')->name('usuario');
Route::get('/borrar/{id}','GuardandoFormController@borrar')->name('borrar');

Route::patch('/update/{id}','GuardandoFormController@update')->name('GuardandoFormController.update');


Auth::routes();


Route::get('/antecedentes', 'HomeController@antecedentes')->name('antecedentes');
Route::get('/formularios', 'HomeController@formularios')->name('formularios');
Route::get('/evaluacion', 'HomeController@evaluacion')->name('evaluacion');
Route::get('/datos', 'HomeController@datos')->name('datos');
Route::get('/home', 'HomeController@index')->name('home');





