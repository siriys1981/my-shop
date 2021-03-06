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

Route::get('/', 'MainController@index');
Route::get('/category/{slug}', 'MainController@category');
Route::get('product/{slug}', 'MainController@product');
Route::get('/contacts', 'MainController@contacts');

Route::post('product/{slug}', 'MainController@getReview');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
	'prefix' => 'admin',
	'namespace' => 'Admin',
	'middleware' => ['auth', 'admin']
], function(){
	Route::get('/', 'AdminController@index'); //функция-посредник для проверки авторизации
	Route::resource('/category', 'CategoryController');
	Route::resource('/product', 'ProductController');
});



