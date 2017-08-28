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
    return view('welcome');
}); //1st page

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); //dashboard dekha jai
// Route::get('/getPDF','PDFController@getPDF');

Route::get('/about', function()
{
    return View('about');
});

Route::post('/store', 'HomeController@store'); //db te send kori data thn pdf genarator hoi thn email kori.

// Route::get('/send', 'mailController@send');