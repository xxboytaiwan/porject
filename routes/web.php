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


use Illuminate\Routing\RouteGroup;
// ['auth], 'prefix  增加前綴
// Route::group(['middleware' => ['auth'], function () {
// Route::get('/newscontroll','NewsController@newscontroll');
// Route::get('/home', 'HomeController@index');
// });

Route::group(['middleware' => 'auth'], function () {
    Route::get('/newscontroll', 'NewsController@newscontroll');
    Route::get('/home', 'HomeController@index');
    Route::resource('/data', 'DataController');
    Route::resource('/update', 'UpdateController');

    //總產品管理
    Route::get('/product_manager','ProductManager@index');
    Route::get('/product_manager/create','ProductManager@create');

    //產品類型管理
    Route::resource('/product_manager/producttypes', 'ProductTypesController');

    //產品管理
    Route::resource('/product_manager/products', 'ProductsController');


});

Route::get('/card', 'FrontController@news');
Route::get('/', 'FrontController@index');
Route::get('/hollow', 'FrontController@hollow');

Route::resource('/Detail', 'CardController');

Route::post('/newscontroll/store', 'NewsController@store');
Route::get('/pics', 'FrontController@pic');
Route::resource('product', 'ProductController');



Route::resource('/relation', 'RelationController');
Route::post('/relation/delete/','RelationController@attachdelete');
Route::post('/relation/ajaxupload','RelationController@ajax_upload');

Route::get('/summernote','SummernoteController@index');





Auth::routes();
