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
    Route::get('/verifiy/email/{code}/{email}', [App\Http\Controllers\Api\AuthController::class, 'verifiy']);
    Route::post('/resend/email/{email}', [App\Http\Controllers\Api\AuthController::class, 'resend']);
    Route::get('/forget/password/{email}', [App\Http\Controllers\Api\AuthController::class, 'forget_password']);
});

Route::middleware(['localization'])->group(function () {
    Route::get('/verifiy/reset/code/{code}/{email}', [App\Http\Controllers\Api\ForgetPasswordController::class, 'verifiy']);
    Route::post('/reset/password/{email}', [App\Http\Controllers\Api\ForgetPasswordController::class, 'update_password']);
});

Route::middleware([ 'api','localization'])->group(function () {

    Route::post('/admin/login', [App\Http\Controllers\Api\Admin\AuthController::class, 'Admin_login']);
    Route::post('/admin/register', [App\Http\Controllers\Api\Admin\AuthController::class, 'register']);
    Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);
    Route::post('/refresh', [App\Http\Controllers\Api\AuthController::class, 'refresh']);
    Route::get('/isValidToken', [App\Http\Controllers\Api\AuthController::class, 'isValidToken']);
    Route::get('/userProfile', [App\Http\Controllers\Api\AuthController::class, 'userProfile']);

});


//vendor auth 
Route::middleware([ 'api','localization'])->group(function () {

    Route::post('/vendor/login', [App\Http\Controllers\Api\Vendor\AuthController::class, 'login']);
    Route::post('/vendor/register', [App\Http\Controllers\Api\Vendor\AuthController::class, 'register']);
    Route::get('/vendor/isValidToken', [App\Http\Controllers\Api\Vendor\AuthController::class, 'isValidToken']);
    Route::get('/vendor/userProfile', [App\Http\Controllers\Api\Vendor\AuthController::class, 'userProfile']);
    Route::post('/vendor/logout', [App\Http\Controllers\Api\Vendor\AuthController::class, 'logout']);
    Route::post('/vendor/refresh', [App\Http\Controllers\Api\Vendor\AuthController::class, 'refresh']);
    Route::get('/vendor/verifiy/email/{code}/{email}', [App\Http\Controllers\Api\Vendor\AuthController::class, 'verifiy']);
    Route::post('/vendor/resend/email/{email}', [App\Http\Controllers\Api\Vendor\AuthController::class, 'resend']);
  
});
Route::post('/vendor/reset/password/{email}', [App\Http\Controllers\Api\Vendor\ForgetPasswordController::class, 'update_password']);


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
    Route::get('/search/categories', [App\Http\Controllers\Api\CategoryController::class, 'search']);

});

//car mades routes
Route::middleware([ 'localization'])->group(function () {

    Route::get('/car/mades', [App\Http\Controllers\Api\CarMadesController::class, 'all']);
    Route::get('/category/car/mades/{id}', [App\Http\Controllers\Api\CarMadesController::class, 'category_mades']);
    Route::post('/create/car/mades', [App\Http\Controllers\Api\CarMadesController::class, 'create']);
    Route::post('/update/car/mades/{id}', [App\Http\Controllers\Api\CarMadesController::class, 'update']);
    Route::post('/delete/car/mades/{id}', [App\Http\Controllers\Api\CarMadesController::class, 'delete']);
    Route::get('/search/car/mades', [App\Http\Controllers\Api\CarMadesController::class, 'search']);

});

