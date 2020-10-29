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
	    return view('pages.index');
	});

	Route::get('contact-us', 'App\Http\Controllers\ContactController@Contact')->name('contact');
	Route::get('all-student', 'App\Http\Controllers\StudentController@Student')->name('student');
	Route::get('about-us', 'App\Http\Controllers\AboutController@About')->name('about');
	Route::get('write-post', 'App\Http\Controllers\WritePostController@WritePost')->name('write.post');

	//write crud are here
	Route::get('add-category', 'App\Http\Controllers\AddCategoryController@AddCategory')->name('add.category');
	Route::post('store-category', 'App\Http\Controllers\StoreCategoryController@StoreCategory')->name('store.category');
