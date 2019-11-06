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
//  Frontend 


Route::group(['namespace'=>'Frontend'],function(){
	Route::get('/','HomepageController@index');
	Route::get('/add-selfie','HomepageController@selfie');
	Route::post('/add-selfie','HomepageController@selfiePost');
	Route::get('/bio','HomepageController@bio');
	Route::post('/bio','HomepageController@bioPost');
	Route::get('/add-social-link','HomepageController@add_social_link');
	Route::post('/add-social-link','HomepageController@add_social_link_post');
	Route::get('/profile','HomepageController@profile');
	Route::get('/edit','HomepageController@edit');
	Route::post('/edit','HomepageController@editPost');

});
Route::get('logout', 'HomeController@logout')->name('logout');







//  Backend


//============================ Backend Route Start ============================//
Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm');
// Route::post('admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login');
Route::get('admin/register', 'Auth\AdminRegisterController@showRegistrationForm');
Route::post('admin/register', 'Auth\AdminRegisterController@register')->name('admin.register');
Route::group(['namespace'=>'Backend'],function(){
	Route::group(['middleware'=>['assign.guard:admin,admin/login']],function(){
		
		Route::prefix('admin')->group(function () {
			Route::get('/dashboard','HomeController@index')->name('dashboard');
			Route::get('/users','UsersController@showUsers');
			Route::get('/delete-users/{id}','UsersController@destroyUsers');
			Route::get('/edit-users/{id}', 'UsersController@editUsers');
			Route::POST('/edit-users/{id}', 'UsersController@updateUsers');
			Route::get('/change-password', 'UsersController@chnagePassword');
			Route::post('/change-password', 'UsersController@savePassword');
			Route::get('/all-users','HomeController@users');
			
		});
	});
});


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
