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

// tutto quello che dovrà caricare farà parte della cartella admin
Route::prefix('admin')  //prefisso della rotta
    ->namespace('Admin')  //definisce la cartella in cui ho salvato il mio controller
    ->middleware('auth')    //filtro per autentificazione
    ->name('admin.')    //il nome della rotta sarà ad esempio admin.posts.index perchè avrò anche delle rotte pubbliche con la stessa rotta posts.index
    ->group(function() {

        Route::resource('posts', 'PostController'); //ora questa istruzione creerà tutte le rotte con il prefisso admin

        //posso inserire anche altre rotte perchè sono dentro ad un gruppo di rotte

});

