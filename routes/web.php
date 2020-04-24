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


Route::get('/prof','ProfController@index');


Route::post('createClasse','ClasseController@createClasse');

Route::get('createClasseView','ClasseController@createClasseView');




// Route::post('createProf','ProfController@createProf');

// Route::get('createProfView','ProfController@createProfView');


Route::post('createCour','CourController@createCour');

Route::get('createCourView','CourController@createCourView');


Route::post('createDocument','DocumentController@createDocument');

Route::get('createDocumentView','DocumentController@createDocumentView');

Route::get('cour','DocumentController@index');
//Route::get('cour','DocumentController@docs');\




//cour 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
