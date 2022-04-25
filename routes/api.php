<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\VerifyEmailController;


//auth routes
Route::middleware([ 'api','localization'])->group(function () {

    Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);
    Route::post('/register', [App\Http\Controllers\Api\AuthController::class, 'register']);
    Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);
    Route::post('/refresh', [App\Http\Controllers\Api\AuthController::class, 'refresh']);
    Route::get('/isValidToken', [App\Http\Controllers\Api\AuthController::class, 'isValidToken']);
    Route::get('/userProfile', [App\Http\Controllers\Api\AuthController::class, 'userProfile']);

});

Route::get('/email/resend',[App\Http\Controllers\Api\VerificationController::class, 'resend'] )->name('verification.resend');

Route::get('/email/verify/{id}/{hash}', [App\Http\Controllers\Api\VerificationController::class, 'verify'] )->name('verification.verify');
//countries routes
Route::middleware([ 'localization'])->group(function () {

    Route::get('/countries', [App\Http\Controllers\Api\CountryController::class, 'index']);
    Route::get('/country/{id}', [App\Http\Controllers\Api\CountryController::class, 'get_country']);
    Route::post('/create/country', [App\Http\Controllers\Api\CountryController::class, 'create']);
    Route::post('/update/country/{id}', [App\Http\Controllers\Api\CountryController::class, 'update']);
    Route::post('/delete/country/{id}', [App\Http\Controllers\Api\CountryController::class, 'delete']);

});

//cities routes
Route::middleware([ 'localization'])->group(function () {

    Route::get('/cities', [App\Http\Controllers\Api\CityController::class, 'all']);
    Route::get('/cities/{id}', [App\Http\Controllers\Api\CityController::class, 'index']);
    Route::get('/city/{id}', [App\Http\Controllers\Api\CityController::class, 'get_city']);
    Route::post('/create/city', [App\Http\Controllers\Api\CityController::class, 'create']);
    Route::post('/update/city/{id}', [App\Http\Controllers\Api\CityController::class, 'update']);
    Route::post('/delete/city/{id}', [App\Http\Controllers\Api\CityController::class, 'delete']);

});

//areas routes
Route::middleware([ 'localization'])->group(function () {

    Route::get('/areas', [App\Http\Controllers\Api\AreaController::class, 'all']);
    Route::get('/areas/{id}', [App\Http\Controllers\Api\AreaController::class, 'index']);
    Route::get('/area/{id}', [App\Http\Controllers\Api\AreaController::class, 'get_area']);
    Route::post('/create/area', [App\Http\Controllers\Api\AreaController::class, 'create']);
    Route::post('/update/area/{id}', [App\Http\Controllers\Api\AreaController::class, 'update']);
    Route::post('/delete/area/{id}', [App\Http\Controllers\Api\AreaController::class, 'delete']);

});

//user route 
Route::middleware([ 'auth','localization'])->group(function () {

    Route::post('/delete/user/{id}', [App\Http\Controllers\Api\UserController::class, 'delete']);
    Route::get('/users', [App\Http\Controllers\Api\UserController::class, 'index']);
    Route::post('/update/user', [App\Http\Controllers\Api\UserController::class, 'update']);
    Route::post('/update/password', [App\Http\Controllers\Api\UserController::class, 'update_password']);

});
Route::get('/user/{id}', [App\Http\Controllers\Api\UserController::class, 'get_user']);

//audit_logs
Route::middleware([ 'localization'])->group(function () {

    Route::get('/audit_logs', [App\Http\Controllers\Api\AuditLogsController::class, 'index']);

});
