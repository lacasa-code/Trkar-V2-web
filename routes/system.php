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
Route::group(['prefix'     => 'system',], function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::resource('category', App\Http\Controllers\System\CategoryController::class,['as'=>'system']);
    // Route::get('/category/create', [App\Http\Controllers\System\CategoryController::class]);

    Route::get('getCategories/search', ['as' => 'system.getCategories', 'uses' => ' App\Http\Controllers\System\CategoryController@getCategories']);

});

