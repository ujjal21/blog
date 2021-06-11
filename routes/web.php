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
})->name('homepage');

Route::prefix('json')->name('json.')->group(function(){
    Route::get('index', 'JsonController@index')->name('index');
    Route::get('complex', 'JsonController@complex')->name('complex');
    Route::get('more-complex', 'JsonController@moreComplex')->name('morecomplex');
    Route::get('array-example', 'JsonController@arrayExample')->name('array_example');
    Route::get('ajax-example', 'JsonController@ajaxExample')->name('ajax_example');
});
