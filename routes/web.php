<?php
//use Symfony\Component\Routing\Route;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get("/", "AdminController@index");
Route::get("/crear", "AdminController@create");
Route::get("/articulos", "AdminController@store");
Route::get("/mostrar", "AdminController@show");
Route::get("/contacto", "AdminController@contactar");
Route::get("/galeria", "AdminController@galeria");