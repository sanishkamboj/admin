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
use Illuminate\Http\Request;
use App\Activity;
use App\Http\Middleware\CheckSession;

Route::get('/', 'AdminController@login_form')->name('/');
Route::get('/login', 'AdminController@login_form')->name('/login');

Route::post('user/login', 'AdminController@login_user')->name('user.login');
Route::get('reset-password', 'AdminController@password_reset_form')->name('user.reset');

Route::middleware([CheckSession::class])->group(function () {
	Route::get('user/home', 'HomeController@user_home')->name('user.home');
	Route::get('logout', 'AdminController@user_logout')->name('logout');

	//User
	Route::get('user/list', 'UserController@list_users')->name('user.list');
	Route::get('artist/list', 'UserController@list_artists')->name('user.artists');

	//Genre
	Route::get('genre/list', 'GenreController@list_records')->name('genre.list');
	Route::get('genre/add', 'GenreController@add_form')->name('genre.add');
	route::post('genre/create', 'GenreController@create_record')->name('genre.create');
	Route::get('genre/edit/{id}', 'GenreController@edit_form')->name('genre.edit');
	Route::post('genre/update', 'GenreController@update_record')->name('genre.update');
	Route::get('genre/del/{id}', 'GenreController@del_record')->name('genre.del');
	Route::get('genre/status/update', 'GenreController@change_status')->name('genre.status');

});