//tyres and seasons
Route::middleware([ 'localization'])->group(function () {

    Route::get('/attribute/tyre/{id_att}/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'get_by_parent_attribute']);
    Route::get('/attribute/tyre/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'get_by_parent']);
    Route::get('/tyre/seasons/{type_id}/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'get_width_by_season']);
    Route::get('/tyre/height/{type_id}/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'get_hight_by_width']);
    Route::get('/tyre/diameter/{type_id}/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'get_diameter_by_hight']);
    Route::get('/tyre/manufactuere/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'get_manufactuere_by_width']);
    Route::get('/manufactueres/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'all_manufactuere']);
    Route::get('/tyre/load/index/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'get_load_by_width']);
    Route::get('/tyre/speed/rate/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'get_speed_by_width']);
    Route::get('/tyre/axle/{id}', [App\Http\Controllers\Api\AttributeTyreController::class, 'get_axle_by_width']);
    Route::get('/seasons', [App\Http\Controllers\Api\SeasonController::class, 'all']);
    Route::get('/tyre/types', [App\Http\Controllers\Api\TyreTypesController::class, 'all_types']);
    Route::post('/update/tyre/types/{id}', [App\Http\Controllers\Api\TyreTypesController::class, 'update']);

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
    Route::get('/search/car/model', [App\Http\Controllers\Api\CarModelsController::class, 'search']);

});

//car engines routes
Route::middleware([ 'localization'])->group(function () {

    Route::get('/car/engine', [App\Http\Controllers\Api\CarEngineController::class, 'all']);
    Route::post('/create/car/engine', [App\Http\Controllers\Api\CarEngineController::class, 'create']);
    Route::get('/model/car/engines/{id}', [App\Http\Controllers\Api\CarEngineController::class, 'engines_of_model']);
    Route::post('/update/car/engine/{id}', [App\Http\Controllers\Api\CarEngineController::class, 'update']);
    Route::post('/delete/car/engine/{id}', [App\Http\Controllers\Api\CarEngineController::class, 'delete']);
    Route::get('/search/car/engine', [App\Http\Controllers\Api\CarEngineController::class, 'search']);

});

//years routes
Route::middleware([ 'localization'])->group(function () {

    Route::get('/car/years', [App\Http\Controllers\Api\YearsController::class, 'all']);
    Route::post('/create/car/year', [App\Http\Controllers\Api\YearsController::class, 'create']);
    Route::post('/update/car/year/{id}', [App\Http\Controllers\Api\YearsController::class, 'update']);
    Route::post('/delete/car/year/{id}', [App\Http\Controllers\Api\YearsController::class, 'delete']);
    Route::get('/search/car/years', [App\Http\Controllers\Api\YearsController::class, 'search']);

});

//manufacturers route
Route::middleware([ 'localization'])->group(function () {

    Route::get('/manufacturers', [App\Http\Controllers\Api\ManufacturersController::class, 'all']);
    Route::get('/category/manufacturers/{id}', [App\Http\Controllers\Api\ManufacturersController::class, 'manufacturers_of_category']);
    Route::post('/create/manufacturer', [App\Http\Controllers\Api\ManufacturersController::class, 'create']);
    Route::post('/update/manufacturer/{id}', [App\Http\Controllers\Api\ManufacturersController::class, 'update']);
    Route::post('/update/manufacturer/image/{id}', [App\Http\Controllers\Api\ManufacturersController::class, 'update_image']);
    Route::post('/delete/manufacturer/{id}', [App\Http\Controllers\Api\ManufacturersController::class, 'delete']);
    Route::get('/search/manufacturers', [App\Http\Controllers\Api\ManufacturersController::class, 'search']);

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
Route::get('/store/types', [App\Http\Controllers\Api\Vendor\StoreTypeController::class, 'index']);

//store
Route::middleware([ 'localization'])->group(function () {

    Route::post('/create/store', [App\Http\Controllers\Api\Vendor\StoreController::class, 'create']);
    Route::post('/create/branch', [App\Http\Controllers\Api\Vendor\StoreController::class, 'create_branch']);

    Route::get('/vendor/store', [App\Http\Controllers\Api\Vendor\StoreController::class, 'get_vendor_store']);
    Route::get('/store/branchs/{id}', [App\Http\Controllers\Api\Vendor\StoreBranchController::class, 'index']);

});

//attachments
Route::middleware([ 'localization'])->group(function () {

    Route::post('/upload/attachment', [App\Http\Controllers\Api\Vendor\AttachmentsController::class, 'create']);

});

//verify mobile
Route::middleware([ 'localization'])->group(function () {

    Route::post('/verify/mobile/{otp}/{mobile}', [App\Http\Controllers\Api\Vendor\AuthController::class, 'verify_otp']);

});

Route::get('/generate/url/{name}', [App\Http\Controllers\Api\Vendor\StoreController::class, 'generate_url']);

// products
Route::middleware([ 'localization'])->group(function () {

    Route::post('/create/product', [App\Http\Controllers\Api\Vendor\ProductController::class, 'create_product']);
    Route::get('/product/details/{id}', [App\Http\Controllers\Api\Vendor\ProductController::class, 'index']);

    Route::get('/product/types', [App\Http\Controllers\Api\ProductTypesController::class, 'index']);
    Route::get('/vendor/product', [App\Http\Controllers\Api\Vendor\ProductController::class, 'vendor_products']);
    Route::get('/subcategory/product/{id}', [App\Http\Controllers\Api\Vendor\ProductController::class, 'category_products']);
    Route::post('/delete/product/{id}', [App\Http\Controllers\Api\Vendor\ProductController::class, 'delete']);

});

Route::middleware([ 'localization'])->group(function () {

    Route::get('/product/tag/{id}', [App\Http\Controllers\Api\Vendor\ProductTagsController::class, 'index']);
    Route::post('/create/product/tag', [App\Http\Controllers\Api\Vendor\ProductTagsController::class, 'create']);
    Route::post('/delete/product/tag/{id}', [App\Http\Controllers\Api\Vendor\ProductTagsController::class, 'delete']);
    Route::post('/mass/delete/product/tag/{id}', [App\Http\Controllers\Api\Vendor\ProductTagsController::class, 'mass_delete']);
    Route::post('/update/product/tag/{id}', [App\Http\Controllers\Api\Vendor\ProductTagsController::class, 'update']);


    Route::get('/product/att/{id}', [App\Http\Controllers\Api\Vendor\ProductAttributesController::class, 'index']);
    Route::post('/create/product/att', [App\Http\Controllers\Api\Vendor\ProductAttributesController::class, 'create']);
    Route::post('/delete/product/att/{id}', [App\Http\Controllers\Api\Vendor\ProductAttributesController::class, 'delete']);
    Route::post('/mass/delete/product/att/{id}', [App\Http\Controllers\Api\Vendor\ProductAttributesController::class, 'mass_delete']);
    Route::post('/update/product/att/{id}', [App\Http\Controllers\Api\Vendor\ProductAttributesController::class, 'update']);

    Route::get('/product/img/{id}', [App\Http\Controllers\Api\Vendor\ProductImageController::class, 'index']);
    Route::post('/create/product/img', [App\Http\Controllers\Api\Vendor\ProductImageController::class, 'create']);
    Route::post('/delete/product/img/{id}', [App\Http\Controllers\Api\Vendor\ProductImageController::class, 'delete']);
    Route::post('/mass/delete/product/img/{id}', [App\Http\Controllers\Api\Vendor\ProductImageController::class, 'mass_delete']);
    Route::post('/update/product/img/{id}', [App\Http\Controllers\Api\Vendor\ProductImageController::class, 'update']);

    
    Route::get('/product/comp/{id}', [App\Http\Controllers\Api\Vendor\CompatibleController::class, 'index']);
    Route::post('/create/product/comp', [App\Http\Controllers\Api\Vendor\CompatibleController::class, 'create']);
    Route::post('/delete/product/comp/{id}', [App\Http\Controllers\Api\Vendor\CompatibleController::class, 'delete']);
    Route::post('/mass/delete/product/comp/{id}', [App\Http\Controllers\Api\Vendor\CompatibleController::class, 'mass_delete']);
    Route::post('/update/product/comp/{id}', [App\Http\Controllers\Api\Vendor\CompatibleController::class, 'update']);

        
    Route::get('/product/qt/{id}', [App\Http\Controllers\Api\Vendor\ProductQuantityController::class, 'index']);
    Route::post('/create/product/qt', [App\Http\Controllers\Api\Vendor\ProductQuantityController::class, 'create']);
    Route::post('/delete/product/qt/{id}', [App\Http\Controllers\Api\Vendor\ProductQuantityController::class, 'delete']);
    Route::post('/mass/delete/product/qt/{id}', [App\Http\Controllers\Api\Vendor\ProductQuantityController::class, 'mass_delete']);
    Route::post('/update/product/qt/{id}', [App\Http\Controllers\Api\Vendor\ProductQuantityController::class, 'update']);

});

// wishlist
Route::middleware([ 'localization'])->group(function () {

    Route::post('/Add/wishlist/{id}', [App\Http\Controllers\Api\WishlistController::class, 'add_to_wishlist']);
    Route::post('/remove/wishlist/{id}', [App\Http\Controllers\Api\WishlistController::class, 'delete']);
    Route::get('/wishlist', [App\Http\Controllers\Api\WishlistController::class, 'index']);

});

//cart
Route::middleware([ 'localization'])->group(function () {

    Route::post('/Add/cart/{id}', [App\Http\Controllers\Api\CartController::class, 'Add_to_cart']);
    Route::post('/remove/cart/{id}', [App\Http\Controllers\Api\CartController::class, 'remove_from_cart']);
    Route::get('/cart', [App\Http\Controllers\Api\CartController::class, 'index']);

});