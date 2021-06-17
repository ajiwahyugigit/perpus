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


Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', 'DashboardController@index')
        ->name('dashboard');
// users
        Route::get('users', 'UsersController@index');
        Route::get('users/create/', 'UsersController@create');
        Route::post('users/store/', 'UsersController@store');
        
        Route::get('users/edit/{id}', 'UsersController@edit')->name('users.edit');
        Route::put('/users/update/{id}', 'UsersController@update')->name('users.update');
        Route::delete('/users/destroy/{id}','UsersController@destroy');

// books
        Route::get('books', 'BooksController@index');
        Route::get('books/create', 'BooksController@create');
        Route::post('books/store/', 'BooksController@store');
        Route::get('books/edit/{id}', 'BooksController@edit');
        Route::put('books/update/{id}', 'BooksController@update');

// pinjaman
        Route::get('pinjaman', 'PinjamanController@index');
        Route::get('pinjaman/create', 'PinjamanController@create');
        Route::post('pinjaman/store', 'PinjamanController@store');
        Route::get('pinjaman/edit/{id}', 'PinjamanController@edit');
        Route::put('pinjaman/update/{id}', 'PinjamanController@update');
        Route::get('pinjaman/show/{id}', 'PinjamanController@show');
        Route::delete('pinjaman/destroy/{id}', 'PinjamanController@destroy');
});