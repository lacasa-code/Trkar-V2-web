<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\VerifyEmailController;


//auth routes
Route::middleware([ 'api','localization'])->group(function () {

    Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);
    Route::post('/admin/login', [App\Http\Controllers\Api\AuthController::class, 'Admin_login']);
    Route::post('/register', [App\Http\Controllers\Api\AuthController::class, 'register']);
    Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);
    Route::post('/refresh', [App\Http\Controllers\Api\AuthController::class, 'refresh']);
    Route::get('/isValidToken', [App\Http\Controllers\Api\AuthController::class, 'isValidToken']);
    Route::get('/userProfile', [App\Http\Controllers\Api\AuthController::class, 'userProfile']);

});
Route::middleware([ 'api','localization'])->group(function () {

    Route::post('/admin/login', [App\Http\Controllers\Api\Admin\AuthController::class, 'Admin_login']);
    Route::post('/admin/register', [App\Http\Controllers\Api\Admin\AuthController::class, 'register']);
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

//categories routes
Route::middleware([ 'localization'])->group(function () {

    Route::get('/categories', [App\Http\Controllers\Api\CategoryController::class, 'all']);
    Route::get('/main/categories', [App\Http\Controllers\Api\CategoryController::class, 'main']);
    Route::get('/subcategories/{id}', [App\Http\Controllers\Api\CategoryController::class, 'get_sub']);
    Route::post('/create/category', [App\Http\Controllers\Api\CategoryController::class, 'create']);
    Route::post('/update/category/{id}', [App\Http\Controllers\Api\CategoryController::class, 'update']);
    Route::post('/delete/category/{id}', [App\Http\Controllers\Api\CategoryController::class, 'delete']);

});

//car mades routes
Route::middleware([ 'localization'])->group(function () {

    Route::get('/car/mades', [App\Http\Controllers\Api\CarMadesController::class, 'all']);
    Route::get('/category/car/mades/{id}', [App\Http\Controllers\Api\CarMadesController::class, 'category_mades']);
    Route::post('/create/car/mades', [App\Http\Controllers\Api\CarMadesController::class, 'create']);
    Route::post('/update/car/mades/{id}', [App\Http\Controllers\Api\CarMadesController::class, 'update']);
    Route::post('/delete/car/mades/{id}', [App\Http\Controllers\Api\CarMadesController::class, 'delete']);

});

//tyres and seasons
Route::middleware([ 'localization'])->group(function () {

    Route::get('/attribute/tyre/{id_att}/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'get_by_parent_attribute']);
    Route::get('/attribute/tyre/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'get_by_parent']);
    Route::get('/tyre/seasons/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'get_width_by_season']);
    Route::get('/tyre/height/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'get_hight_by_width']);
    Route::get('/tyre/diameter/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'get_diameter_by_hight']);
    Route::get('/tyre/manufactuere/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'get_manufactuere_by_width']);
    Route::get('/tyre/load/index/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'get_load_by_width']);
    Route::get('/tyre/speed/rate/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'get_speed_by_width']);
    Route::get('/tyre/axle/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'get_axle_by_width']);
    Route::get('/seasons', [App\Http\Controllers\Api\SeasonController::class, 'all']);

    Route::get('/attributes', [App\Http\Controllers\Api\AttributeTyreController::class, 'all_att']);
    Route::post('/create/attribute/tyre', [App\Http\Controllers\Api\AttributeTyreController::class, 'create']);
    Route::post('/update/attribute/tyre/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'update']);
    Route::post('/delete/attribute/tyre/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'delete']);

});

//car models routes
Route::middleware([ 'localization'])->group(function () {

    Route::get('/car/model', [App\Http\Controllers\Api\CarModelsController::class, 'all']);
    Route::get('/mades/car/model/{id}', [App\Http\Controllers\Api\CarModelsController::class, 'models_of_mades']);
    Route::post('/create/car/model', [App\Http\Controllers\Api\CarModelsController::class, 'create']);
    Route::post('/update/car/model/{id}', [App\Http\Controllers\Api\CarModelsController::class, 'update']);
    Route::post('/delete/car/model/{id}', [App\Http\Controllers\Api\CarModelsController::class, 'delete']);

});

//car models routes
Route::middleware([ 'localization'])->group(function () {

    Route::get('/car/engine', [App\Http\Controllers\Api\CarEngineController::class, 'all']);
    Route::post('/create/car/engine', [App\Http\Controllers\Api\CarEngineController::class, 'create']);
    Route::get('/model/car/engines/{id}', [App\Http\Controllers\Api\CarEngineController::class, 'engines_of_model']);
    Route::post('/update/car/engine/{id}', [App\Http\Controllers\Api\CarEngineController::class, 'update']);
    Route::post('/delete/car/engine/{id}', [App\Http\Controllers\Api\CarEngineController::class, 'delete']);

});

//years routes
Route::middleware([ 'localization'])->group(function () {

    Route::get('/car/years', [App\Http\Controllers\Api\YearsController::class, 'all']);
    Route::post('/create/car/year', [App\Http\Controllers\Api\YearsController::class, 'create']);
    Route::post('/update/car/year/{id}', [App\Http\Controllers\Api\YearsController::class, 'update']);
    Route::post('/delete/car/year/{id}', [App\Http\Controllers\Api\YearsController::class, 'delete']);

});

//manufacturers route
Route::middleware([ 'localization'])->group(function () {

    Route::get('/manufacturers', [App\Http\Controllers\Api\ManufacturersController::class, 'all']);
    Route::get('/category/manufacturers/{id}', [App\Http\Controllers\Api\ManufacturersController::class, 'manufacturers_of_category']);
    Route::post('/create/manufacturer', [App\Http\Controllers\Api\ManufacturersController::class, 'create']);
    Route::post('/update/manufacturer/{id}', [App\Http\Controllers\Api\ManufacturersController::class, 'update']);
    Route::post('/delete/manufacturer/{id}', [App\Http\Controllers\Api\ManufacturersController::class, 'delete']);

});

//original countries route
Route::middleware([ 'localization'])->group(function () {

    Route::get('/original/countries', [App\Http\Controllers\Api\OriginalCountryController::class, 'all']);
    Route::post('/create/original/country', [App\Http\Controllers\Api\OriginalCountryController::class, 'create']);
    Route::post('/update/original/country/{id}', [App\Http\Controllers\Api\OriginalCountryController::class, 'update']);
    Route::post('/delete/original/country/{id}', [App\Http\Controllers\Api\OriginalCountryController::class, 'delete']);

});



//user route 
Route::middleware([ 'auth','localization'])->group(function () {

    Route::post('/delete/user/{id}', [App\Http\Controllers\Api\UserController::class, 'delete']);
    Route::get('/users', [App\Http\Controllers\Api\UserController::class, 'index']);
    Route::get('/user/{id}', [App\Http\Controllers\Api\UserController::class, 'get_user']);
    Route::post('/update/user', [App\Http\Controllers\Api\UserController::class, 'update']);
    Route::post('/update/password', [App\Http\Controllers\Api\UserController::class, 'update_password']);

});

//audit_logs
Route::middleware([ 'localization'])->group(function () {

    Route::get('/audit_logs', [App\Http\Controllers\Api\AuditLogsController::class, 'index']);

});
Route::get('/vin/{vin}', [App\Http\Controllers\Api\VINController::class, 'vin']);
