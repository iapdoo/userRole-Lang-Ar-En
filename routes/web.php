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

// admin route
Route::group(['middleware'=>['web','admin']],function (){
    Route::get('/adminpanel', 'AdminController@index');
});
Route::get('lang/{lang}',function ($lang){

        session()->has('lang')?session()->forget('lang'):'';
        $lang=='ar'? session()->put('lang','ar'): session()->put('lang','en');
        return back();

});
