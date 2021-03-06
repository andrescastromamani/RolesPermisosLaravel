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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Routes
Route::middleware(['auth'])->group(function (){
    //Roles
    Route::get('roles' , 'RoleController@index')->name('roles.index')
        ->middleware('has.permission:roles.index');
    Route::post('roles/store' , 'RoleController@store')->name('roles.store')
        ->middleware('has.permission:roles.create');
    Route::get('roles/create' , 'RoleController@create')->name('roles.create')
        ->middleware('has.permission:roles.create');
    Route::put('roles/{role}' , 'RoleController@update')->name('roles.update')
        ->middleware('has.permission:roles.edit');
    Route::get('roles/{role}' , 'RoleController@show')->name('roles.show')
        ->middleware('has.permission:roles.show');
    Route::delete('roles/{role}' , 'RoleController@destroy')->name('roles.destroy')
        ->middleware('has.permission:roles.destroy');
    Route::get('roles/{role}/edit' , 'RoleController@edit')->name('roles.edit')
        ->middleware('has.permission:roles.edit');

    //Products
    Route::get('products' , 'ProductController@index')->name('products.index')
        ->middleware('has.permission:products.index');
    Route::post('products/store' , 'ProductController@store')->name('products.store')
        ->middleware('has.permission:products.create');
    Route::get('products/create' , 'ProductController@create')->name('products.create')
        ->middleware('has.permission:products.create');
    Route::put('products/{product}' , 'ProductController@update')->name('products.update')
        ->middleware('has.permission:products.edit');
    Route::get('products/{product}' , 'ProductController@show')->name('products.show')
        ->middleware('has.permission:products.show');
    Route::delete('products/{product}' , 'ProductController@destroy')->name('products.destroy')
        ->middleware('has.permission:products.destroy');
    Route::get('products/{product}/edit' , 'ProductController@edit')->name('products.edit')
        ->middleware('has.permission:products.edit');

    //Users
    Route::get('users' , 'UserController@index')->name('users.index')
        ->middleware('has.permission:users.index');
    Route::put('users/{user}' , 'UserController@update')->name('users.update')
        ->middleware('has.permission:users.edit');
    Route::get('users/{user}' , 'UserController@show')->name('users.show')
        ->middleware('has.permission:users.show');
    Route::delete('users/{user}' , 'UserController@destroy')->name('users.destroy')
        ->middleware('has.permission:users.destroy');
    Route::get('users/{user}/edit' , 'UserController@edit')->name('users.edit')
        ->middleware('has.permission:users.edit');
});
