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

Route::get('/', 'Welcome')->name('welcome');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::resource('products', 'ProductController')->names('products');
Route::resource('categories', 'CategoryController')->names('categories');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/cart/{id}/add', 'CartController@add')->name('cart.add');
Route::delete('/cart/{rowId}/del', 'CartController@del')->name('cart.del');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/cart/clear', 'CartController@clear')->name('cart.clear');
Route::post('/cart/checkout', 'CartController@checkout')->name('cart.checkout');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('admin/products', 'admin\ProductController')->names('admin.products');
    Route::resource('admin/categories', 'admin\CategoryController')->names('admin.categories');
    Route::resource('admin/orders', 'admin\OrderController')->names('admin.orders');
    Route::resource('admin/actual', 'admin\ActualController')->names('admin.actual');

	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

