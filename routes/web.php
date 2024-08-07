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
//
Route::get('/', function () {
    return view('welcome');
});

Route::resource('/product','ProductController');
//only tanımlamasından sonra belirli methodlar kullanılabilir sadece. ->only(['index','show']);
//except 'de ise seçiçiler hariç tüm methodları aktif kullanabilirsiniz.

Route::get('/secured',function ()
{
   return "You are authenticated";
})->middleware('auth');
//Çalışma devam ediyor.


Route::get('mlogin', 'mloginController@index')->name('mlogin');
Route::get('mlogout', 'mloginController@mlogout')->name('mlogout');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/upload', 'HomeController@upload_form')->name('upload_form');
