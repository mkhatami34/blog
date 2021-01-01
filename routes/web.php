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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/layout', function () {
    return view('layouts.layout');
});
//kategori
Route::get('/kategori', 'UserController@categori')->name('category');
Route::get('/tambah-kategori', 'UserController@createCategory')->name('create_category');
Route::post('/store-kategori', 'UserController@storeCategory')->name('store_category');
Route::get('/edit-kategori/{id}', 'UserController@EditCategory')->name('edit_category');
Route::patch('/update-kategori', 'UserController@UpdateCategory')->name('update_category');
Route::delete('/hapus-kategori/{id}', 'UserController@DeleteCategory')->name('delete_category');
//artikel
Route::get('/artikel', 'UserController@article')->name('article');
Route::get('/tambah-artikel', 'UserController@createArticle')->name('create_article');