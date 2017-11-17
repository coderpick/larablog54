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

/*
 ---------------------------------------
 User Routs
 ---------------------------------------
 */

Route::group(['namespace'=>'User'], function(){
	Route::get('/','HomeController@index');	
	Route::get('/about','HomeController@about');
	Route::get('/contact','HomeController@contact');
	Route::get('/post','PostController@index');
});


/*
 ---------------------------------------
 Admin Routs
 ---------------------------------------
 */
Route::group(['namespace'=>'Admin'], function(){

	Route::get('admin/home','AdminHomeController@index')->name('admin/home');	
	//Users route
	Route::resource('admin/user','UserController');

	//Post Routs
	Route::resource('admin/post','PostController');

	//Category Routs
	Route::resource('admin/category','CategoryController');

	//Tags Routes
	Route::resource('admin/tag','TagController');

});





