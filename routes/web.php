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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/enregistreVendeur', 'App\Http\Controllers\HomeController@funcEnregistreVendeur')->name('enregistreVendeur');
Route::post('/enregistreVendeur', 'App\Http\Controllers\HomeController@crerVendeur')->name('enregistreVendeur');

Route::post('/contrat', 'App\Http\Controllers\ContratsController@crerContrat')->name('contrat');


Route::get('/places', 'App\Http\Controllers\HomeController@funcPlaces')->name('places');
Route::post('/places', 'App\Http\Controllers\HomeController@crerSecteur')->name('places');


Route::get('/enregistrePayement', 'App\Http\Controllers\HomeController@funcEnregistrePayement')->name('enregistrePayement');

Route::get('/liste-comm', 'App\Http\Controllers\CommercantsController@index')->name('listecomm');


Route::get('/mensuele', 'App\Http\Controllers\HomeController@funcMensuele')->name('mensuele');
Route::get('/annuel', 'App\Http\Controllers\HomeController@funcAnnuele')->name('annuel');



Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
});

Route::get('generate-pdf', [App\Http\Controllers\PDFController::class, 'generatePDF'])->name('imprimer');