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


//Frontend Routes

Route::get('/', function () {
    return view('welcome');
}); 

Auth::routes();






//Backend Routes
Route::get('/admin', 'Admin\AdminController@login_form')->name('admin');
Route::post('user/login', 'Admin\AdminController@login_user')->name('user.login');
Route::get('reset-password', 'Admin\AdminController@password_reset_form')->name('user.reset');
Route::middleware([CheckSession::class])->group(function () {
	Route::get('user/home', 'Admin\HomeController@user_home')->name('user.home');
	Route::get('logout', 'Admin\AdminController@user_logout')->name('logout');

	//User
	Route::get('user/list', 'Admin\UserController@list_users')->name('user.list');
	Route::get('artist/list', 'Admin\UserController@list_artists')->name('user.artists');

	//Genre
	Route::get('genre/list', 'Admin\GenreController@list_records')->name('genre.list');
	Route::get('genre/add', 'Admin\GenreController@add_form')->name('genre.add');
	route::post('genre/create', 'Admin\GenreController@create_record')->name('genre.create');
	Route::get('genre/edit/{id}', 'Admin\GenreController@edit_form')->name('genre.edit');
	Route::post('genre/update', 'Admin\GenreController@update_record')->name('genre.update');
	Route::get('genre/del/{id}', 'Admin\GenreController@del_record')->name('genre.del');
	Route::get('genre/status/update', 'Admin\GenreController@change_status')->name('genre.status');

});
