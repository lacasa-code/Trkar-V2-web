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

// Route::get('/', function () {
//     return view('home');
// });
// Route::resource('/category', [App\Http\Controllers\System\CategoryController::class, 'system']);
Route::group(['prefix'     => 'admin',], function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::resource('category', App\Http\Controllers\System\CategoryController::class,['as'=>'admin']);
    // Route::get('/category/create', [App\Http\Controllers\System\CategoryController::class]);

    Route::get('getCategories/search', ['as' => 'admin.getCategories', 'uses' => ' App\Http\Controllers\System\CategoryController@getCategories']);
    Route::post('getChilds/{id}', ['as' => 'admin.getChilds', 'uses' => 'App\Http\Controllers\System\CategoryController@getChilds']);

});