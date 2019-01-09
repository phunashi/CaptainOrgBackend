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

// Route::get('/{any}', function () {
//     return view('app');
// })->where('any', '.*');


// Route::any('/', function() {
//     return view('layouts.mainlayout');
// });
Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
    'banners' => 'BannerController',
    'banner_descriptions' => 'BannerDescriptionController',
    'categories'=>'CategoryController',
    'products'=>'ProductController'
]);
Route::get('/attribute_edit/{id?}','AttributeController@attribute_edit' );
Route::get('/attribute_index','AttributeController@attribute_index' );
Route::get('/attribute_create','AttributeController@attribute_create' );
Route::post('/attribute_store','AttributeController@attribute_store' );
Route::get('/getJsonAttributes', function () {$obj = new App\DataAccessLayer\Helpers\utilities();return $obj->getJsonAttributes();});

});
