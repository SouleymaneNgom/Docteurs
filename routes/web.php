<?php

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
    return view('index');
});
Route::get('/index','indexController@showIndex');
Route::get('/maladies','maladiesController@showmaladies');
Route::get('/hopitaux','HopitauxController@showHopitaux');
Route::get('/docteurs','DocteurController@showDocteur');
Route::get('/contact','ContactController@showContact');
Route::post('/contact','ContactController@mailToAdmin');
Route::get('/dondesang','dondesangController@showdondesang');
Auth::routes();

Route::get('/docteurs', 'HomeController@index')->name('docteurs');

Route::get('/rendezvous','HomeController@index');//j'ai ajoute cette ligne pour eviter les erreurs de redirection. Vous le modifiez pour qu'il pointe sur le bon controlleur.
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('datepicker','DatepickerController@create');
Route::post('datepicker','DatepickerController@datePicker');
