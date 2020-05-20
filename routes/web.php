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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/app', 'HomeController@app');

Route::get('/homee', 'HomeController@homePage');

Route::get('/teste', 'HomeController@teste')->name('teste');

Route::post('/teste', 'HomeController@cadastrar');
// Chama as Categorias 
Route::get('categoria','CategoriaController@index');

// Chama as SubCategorias
Route::get('categoria/subcategoria/{request}','CategoriaController@subcategoria');

/*
Route::get('categoria/{request}','CategoriaController@store');

Route::post('categoria/{request}','CategoriaController@store');
*/
Route::get('categoria/Hardware','CategoriaController@hardware')->name('hardware');

Route::get('categoria/Software','CategoriaController@software')->name('software');

Route::get('categoria/find/{request}','CategoriaController@find');

Route::get('categoria/subcategoria/{request}','CategoriaController@subcategoria');

















