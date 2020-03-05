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
});

Route::get('/card', 'FrontController@news');
Route::get('/', 'FrontController@index');
Route::get('/hollow', 'FrontController@hollow');

Route::resource('/Detail', 'CardController');

Route::post('/newscontroll/store', 'NewsController@store');
Route::get('/pics', 'FrontController@pic');
Route::resource('product', 'ProductController');



Route::resource('/relation', 'RelationController');






Auth::routes();
