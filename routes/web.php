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
/* Auth Login & Register */
Route::group(['prefix' => '/login'], function() {
    Route::get('/' ,'AuthController@LoginView')->name('login.view');
    Route::POST('/procces' ,'AuthController@LoginProcess')->name('login.process');
});

/* Users Dashboard */
Route::group(['prefix' => '/users'], function() {
    Route::get('/' ,'UsersController@UsersView')->name('users.view');
});

/* Admin Dashboard */
Route::group(['prefix' => '/admin'], function() {
    Route::get('/' ,'AdminController@AdminView')->name('admin.view');
    // Route::get('/management-users' ,'ManagementUsersAdmin@ManagementUsers')->name('management.user');
    Route::resources([
		'management-users' => 'ManagementUsersAdmin'
	]);
});

/* Petugas Dashboard */
Route::group(['prefix' => '/petugas'], function() {
    Route::get('/' ,'PetugasController@PetugasView')->name('petugas.view');
});

Route::get('/', function () {
    return view('welcome');
});