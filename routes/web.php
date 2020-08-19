<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
 //   return view('pages.index');
//});

Route::get('/','helloController@index');
Route::get('contact/us','helloController@contact')->name('contact');
Route::get('about/us','helloController@about')->name('about');

Route::get('write/post','postController@writePost')->name('write.post');

//category crud are here===========

Route::get('all/category','postController@AllCategory')->name('all.category');
Route::get('add/category','postController@AddCategory')->name('add.category');
Route::post('store/category','postController@StoreCategory')->name('store.category');
Route::get('view/category/{id}','postController@ViewCategory');
Route::get('delete/category/{id}','postController@DeleteCategory');
Route::get('edit/category/{id}','postController@EditCategory');
Route::post('update/category/{id}','postController@UpdateCategory');

//post crud are here =========

Route::get('write/post','imageController@writePost')->name('write.post');
Route::post('store/post','imageController@StorePost')->name('store.post');
Route::get('all/post','imageController@AllPost')->name('all.post');
Route::get('view/post/{id}','imageController@ViewPost');
Route::get('edit/post/{id}','imageController@EditPost');
Route::post('update/post/{id}','imageController@UpdatePost');
Route::get('delete/post/{id}','imageController@DeletePost');




