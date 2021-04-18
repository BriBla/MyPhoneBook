<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\CollaborateurController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/entreprise', function () {
    $entreprises = DB::table('entreprises')->get();
    return view('entreprise', ['entreprise' => $entreprises]);
})->middleware(['auth'])->name('entreprise');

Route::get('/entreprise/create', function (){
    $entreprises = DB::table('entreprises')->get();
    return view('createEntreprise', ['entreprise' => $entreprises]);
})->middleware('gestionnaire');

Route::get('/entreprise/search/', 'App\Http\Controllers\EntrepriseController@search')->name('entreprise.search')->middleware(['auth']);
Route::post('/entreprise/create', 'App\Http\Controllers\EntrepriseController@create')->name('entreprise.create')->middleware(['auth']);
Route::post('/entreprise/store', 'App\Http\Controllers\EntrepriseController@store')->name('entreprise.store')->middleware(['auth']);
Route::delete('/entreprise/delete/{id}', 'App\Http\Controllers\EntrepriseController@destroy')->name('entreprise.destroy')->middleware('admin');
Route::get('/entreprise/{id}', 'App\Http\Controllers\EntrepriseController@show')->name('entreprise.show')->middleware(['auth']);
Route::get('/entreprise/update/{id}', 'App\Http\Controllers\EntrepriseController@edit')->name('entreprise.edit')->middleware('gestionnaire');
Route::post('/entreprise/edit/{id}', 'App\Http\Controllers\EntrepriseController@update')->name('entreprise.update')->middleware('gestionnaire');


Route::get('/collaborateur', function () {
    $collaborateurs = DB::table('collaborateurs')->get();
    return view('collaborateur', ['collaborateur' => $collaborateurs]);
})->name('collaborateur')->middleware(['auth']);

Route::get('/collaborateur/create', function (){
    $collaborateurs = DB::table('collaborateurs')->get();
    return view('createcollaborateur', ['collaborateur' => $collaborateurs]);
})->middleware('gestionnaire')->middleware('gestionnaire');

Route::get('/collaborateur/search/', 'App\Http\Controllers\CollaborateurController@search')->name('collaborateur.search');
Route::post('/collaborateur/create', 'App\Http\Controllers\CollaborateurController@create')->name('collaborateur.create')->middleware(['auth']);
Route::post('/collaborateur/store', 'App\Http\Controllers\CollaborateurController@store')->name('collaborateur.store')->middleware(['auth']);
Route::delete('/collaborateur/delete/{id}', 'App\Http\Controllers\CollaborateurController@destroy')->name('collaborateur.destroy')->middleware('admin');
Route::get('/collaborateur/{id}', 'App\Http\Controllers\CollaborateurController@show')->name('collaborateur.show')->middleware(['auth']);
Route::get('/collaborateur/update/{id}', 'App\Http\Controllers\CollaborateurController@edit')->name('collaborateur.edit')->middleware('gestionnaire');
Route::post('/collaborateur/edit/{id}', 'App\Http\Controllers\CollaborateurController@update')->name('collaborateur.update')->middleware('gestionnaire');

require __DIR__.'/auth.php';
