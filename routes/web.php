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
Route::resource('pessoa', 'PessoaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AuthController@login')->name('admin');

Route::get('/admin/login', 'AuthController@loginForm')->name('admin.login');

Route::get('/admin/logout', 'AuthController@logout')->name('admin.logout');

Route::post('/admin/login/do', 'AuthController@autentica')->name('admin.login.do');

Route::get('/auth/register', 'auth\RegisterController@create')->name('auth.register');